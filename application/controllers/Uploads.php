<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Uploads extends CI_Controller{
  public function do_upload_zip(){
    $this->load->helper('date');
    $date = new DateTime();
    $result = $date->format('d-m-Y, H:i:s');
    $data  = array('idManga' => filter_input(INPUT_POST, 'idManga', FILTER_SANITIZE_STRING),
                   'chapter_number' => filter_input(INPUT_POST, 'chapter_number', FILTER_SANITIZE_STRING),
                   'chapter_title' => filter_input(INPUT_POST, 'chapter_title', FILTER_SANITIZE_STRING),
                   'langguage' => filter_input(INPUT_POST, 'langguage', FILTER_SANITIZE_STRING),
                   'uploader' => $this->session->userdata('successLogin'),
                   'idScanGroup' => $this->session->userdata('idScanGroup'),
                   'upload_time' => $result
                 );
    foreach ($data as $value) {
      // code...
      echo $value.'</br>';
    }
    echo "idManga : ".$data['idManga'].'</br>' ;
    if (!$this->Chapter->isExist($data)) {
                $config = array('upload_path' => './temp_data',
                                'allowed_types' => 'zip');
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('userfile')) {
                  $this->session->set_flashdata('error', $this->upload->display_errors());
                  redirect ('refresh');
                } else {
                  #$data['pub_status'] = $this->Manga->getpub_statusById($data['idManga']);
                  $this->Chapter->addChapter_array($data);
                  $data['idChapter']  = $this->Chapter->getChapterId($data);
                  $normalize_time = $date->format("HisdmY");
                  $data_upload = array('upload_data' => $this->upload->data());
                  $this->session->set_flashdata('upload_data',  $data_upload['upload_data']['file_name']);
                  #$this->db->insert('chapter', $data);
                  $full_folder_path = FCPATH.'assets/pictures/'.$data['idManga'].'/'.$data['chapter_number'].'_'.$data['idManga'].'_'.$data['uploader'].'_'.$normalize_time;
                  $manga_folder = FCPATH.'assets/pictures/'.$data['idManga'];
                  $folder_path = './assets/pictures/'.$data['idManga'].'/'.$data['chapter_number'].'_'.$data['idManga'].'_'.$data['uploader'].'_'.$normalize_time;
                  $this->Picture->extract_zip($data,
                                              array('zip_name' => $data_upload['upload_data']['file_name'],
                                                    'upload_path' => './temp_data',
                                                    'zip_full_path' => $data_upload['upload_data']['full_path']),
                                              $manga_folder,
                                              $folder_path,
                                              $full_folder_path);
                  if (file_exists($data_upload['upload_data']['full_path'])) {
                    unlink($data_upload['upload_data']['full_path']);
                  }
                  redirrect ('/Landing/load_test_upload_zip', 'refresh');
                }
    } else {

    }

  }
}
