<?php 
class C_userSetting extends CI_CONTROLLER
{	
	private $image = 'default.jpg';

	public function __construct()
		{
			parent::__construct();
			$this->load->model("M_register");
			//LOAD  MODEL  dan LIBRARI
		}

	public function index()
	{
		if(!isset($_SESSION['username'])){
			redirect('C_login');
		}
		$this->load->view('templates/page_header');
		$this->load->view('V_userSetting');
		$this->load->view('templates/page_footer');
	}

	public function userEdit()
	{
		$this->M_register->updateprofile();
		redirect('C_usrProfile');
	}

}
?>