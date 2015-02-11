<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); error_reporting(E_STRICT);

class Landing_Page_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		$this->mongo_model->connectToDB();
		//$this->load->view('landing_page');
	}
}

/* End of file landing_page_controller.php */
/* Location: ./application/controllers/landing_page_controller.php */