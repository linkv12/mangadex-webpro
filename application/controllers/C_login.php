<?php
	class C_login extends CI_CONTROLLER
	{
		public function __construct()
		{
			parent::__construct();
			//LOAD  MODEL  dan LIBRARI
		}

		public function index()
		{
			$this->load->view('templates/page_header');
			$this->load->view('V_login');
			$this->load->view('templates/page_footer');
		}

		public function login_process()
		{
			
		}
	}
?>