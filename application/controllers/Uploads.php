<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Uploads extends CI_Controller{
  public function do_upload_zip(){
    $config = array('upload_path' => './temp_data',
                    'allowed_types' => 'zip');
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('userfile')) {

      $this->session->set_flashdata('error', $this->upload->display_errors());
      redirect ('/Landing/load_test_upload_zip', 'refresh');
    } else {
      $data = array('upload_data' => $this->upload->data());
      $this->session->set_flashdata('upload_data',  $data['upload_data']['file_name']);
      redirect ('/Landing/load_test_upload_zip', 'refresh');
    }
  }
}
