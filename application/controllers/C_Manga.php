<?php
	class C_Manga extends CI_CONTROLLER
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_Manga");
			//LOAD  MODEL  dan LIBRARI
		}

		public function title($idManga)
		{
			# addd title as data to pass to page_header
			$this->load->view('templates/page_header', array('title' => $idManga));
			#$this->load->view('testi/test_login');
			$this->load->view('V_Manga', array('idManga' => $idManga ));
			$this->load->view('templates/page_footer');
		}

    public function allManga()
    {
      // code...
      $this->load->view('templates/page_header', array('title' => 'All Manga'));
      #$this->load->view('testi/test_login');
      $this->load->view('V_All_Manga');
      $this->load->view('templates/page_footer');
    }

		public function addManga()
		{
			// code...
			$this->load->view('templates/page_header', array('title' => 'Add Manga'));
			#$this->load->view('testi/test_login');
			$this->load->view('V_Add_Manga');
			$this->load->view('templates/page_footer');
		}

		public function addingManga()
		{
			// code...
			if(!$this->M_Manga->registerManga()) {
				$this->session->set_flashdata('fail_add_manga', 'fail to add manga');
				redirect('/Welcome', 'refresh');
			} else {
				$this->session->set_flashdata('success_add_manga', 'success to add manga');
				redirect('/Welcome', 'refresh');
			}
		}
	}
?>
