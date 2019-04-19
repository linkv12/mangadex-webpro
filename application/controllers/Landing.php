<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

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
	public function index()
	{
		#$this->load->view('core/header',array('title' => 'Home' ));
		#$this->load->view('home_page');
    $data = array('title' => 'Home');
    $this->load->view('testi/test_landing', $data);
	}

	public function load_test_search_manga(){
		// code...
		$data = array('title' => 'test_search_manga');
		$this->load->view('testi/test_search_manga', $data);
	}
	public function load_test_upload_zip($value='')
	{
		// code...

		$data = array('title' => 'test_upload_zip');
		$this->load->view('testi/test_upload_zip', $data);
	}

	public function load_test_sign_in($value='')
	{
		// code...
		$data = array('title' => 'test_login');
		$this->load->view('testi/test_login', $data);
	}
	public function load_test_add_manga($value='')
	{
		// code...
		$data = array('title' => 'test_add_manga');
		$this->load->view('testi/test_add_manga', $data);
	}

	public function load_test_add_chapter($idManga, $title)
	{
		// code...
		$this->load->view('testi/test_add_chapter', array('idManga' => $idManga,
																											'title' => 'test_add_chapter '.$title,
																											'manga_title' => $title));
	}

	public function load_test_load_chapter($title, $idChapter) {
		$this->load->view('testi/test_load_chapter', array('title' => 'read '.$title,
																											'manga_title' => $title,
																											'idChapter' => $idChapter));
	}
}
