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

		public function updateManga($idManga)
		{
			// code...
			$this->load->view('templates/page_header', array('title' => 'Update Manga'));
			#$this->load->view('testi/test_login');
			$this->load->view('V_Update_Manga',  array('idManga' => $idManga ));
			$this->load->view('templates/page_footer');
		}

		public function deleteManga($idManga)
		{
			// code...
			$this->load->view('templates/page_header', array('title' => 'Update Manga'));
			#$this->load->view('testi/test_login');
			$this->load->view('V_Delete_Manga',  array('idManga' => $idManga ));
			$this->load->view('templates/page_footer');
		}


		public function updateProcessManga()
		{
			// code...
			$idManga = filter_input(INPUT_POST, 'manga_id', FILTER_SANITIZE_STRING);
			$this->load->helper('date');
			$format = "%d-%m-%Y, %H:%i:%s";
			$data = array(
					'Title' => filter_input(INPUT_POST, 'manga_title', FILTER_SANITIZE_STRING),
					'Author' => filter_input(INPUT_POST, 'manga_author', FILTER_SANITIZE_STRING),
					'Artist' => filter_input(INPUT_POST, 'manga_artist', FILTER_SANITIZE_STRING),
					'description' => filter_input(INPUT_POST, 'manga_description', FILTER_SANITIZE_STRING),
					'og_langguage' => filter_input(INPUT_POST, 'manga_og_langguage', FILTER_SANITIZE_STRING),
					'pub_status' => filter_input(INPUT_POST, 'manga_pub_status', FILTER_SANITIZE_STRING),
					'updated_on' => @mdate($format)
			);
			$this->M_Manga->updatingManga($idManga,$data);
			#echo $idManga.'</br>';
			#foreach ($data as $value) {
				// code...
			#	echo $value.'</br>';
			#}
			redirect ('/', 'refresh');
		}

		public function deleteProcessManga()
		{
			// code...
			$quest = filter_input(INPUT_POST, 'quest', FILTER_SANITIZE_STRING);
			$idManga = filter_input(INPUT_POST, 'manga_id', FILTER_SANITIZE_STRING);
			if ($quest == 'Y' || $quest == 'y' || $quest == 'yes' ) {
				// code...
					$this->M_Manga->deletingManga($idManga);
			}
			redirect('/', 'refresh');
		}
	}
?>
