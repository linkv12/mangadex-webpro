<?php
// application/controllers/Unzip.php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unzip extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('file_upload_form');
    }

    public function upload()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'zip';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('zip_file'))
        {
            $params = array('error' => $this->upload->display_errors());
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $full_path = $data['upload_data']['full_path'];

            /**** without library ****/
            $zip = new ZipArchive;

            if ($zip->open($full_path) === TRUE)
            {
                $zip->extractTo(FCPATH.'/uploads/');
                $zip->close();
            }

            $params = array('success' => 'Extracted successfully!');
        }

        $this->load->view('file_upload_result', $params);
    }
}
