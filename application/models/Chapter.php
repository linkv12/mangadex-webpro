<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Chapter extends CI_Model {

  public function addChapter($idManga, $idScanGroup,$uploader) {
      // adding chapter to a manga
      $this->load->helper('date');
      $format = "%d-%m-%Y, %H:%i:%s";
      $data = array(
          "idManga" => $idManga,
          "chapter_number" => filter_input(INPUT_POST, 'chapter_number', FILTER_SANITIZE_STRING),
          "chapter_title" => filter_input(INPUT_POST, 'chapter_title', FILTER_SANITIZE_STRING),
          "idScanGroup" => $idScanGroup,
          "uploader" => $uploader,
          "pub_status" => filter_input(INPUT_POST, 'pub_status', FILTER_SANITIZE_STRING),
          "upload_time" => @mdate($format)
      );
      // Panggil Fungsi isExist
      if($this->isExist($data)) {
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

  public function isExist($data)
  {
    $this->db->where('idManga', $data['idManga']);
    $this->db->where('chapter_number', $data['chapter_number']);
    $this->db->where('idScanGroup', $data['idScanGroup']);
    $this->db->from('chapter');
    $query -> $this->db->get();
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
