<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Picture extends CI_Model {
  public function extract_zip($data, $zipdata, $manga_folder_path, $folder_path, $full_folder_path) {
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
  }
}
