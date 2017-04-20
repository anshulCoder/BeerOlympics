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
}
