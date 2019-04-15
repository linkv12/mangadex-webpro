<?php
class C_usrProfile extends CI_CONTROLLER
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
			//LOAD  MODEL  dan LIBRARI
	}

	public function index()
	{
		if (!isset($_SESSION['username'])) {
			redirect('C_login');
		}
		$this->load->view('templates/page_header');
		$this->load->view('V_usrProfile');
		$this->load->view('templates/page_footer');
	}

	public function edituser()
	{
		
	}

}
	


?>