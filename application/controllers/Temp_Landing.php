<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temp_Landing extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 * username admin
	 * password admin
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function indexv2()
	{
		#$this->load->view('core/header',array('title' => 'Home' ));
		#$this->load->view('home_page');
    $data = array('title' => 'Home');
    $this->load->view('home_page_rip', $data);
	}

  public function index()
  {
    #$this->load->view('core/header',array('title' => 'Home' ));
    #$this->load->view('home_page');
    $data = array('title' => 'Home');
    $this->load->view('home_page', $data);
  }

	public function manga_new(){
		if(!$this->session->userdata('successLogin')) {
			echo "Forbidden";
		} else {
			$this->load->view('manga_new', array('title' => "Manga New"));
		}
	}


}
