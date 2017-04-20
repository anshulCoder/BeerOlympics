<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Home
 * @property generalfunction_library $generalfunction_library
 * @property Home_model $home_model
 */

class Home extends MY_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    public function index()
	{
		$data = array();
		$data['globalStyle'] = $this->dataformatinghtml_library->getGlobalStyleHtml($data);
		$data['globalJs'] = $this->dataformatinghtml_library->getGlobalJsHtml($data);
		$data['headerView'] = $this->dataformatinghtml_library->getHeaderHtml($data);
        $data['title'] = "Audit System";
		$this->load->view('HomeView', $data);
	}

	public function saveBeerRecords()
    {
        $post = $this->input->post();

        var_dump($post);
        $ids = explode(',',$post['beer_id']);
        $locs = explode(',',$post['location_name']);

        for($i=0;$i<count($ids);$i++)
        {
            $details = array(
                'beer_id' => $ids[$i],
                'beer_name' => $post['beer_name'],
                'beer_qty' => $post['beer_qty'],
                'liters_consumed' => $post['liters_consumed'],
                'beer_catagory' => $post['beer_cat'],
                'location_name' => $locs[$i],
                'updateDateTime' => date('Y-m-d H:i:s')
            );

            $this->home_model->saveBeerRecord($details);
        }
        echo 'Success';
    }

    public function mrpData()
    {
        $data = array();
        $data['globalStyle'] = $this->dataformatinghtml_library->getGlobalStyleHtml($data);
        $data['globalJs'] = $this->dataformatinghtml_library->getGlobalJsHtml($data);
        $data['headerView'] = $this->dataformatinghtml_library->getHeaderHtml($data);

        $this->load->view('MrpDataView', $data);
    }

}
