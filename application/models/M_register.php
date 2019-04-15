<?php 
class M_register extends CI_Model 
{
	private $_table = 'tb_users';

	public $username;
	public $password;
	public $email;
	public $website = 'No Website';
	public $profile_chara = "default.jpg";
	public $biography = '';

	public function register_newuser()
	{
		$joined_date  = date('Y-m-d H:i:s');
		$data = [
			"username" => $this->input->post('reg_username',true),
			"password" => $this->input->post('reg_pass1',true),
			"email" => $this->input->post('reg_email1',true),
			"joined_date" => $joined_date,
			"website" => 'No Website',
			"profile_chara" => 'default.jpg',
			"biography" => 'No Biography',
		];
		return $this->db->insert($this->_table,$data);
	}

	public function isEmailRegistered($email)
	{
		$this->db->where('email',$email);
		$query = $this->db->get($this->_table);
		if($query->num_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}

	}

	public function isUnameRegistered($uname)
	{
		$this->db->where('username',$uname);
		$query = $this->db->get($this->_table);
		if($query->num_rows()>0){
			return TRUE;
		}else{
			return FALSE;
		}

	}

	public function user_auth($uname, $passwd)
	{
		$this->db->where('username', $uname);
		$this->db->where('password', $passwd);
		$query = $this->db->get($this->_table);
		return $query->row_array();
	}

	public function upload_profileChara()
	{
		$config['upload_path']		='./upload/profile/';
		$config['allowed_types']	='gif|jpg|png';
		$config['file_name']		= $_SESSION['id'];
		$config['overwrite']		= true;
		$config['max_size']			=2048;
		// $config['max_width']            = 1024;
    	// $config['max_height']           = 768;

    	$this->load->library('upload', $config);
    	if($this->upload->do_upload('old_file')){
    		return $this->upload->data('file');
    	}
    	return 'default.jpg';
	}


	public function updateprofile()
	{
		$this->username = $_SESSION['username'];
		$this->password = $_SESSION['password'];
		$this->joined_date = $_SESSION['joined_date'];
		$this->email = $_SESSION['email'];

		if(!empty($_FILES['old_file']['file'])){
			$this->image = $this->upload_profileChara();
		}else{
			$this->image = $_SESSION['profile_chara'];
		}


		$data = [
			"username" => $this->username,
			"password" => $this->password,
			"email" => $this->email,
			"joined_date" => $this->joined_date,
			"website" => $this->input->post('website',true),
			"profile_chara" => $this->$image,
			"biography" => $this->input->post('user_bio',true),
		];
		$this->db->update($this->_table,$data,array('id' => $_SESSION['id']));
	}




}

?>