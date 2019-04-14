<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MangaController extends CI_Controller {
  public function Search() {
    $condition = $this->Manga->isExist($this->input->post('title'));
    $data= $this->Manga->searchManga($this->input->post('title'));
    foreach ($data as $value) {
      // code...
      $this->Manga->getChapter($value['idManga']);
    }
  }
  public function getManga($id_manga) {

  }
}
