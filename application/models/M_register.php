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
			"profile_chara" => 'dafault.jpg',
			"biography" => 'No Biography',
		];
		return $this->db->insert($this->_table,$data);
	}

	public function isRegistered($email)
		{
			$this->db->where('email',$email);
			$query = $this->db->get($this->_table);
			if($query->num_rows()>0){
				return TRUE;
			}else{
				return FALSE;
			}

		}

}

?>