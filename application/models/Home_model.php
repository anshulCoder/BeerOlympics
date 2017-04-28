<?php

/**
 * Class Dashboard_Model
 * @property Mydatafetch_library $mydatafetch_library
 * @property Generalfunction_library $generalfunction_library
 */
class Home_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();

        $this->load->library('mydatafetch_library');
	}
    public function saveBeerRecord($details)
    {
        $this->db->insert('beersmaster', $details);
        return true;
    }
    public function saveErrorLog($details)
    {
        $details['insertedDateTime'] = date('Y-m-d H:i:s');
        $details['fromWhere'] = 'Beer Olympics';
        $this->db->insert('errorlogger', $details);
        return true;
    }

    public function checkCouponCode($code)
    {
        $query = "SELECT * FROM olympicscouponmaster 
                  WHERE couponCode LIKE '".$code."'";

        $result = $this->db->query($query)->row_array();

        return $result;
    }
    public function saveCaptainRecord($details)
    {
        $this->db->insert('olympicscaptainmaster', $details);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function markCouponAsUsed($details, $couponId)
    {
        $this->db->where('id',$couponId);
        $this->db->update('olympicscouponmaster', $details);
        return true;
    }
    public function saveAthleteRecord($details)
    {
        $this->db->insert('olympicsathletemaster', $details);
        return true;
    }
    public function savePaymentRecord($details)
    {
        $this->db->insert('olympicspaymentmaster', $details);
        $insertId = $this->db->insert_id();
        return $insertId;
    }
    public function updatePayDetails($details, $payId)
    {
        $this->db->where('id',$payId);
        $this->db->update('olympicspaymentmaster', $details);
        return true;
    }

    public function getPayRecordByReqId($reqId)
    {
        $query = "SELECT opm.*,ocm.capEmail,obm.busEmail FROM olympicspaymentmaster opm
                  LEFT JOIN olympicscaptainmaster ocm ON opm.capId = ocm.id
                  LEFT JOIN olympicsbusmaster obm ON opm.busId = obm.id
                  WHERE paymentId LIKE '".$reqId."'";
        $result = $this->db->query($query)->row_array();
        return $result;
    }
    public function getAllTeam($capId)
    {
        $query = "SELECT ocm.id as 'cid',ocm.teamName, ocm.capName,ocm.capAge,ocm.capEmail,ocm.capMob,
                  ocm.capCity,ocm.capZip,ocm.capTshirt,ocm.ifBusRequired as 'ifBusRequiredCap',oam.athleteName, 
                  oam.athleteAge, oam.athleteTshirt,oam.ifBusRequired as 'ifBusRequiredAthlete' FROM olympicscaptainmaster ocm 
                  LEFT JOIN olympicsathletemaster oam ON ocm.id = oam.capId 
                   WHERE ocm.id = ".$capId;

        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function getAllBusTeam($busId)
    {
        $query = "SELECT * FROM olympicsbusmaster  
                   WHERE id = ".$busId;

        $result = $this->db->query($query)->row_array();
        return $result;
    }
    public function saveSwiftMailLog($post)
    {
        $this->db->insert('swiftmailerlogs', $post);
        return true;
    }
    public function saveWaitMailLog($post)
    {
        $this->db->insert('pendingmailsmaster', $post);
        return true;
    }

    public function saveBusRecord($details)
    {
        $this->db->insert('olympicsbusmaster', $details);
        $insertId = $this->db->insert_id();
        return $insertId;
    }

    public function getAllPendingMails()
    {
        $query = "SELECT * FROM pendingmailsmaster WHERE sendStatus LIKE 'waiting'";

        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function updateMailDetails($details, $mailId)
    {
        $this->db->where('id',$mailId);
        $this->db->update('pendingmailsmaster', $details);
        return true;
    }

}

