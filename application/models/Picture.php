<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Picture extends CI_Model {
  public function registerManga() {
      #
      $data = array(
          "Title" => filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING),
          "Author" => filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING),
          "Artist" => filter_input(INPUT_POST, 'artist', FILTER_SANITIZE_STRING),
          "description" => filter_input(INPUT_POST, 'descript', FILTER_SANITIZE_STRING),
          "pub_status" => filter_input(INPUT_POST, 'pub_status', FILTER_SANITIZE_STRING),
      );
      // Panggil Fungsi isExist
      // Jika isExist mengembalikan True, maka Register return False
      // Jika tidak maka masukkan data ke database
      if($this->isExist($data['Title'])) {
          return false;
      } else {
          // Masukkan data ke table Register
          // Masukkan data ke table login
          $this->db->insert('manga',$data);
          $this->db->where('Title', $data['Title']);
          $this->db->from('manga');
          $query = $this->db->get();
          $id_manga = $query->row_array();
          $this->db->insert('manga_stat', array('idManga' => $id_manga['idManga']));
          return True;
      }
  }

    public function findManga() {
        // Nomor 7
        // Ambil data yang diinputkan user
        // Cari apakah data ada pada table login
        // Kembalikan hasil dari pencarian
        $username = filter_input(INPUT_POST, 'your_name', FILTER_SANITIZE_STRING);
        $pass = md5($this->input->post('your_pass'));
        $this->db->where('Username', $username);
        $this->db->where('Pass', $pass);
        $this->db->from('login');
        $query = $this->db->get();
        $row = $query->row_array();
        #echo $row['Username'].'</br>';
        #echo $row['Pass'].'</br>';
        #echo password_verify($this->input->post('your_pass'), $row['Pass']).'</br>';
        #echo $this->input->post('your_pass').'</br>';
        $data =  array('Username' =>  $row['Username'],
                       'Pass' => $row['Pass']);
        #echo "Username : ".$data['Username'].'</br>';
        #echo "Pass     : ".$data['Pass'].'</br>';
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
}
