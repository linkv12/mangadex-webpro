<?php
	class C_login extends CI_CONTROLLER
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_register");
			//LOAD  MODEL  dan LIBRARI
		}

		public function index()
		{
			$this->load->view('templates/page_header');
			#$this->load->view('testi/test_login');
			$this->load->view('V_login');
			$this->load->view('templates/page_footer');
		}

		public function login_process()
		{
			$uname = $this->input->post('login_username');
			$password = $this->input->post('login_password');
			echo $uname.' - '.md5($password);
			$login = $this->M_register->user_auth($uname, $password);

			if(!empty($login))
			{
				$this->session->set_userdata($login);
				#redirect('C_usrProfile');
			}else{
				$this->session->set_flashdata('logfail', 'gagal login');
				#redirect('C_login');
			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect('C_login');
		}
	}
?>
