<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?echo $title.' - MangaDex'?></title>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--Icon-->
    <link rel="icon" type="image/png" sizes="96x96" href="<?=base_url('/assets/favicons/favicon-96x96.png')?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=base_url('/assets/favicons/favicon-192x192.png')?>">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= base_url()?>">
         <img src="<?= base_url('/assets/brands/navbar.svg')?>" width="30" height="30" alt="">
         MangaDex
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('/UserController/Logout')?>" tabindex="-1">Log out</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div class="">
        Session data
        <?php
          if ($this->session->userdata('successLogin')){
            echo 'logged as '.$this->session->userdata('successLogin');
          } else if ($this->session->userdata('falselogin')) {
            echo "failed to login -".$this->session->userdata('falselogin');
            redirrect('/Landing', 'refresh');
          }
         ?>

      </div>
      <div class="container">
                 <!-- Load user data-->
      <?php
        $data = $this->User->geUserData($this->session->userdata('successLogin'));
        echo "username    : ".$data['username'].'</br>';
        echo "user_level  : ";
        if ($data['user_level'] == 5) {
          echo "admin</br>";
        } else if ($data['user_level'] == 1) {
          echo "normal user</br>";
        }
        echo "email       : ".$data['email'].'</br>';
        #echo base_url('assets/avatar'.$data['avatar']);
       ?>
       <img style="height: 100px; width:100px;"class="img-thumbnail" src="<?php echo base_url('assets/avatar/'.$data['avatar']); ?>" alt="avatar"/>
      </div>
      <!--SCRAPR DEMO-->
      <?php
            echo "idManga passed : ".$idManga.'</br>';
            echo "title   passed : ".$title.'</br>';
            $bef = strtotime('03-04-2019, 22:50:23');
            $aft = strtotime('12-04-2019, 03:22:24');
            echo "before : ".$bef.'</br>';
            echo "after  : ".$aft.'</br>';
            echo "is aft > bef ? ".$aft>$bef.'</br>';
            echo "elapsed aft->before : ". timespan($bef, $aft, 1);
      ?>

      <div class="container">
          <?php $Manga = $this->Manga->getMangaById($idManga); ?>
          <?php foreach ($Manga as $row): ?>
             <img style="height: 100px; width:100px;"class="img-thumbnail" src="<?php echo base_url('assets/manga_cover/'.$row['cover']); ?>" alt="<?echo $row['Title']?>"/>
             <?php echo 'idManga      : '.$row['idManga'].'</br>'; ?>
             <?php echo 'Title        : '.$row['Title'].'</br>'; ?>
             <?php echo 'Author       : '.$row['Author'].'</br>'; ?>
             <?php echo 'Artist       : '.$row['Artist'].'</br>'; ?>
             <?php echo 'description  : '.$row['description'].'</br>'; ?>
             <?php echo 'og_langguage : '.$row['og_langguage'].'</br>'; ?>
             <?php echo 'pub_status   : '.$row['pub_status'].'</br>'; ?>
             <?php echo 'updated_on   : '.$row['updated_on'].'</br>' ?>
           </br>
           </br>
           </br>
          <?php endforeach; ?>
      </div>

      <div class="container">
          <div class="col-md-6">
              <strong>Add Chapter : </strong>
              <!-- nomor 10 -->
              <!-- Panggil fungsi Upload/do_upload disini -->
              <?php echo form_open_multipart('Uploads/do_upload_zip') ?>
                  <div class="form-group">
                      <!-- Tampilkan alert gagal jika gagal upload, dan alert berhasil jika berhasil upload disini -->
                      <?php
                      #echo $this->session->userdata('upload');
                      #echo $this->session->userdata('error');
                          if ($this->session->userdata('upload')) {
                              #$this->load->view('Alerts/SuccessRegis');
                              echo $this->session->userdata('upload');
                              #$this->load->view('Alerts/SuccessUpload', array('upload' => $this->session->userdata('upload')));
                              #echo $this->session->userdata('upload');
                          } else if ($this->session->userdata('error')) {
                              #$this->load->view('Alerts/FailLogin');
                              #$this->load->view('Alerts/SuccessRegis');
                              echo $this->session->userdata('error');
                              #echo $this->session->userdata('error');
                          }
                       ?>
                       <div class="input-group">
                         <label for="id Manga" hidden>idManga</label>
                         <input type="text" name="idManga" placeholder="id Manga" id="idManga" value="<?echo $idManga;?>" hidden>
                       </div>
                       <div class="input-group">
                         <label for="idScanGroup" hidden>idScanGroup</label>
                         <input type="text" name="idScanGroup" placeholder="id Manga" id="idScanGroup" value="<?echo $idManga;?>" hidden>
                       </div>
                      <div class="input-group">
                        <label for="chapter_number">chapter number</label>
                        <input type="text" name="chapter_number" placeholder="chapter number" id="chapter_number">
                      </div>
                      <div class="input-group">
                        <label for="chapter_title">chapter title</label>
                        <input type="text" name="chapter_title" placeholder="chapter title" id="chapter_title">
                      </div>
                      <div class="input-group">
                        <label for="langguage">langguage</label>
                        <input type="text" name="langguage" placeholder="langguage" id="langguage">
                      </div>
                      <div class="input-group">
                          <span class="input-group-btn">
                              <span class="btn btn-default btn-file">
                                  Browse… <input type="file" id="imgInp" name='userfile'>
                              </span>
                          </span>
                          <input type="text" class="form-control" readonly>
                          <span class="input-group-btn">
                              <input class="btn btn-primary" type="submit" value="Submit">
                          </span>
                      </div>
                      <img id='img-upload'/>
                  </div>
              </form>
              <!-- Endof nomor 10 -->
          </div>
      </div>
  </body>
</html>
