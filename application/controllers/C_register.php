<?php
class C_register extends CI_CONTROLLER
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_register');
			//LOAD  MODEL  dan LIBRARI
	}

	public function index()
	{
		$this->load->view('templates/page_header');
		$this->load->view('V_register');
		$this->load->view('templates/page_footer');
	}

	public function daftar()
	{
		$this->form_validation->set_rules('reg_username', 'Username', 'trim|required');
		$this->form_validation->set_rules('reg_pass1','Password','trim|required');
		$this->form_validation->set_rules('reg_pass2','Password Confirmation','trim|required|matches[reg_pass1]');
		$this->form_validation->set_rules('reg_email1','Email','valid_email|required');
		$this->form_validation->set_rules('reg_email2','Email Confrimation','valid_email|matches[reg_email1]');

		if($this->form_validation->run()==FALSE){
			redirect('C_register');
		}else{
			if($this->M_register->isRegistered($this->input->post('reg_email1'))){
				$this->session->set_flashdata('flash','already registered');
				redirect('C_register');
			}else{
				$this->M_register->register_newuser();
				redirect('C_login');
			}
		}


	}
}


?>