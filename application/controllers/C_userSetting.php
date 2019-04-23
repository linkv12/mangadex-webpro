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
		$this->load->view('templates/page_header', array('title' => "Setting"));
		$this->load->view('V_userSetting');
		$this->load->view('templates/page_footer');
	}

	public function userEdit()
	{
		$this->M_register->updateprofile();
		redirect('C_usrProfile');
	}

	public function changePassword()
	{
		$old_pass = $this->input->post('old_password');
		$new_pass = $this->input->post('new_password1');
		$new_passconfirm = $this->input->post('new_password2');
		$session_uname = $this->session->userdata('username');
		$pass = $this->session->userdata('password');
		$query = $this->db->query("select * from tb_users where username='$session_uname'");
		$row = $query->row();
		if ((!strcmp($old_pass, $pass)) && (!strcmp($new_pass, $new_passconfirm))) {
			$this->M_register->change_pass($session_uname,$new_pass);
			echo "Password Changed Successfully";
			$this->session->set_flashdata('berhasil','berhasil');
			redirect('C_userSetting');
		}else{
			$this->session->set_flashdata('gagal', 'gagal');
			redirect('C_userSetting');
		}



		$this->load->view('templates/page_header');
		$this->load->veiw('V_userSetting');
		$this->load->view('templates/page_footer');

	}
}
?>
