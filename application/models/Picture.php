<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Picture extends CI_Model {
  public function extract_zip($data, $zipdata, $manga_folder_path, $folder_path, $full_folder_path) {
      echo $data['idChapter'].'</br>';
      echo $_SERVER['DOCUMENT_ROOT'].'</br>';
      foreach ($data as $key) {
        // code...
        echo $key."</br>";
      }
      echo 'zipdata</br>';
      foreach ($zipdata as $key) {
        // code...
        echo $key."</br>";
      }
      echo "folder_path : ".$folder_path.'</br>';
      echo "full_folder_path : ".$full_folder_path.'</br>';
      echo "manga_folder_path : ".$manga_folder_path.'</br>';
      if (!is_dir($manga_folder_path)) {
        mkdir($manga_folder_path, 0777, true);
        echo "The dir ";
        echo $manga_folder_path.'</br>';
        chmod($manga_folder_path, 0777);
        echo "successfully created";
      } else {
        echo "The dir ";
        echo $manga_folder_path.'</br>';
        chmod($manga_folder_path, 0777);
        echo "already exist";
      }

      if (!is_dir($full_folder_path)) {
        mkdir($full_folder_path, 0777, true);
        echo "The dir ";
        echo $full_folder_path.'</br>';
        chmod($full_folder_path, 0777);
        echo "successfully created";
      }
      # unzip
      $this->load->library('zip');
      $zip = new ZipArchive;
      chmod($zipdata['zip_full_path'], 0777);
      if ($zip->open($zipdata['zip_full_path']) === TRUE)
      {
          $zip->extractTo($full_folder_path);
          $zip->close();
          chmod($full_folder_path, 0777);
          echo "</br>succes extract";
      }
      echo "</br>".$zipdata['zip_full_path'];
      echo "</br>dir_map</br>";
      $dir_map = directory_map($folder_path);
      foreach ($dir_map as $val) {
        // code...
        echo $val.'</br>';
        $this->Picture->add_picture(array('idChapter' => $data['idChapter'], ));
      }
  }

  public function add_picture($data){
    // code...
    if (!picture_exist($data)) {
        $this->db->insert('picture', $data);
    }
  }

  public function picture_exist($data){
    $this->db->where('idChapter', $data['idChapter']);
    $this->db->where('relative_path', $data['relative_path']);
    $this->db->where('abs_path', $data['abs_path']);
    $this->db->where('file_name', $data['file_name']);
    $this->db->where('picture_number', $data['picture_number']);
    $query = $this->db->get('picture');
    if ($query->num_rows() == 0) {
      return false;
    } else {
      return true;
    }
  }
}
