<?php
	class C_register extends CI_CONTROLLER
	{
		public function __construct()
		{
			parent::__construct();
			//LOAD  MODEL  dan LIBRARI
		}

		public function index()
		{
			$this->load->view('templates/page_header');
			$this->load->view('V_register');
			$this->load->view('templates/page_footer');
		}
	}
?>