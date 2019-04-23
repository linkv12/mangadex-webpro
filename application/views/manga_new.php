<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Font Awesome-->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
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
    <nav class="navbar fixed-top navbar-expand-lg text-nowrap navbar-dark bg-dark">
      <div class="container">
        <button type="button" class="navbar-toggler mr-auto" data-toggle="collapse" data-target="navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="<?= base_url()?>" class="p-0 navbar-brand"><img class="mx-2" height="38px" src="<?= base_url('/assets/brands/navbar.svg')?>" alt="MangaDex" title="MangaDex"><small class="d-lg-none d-xl-inline"> MangaDex</small></a>
        <button  class="navbar-toggler ml-auto" type="button" data-toggle="modal" data-target="#homepage_settings_modal">
          <span class="navbar-icon"><span class="fas fa-cog" aria-hidden='true'></span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown mx-1">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fas fa-book"></span> Manga</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><span class="fas fa-book fa-fw" aria-hidden="true"></span> Title</a>
                <a class="dropdown-item" href="#"><span class="fas fa-sync fa-fw" aria-hidden="true"></span> Updates</a>
                <a class="dropdown-item" href="#"><span class="fas fa-search fa-fw" aria-hidden="true"></span> Search</a>
                <a class="dropdown-item" href="#"><span class="fas fa-tv fa-fw" aria-hidden="true"></span> Featured</a>
                <a class="dropdown-item" href="#"><span class="fas fa-question-circle fa-fw" aria-hidden="true"></span> Random</a>
                <a class="dropdown-item" href="<?= site_url('/Temp_Landing/manga_new')?>"><span class="fas fa-plus-circle fa-fw" aria-hidden="true"></span> Add</a>
              </div>
            </li>
            <li class="nav-item mx-1" id="login">
              <?php if (!$this->session->userdata('successLogin')): ?>
                <a class="nav-link" href="#" title="You need to log in."><span class="fas fa-bookmark fa-fw" aria-hidden="true"></span> Follows</a>
                <?php else: ?>
                  <a class="nav-link" href="#" title="Follows"><span class="fas fa-bookmark fa-fw" aria-hidden="true"></span> Follows</a>
              <?php endif; ?>
            </li>
            <li class="nav-item dropdown mx-1">
              <a href="#" class="nav-link dropdown dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fas fa-users fa-fw" aria-hidden="true"></span> Community</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><span class="fas fa-university fa-fw" aria-hidden="true" title="Forums"></span> Forums</a>
                <a class="dropdown-item" href="#"><span class="fas fa-users fa-fw" aria-hidden="true" title="Groups"></span> Groups</a>
                <a class="dropdown-item" href="#"><span class="fas fa-user fa-fw" aria-hidden="true" title="Users"></span> Users</a>
                <a class="dropdown-item" href="#"><span class="fab fa-discord fa-fw" aria-hidden="true" title="Discord"></span> Discord</a>
                <a class="dropdown-item" href="#"><span class="fab fa-twitter fa-fw" aria-hidden="true" title="Twitter"></span> Twitter</a>
                <a class="dropdown-item" href="#"><span class="fab fa-reddit fa-fw" aria-hidden="true" title="Reddit"></span> Reddit</a>
                <a class="dropdown-item" href="#"><span class="fas fa-hashtag fa-fw" aria-hidden="true" title="IRC"></span> IRC</a>
              </div>
            </li>
            <li class="nav-item dropdown mx-1">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fas fa-info-circle fa-fw" aria-hidden="true"></span> Info</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><span class="fas fa-clipboard-list fa-fw" aria-hidden="true" title="Stats"></span> Stats</a>
                <a class="dropdown-item" href="#"><span class="fas fa-list fa-fw" aria-hidden="true" title="Rules"></span> Rules</a>
                <a class="dropdown-item" href="#"><span class="fas fa-info fa-fw" aria-hidden="true" title="About"></span> About</a>
                <a class="dropdown-item" href="#"><span class="fas fa-code fa-fw" aria-hidden="true" title="Change Log"></span> Change Log</a>
              </div>
            </li>
          </ul>
          <form class="form-inline mx-1" role="search" id="quick_search_form" action="#" method="get">
            <div class="input-group">
              <div class="input-group-prepend">
                <select class="form-control" id="quick_search_type">
                  <option selected value="1" data-content="<span class='fas fa-book fa-fw' aria-hidden='true'></span> <span class='d-none d-xl-inline'>Manga</span>">Manga</option>
                  <option  value="2" data-content="<span class='fas fa-users fa-fw' aria-hidden='true'></span> <span class='d-none d-xl-inline'>Manga</span>">Groups</option>
                  <option  value="3" data-content="<span class='fas fa-user fa-fw' aria-hidden='true'></span> <span class='d-none d-xl-inline'>Manga</span>">Users</option>
                </select>
              </div>
              <input type="text" name="term" class="form-control" placeholder="Quick Search" id="quick_search_input" required>
              <span class="input-group-append">
                <button class="btn btn-secondary" type="submit" id="quick_search_button"><span class="fas fa-search fa-fw"></span> </button>
              </span>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="d-none d-lg-block nav-item mx-1" id="homepage_cog">
              <a class="nav-link" href="#" title="Settings" data-toggl='modal' data-target="#homepage_settings_modal"><span class="fas fa-cog fa-fw" aria-hidden='true' title="Settings"></span> </a>
            </li>
            <li class="nav-item dropdown mx-1">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <?php if (!$this->session->userdata('successLogin')): ?>
                  <span class="fas fa-user-times fa-fw" aria-hidden='true'></span> <span class="d-lg-none d-xl-inline" style="color : #000">Guest</span>
                <?php else : ?>
                  <span class="fas fa-user fa-fw" aria-hidden='true'></span> <span class="d-lg-none d-xl-inline" style="color : #000"><?php echo $this->session->userdata('successLogin') ?></span>
                <?php endif; ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <?php if (!$this->session->userdata('successLogin')): ?>
                  <a class="dropdown-item" href="<?= site_url('/Landing/load_test_sign_in')?>"><span class="fas fa-sign-in-alt fa-fw" aria-hidden='true' title="Log in"></span> Log in</a>
                  <a class="dropdown-item" href="#"><span class="fas fa-pencil-alt fa-fw" aria-hidden='true' title="Sign up"></span> Sign up</a>
                  <?php else: ?>
                    <a class="dropdown-item" href="#"><span class='fas fa-user fa-fw ' aria-hidden='true'></span> Profile</a>
                    <a class="dropdown-item" href="#"><span class='fas fa-history fa-fw ' aria-hidden='true' title='History'></span> History</a>
                    <a class="dropdown-item" href="#"><span class='fas fa-cog fa-fw ' aria-hidden='true'></span> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><span class='fas fa-list fa-fw ' aria-hidden='true' title='My list'></span> MDList</a>
                    <a class="dropdown-item" href="#"><span class='fas fa-user-friends fa-fw ' aria-hidden='true' title='social'></span> Social </a>
                    <a class="dropdown-item" href="#"><span class='fas fa-exclamation-circle fa-fw ' aria-hidden='true' title='notifications'></span> Notifications </a>
                    <a class="dropdown-item" href="#"><span class='fas fa-envelope fa-fw ' aria-hidden='true'></span> Inbox </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><span class='fas fa-dollar-sign fa-fw ' aria-hidden='true' title='support'></span> Support</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item logout" href="<?= site_url('/UserController/Logout')?>"><span class='fas fa-sign-out-alt fa-fw ' aria-hidden='true' title='Log out'></span> Log out</a>
                <?php endif; ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </body>
</html>
