<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Model {
    public function Register() {
        // Nomor 5
        // Pastikan password yang di insert ke database sudah di enkripsi dengan MD5
        // Pastikan tanggal dan jam yang dimasukkan ke database sudah sesuai saat login
        $this->load->helper('date');
        $format = "%d-%m-%Y, %H:%i:%s";
        $data = array(
            "Username" => filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING),
            "Email" => filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL),
            "Pass" => md5($this->input->post('pass')),
            "RegisTime" => @mdate($format)
        );
        // Panggil Fungsi isExist
        // Jika isExist mengembalikan True, maka Register return False
        // Jika tidak maka masukkan data ke database
        if($this->isExist($data['Username'])) {
            return false;
        } else {
            // Masukkan data ke table Register
            // Masukkan data ke table login
            $this->db->insert('regis',array("username" => $data['Username'],
                                            "email" => $data['Email'],
                                            "regis_time" => $data['RegisTime']));
            $this->db->insert('login',array("Username"=>$data['Username'], "Pass"=>$data['Pass']));
            $this->db->insert('user', $data);
            return True;
        }
    }
    public function isExist($usernanae, $email) {
        // Menerima masukkan Username yang akan dicek dan email
        $this->db->where('username', $username);
        $this->db->where('email', $email);
        $this->db->from('regis');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function findUser() {
        // Nomor 7
        // Ambil data yang diinputkan user
        // Cari apakah data ada pada table login
        // Kembalikan hasil dari pencarian
        $username = filter_input(INPUT_POST, 'your_name', FILTER_SANITIZE_STRING);
        $pass = md5($this->input->post('your_pass'));
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $this->db->from('login');
        $query = $this->db->get();
        $row = $query->row_array();
        #echo $row['Username'].'</br>';
        #echo $row['Pass'].'</br>';
        #echo password_verify($this->input->post('your_pass'), $row['Pass']).'</br>';
        #echo $this->input->post('your_pass').'</br>';
        $data =  array('username' =>  $row['username'],
                       'password' => $row['password']);
        echo "Username : ".$data['username'].'</br>';
        echo "Pass     : ".$data['password'].'</br>';
        return $data;
    }
    public function imageUpload($imgName) {
        $this->db->insert('image_path', array('ImgName' => $imgName));
    }
    public function getImage() {
        // Nomor 8
        // Mengambil data dari table 'image_path' dan mengembalikan data berupa array
        $data = $this->db->get('image_path')->result_array();
        #foreach ($data as $row) {
        #  // code...
        #  echo $row['No'].'</br>';
        #  echo $row['ImgName'].'</br>';
        #}
        return $data;
    }

    public function geUserData($username)
    {
      // code...
      $this->db->select('username, user_level, email, avatar, idScanGroup');
      $this->db->where('username', $username);
      $this->db->from('user');
      $query = $this->db->get();
      return $query->row_array();
    }
}
