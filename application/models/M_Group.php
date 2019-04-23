<?php
class M_Group extends CI_Model{
	#public $username;
	#public $user_level;
	#public $password;
	#public $website = 'No Website';
	#public $email;
	#public $avatar = "default_avatar.png";
	#public $biography = '';
	#public $old_pass;
	#public $idSetting;
	#public $idScanGroup;

	private $_table = 'scan_group';

	public function getGroupName($idScanGroup)
	{
		// code...
		$this->db->select('name');
		$this->db->where('idScanGroup', $idScanGroup);
		$query = $this->db->get($this->_table)->row();
		return $query->name;
	}
}
?>
