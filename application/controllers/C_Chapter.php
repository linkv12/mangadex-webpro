<?php
	class C_Chapter extends CI_CONTROLLER
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_chapter");
			//LOAD  MODEL  dan LIBRARI
		}

		public function chapter($id_chapter)
		{
			# addd title as data to pass to page_header
			$this->load->view('templates/page_header', array('title' => $id_chapter));
			#$this->load->view('testi/test_login');
			$this->load->view('V_Chapter', array('idChapter' => $id_chapter ));
			$this->load->view('templates/page_footer');
		}

		public function addChapter($idManga)
		{
			// code...
			$this->load->view('templates/page_header', array('title' => 'Upload'));
			#$this->load->view('testi/test_login');
			$this->load->view('V_Add_Chapter', array('idManga' => $idManga ));
			$this->load->view('templates/page_footer');
		}

	}
?>
