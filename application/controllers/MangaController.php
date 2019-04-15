<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MangaController extends CI_Controller {
  public function addManga()
  {
    // code...
    if(!$this->Manga->registerManga()) {
      $this->session->set_flashdata('fail_add_manga', 'fail to add manga');
      redirect('/Landing/load_test_add_manga', 'refresh');
    } else {
      $this->session->set_flashdata('success_add_manga', 'success to add manga');
      redirect('/Landing/load_test_add_manga', 'refresh');
    }
  }

  public function get_manga_by_id($idManga)
  {
    // code...
    if (isset($idManga) and $idManga != NULL) {
      return $this->Manga->getMangaById($idManga);
    } else {
      return NULL;
    }
  }


  public function Search() {
    $condition = $this->Manga->isExist($this->input->post('title'));
    $data= $this->Manga->searchManga($this->input->post('title'));
    foreach ($data as $value) {
      // code...
      $this->Manga->getChapter($value['idManga']);
    }
  }
  public function load_manga_page($idManga, $title)
  {
    // code...
    $title = urldecode($title);
    #echo $idManga.'</br>'.$title;
    $this->load->view('testi/test_manga_page', array('idManga' => $idManga,
                                                     'title' => $title));
  }

}
