<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manga extends CI_Model {
  public function registerManga() {
      // Nomor 5
      // Pastikan password yang di insert ke database sudah di enkripsi dengan MD5
      // Pastikan tanggal dan jam yang dimasukkan ke database sudah sesuai saat login
      $this->load->helper('date');
      $format = "%d-%m-%Y, %H:%i:%s";
      $data = array(
          'Title' => filter_input(INPUT_POST, 'manga_title', FILTER_SANITIZE_STRING),
          'Author' => filter_input(INPUT_POST, 'manga_author', FILTER_SANITIZE_STRING),
          'Artist' => filter_input(INPUT_POST, 'manga_artist', FILTER_SANITIZE_STRING),
          'description' => filter_input(INPUT_POST, 'manga_description', FILTER_SANITIZE_STRING),
          'og_langguage' => filter_input(INPUT_POST, 'manga_og_langguage', FILTER_SANITIZE_STRING),
          'pub_status' => filter_input(INPUT_POST, 'manga_pub_status', FILTER_SANITIZE_STRING),
          'updated_on' => @mdate($format)
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


  public function searchManga($title) {
      // Mencari manga
      // mengambil data $title dari parameter
      // akan mencari data pada manga dan manga_alt_title
      // Kembalikan hasil pencarian
      $this->db->like('Title', $title);
      $this->db->from('manga');
      $query = $this->db->get();
      $result = $query->result_array();
      foreach ($result as $value) {
        // code...
        echo "</br>".$value['idManga'];
        echo "</br>".$value['Title'];
        echo "</br>".$value['Author'];
        echo "</br>".$value['Artist'];
        echo "</br>".$value['description'];
        echo "</br>".$value['cover'];
        echo "</br>".$value['pub_status'];
      }
      #echo $row['Username'].'</br>';
      #echo $row['Pass'].'</br>';
      #echo password_verify($this->input->post('your_pass'), $row['Pass']).'</br>';
      #echo $this->input->post('your_pass').'</br>';
      #echo "Username : ".$data['Username'].'</br>';
      #echo "Pass     : ".$data['Pass'].'</br>';
      return $result;
  }

    public function isExist($title) {
        // Menerima masukkan $Title yang akan dicek
        #$this->db->select('Title');
        $this->db->where('Title', $title);
        $this->db->from('manga');
        $query = $this->db->get();
        $this->db->where('alt_name',$title);
        $this->db->from('manga_alt_title');
        $query2 = $this->db->get();
        #foreach ($query->result_array() as $row)
        #{
        #  echo $row['idManga'];
        #  echo "</br>";
        #  echo $row['Title'];
        #  echo "</br>";
        #  echo $row['Author'];
        #  echo "</br>";
        #  echo $row['Artist'];
        #  echo "</br>";
        #  echo $row['description'];
        #  echo "</br>";
        #  echo $row['cover'];
        #  echo "</br>";
        #  echo $row['pub_status'];
        #  echo "</br>";
        #}
        echo "Found in manga alt name : ".$query2->num_rows().'</br>';
        echo "Found in manga          : ".$query->num_rows()."</br>";
        return $query->num_rows();
    }

    public function getMangaById($idManga)
    {
      // code...
      $this->db->where('idManga', $idManga);
      $this->db->from('manga');
      $query = $this->db->get();
      return $query->result_array();
    }

    public function getChapter($id_manga){
      $this->db->where('idManga', $id_manga);
      $this->db->from('chapter');
      $query = $this->db->get();

      $row_arr = $query->result_array();
      foreach ($row_arr as $value) {
        // code...
        echo "</br>"."Currently at getChapter at id_manga :  ".$id_manga."</br>";
        echo "</br>".$value['idChapter'];
        echo "</br>".$value['idManga'];
        echo "</br>".$value['chapter_number'];
        echo "</br>".$value['chapter_title'];
        echo "</br>".$value['idScanGroup'];
        echo "</br>".$value['uploader'];
        echo "</br>".$value['view'];
        echo "</br>".$value['upload_time'];
        echo "</br>";
      }


    }
    public function getAllManga()
    {
      // code...
      echo "xxxx</br>";
      $qeury = $this->db->get('manga');
      return $qeury;
    }

}
