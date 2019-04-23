<div class="row-fluid">
  <div class="container-fluid center col-md-6" >
    <div id="carouselExampleControls" class="carousel slide center-block" data-ride="carousel" data-interval="false">
      <div class="carousel-inner">
        <?php $pict_list = $this->M_Picture->getAllChapterImage($idChapter) ?>
        <?php foreach ($pict_list as $pict): ?>
          <?php if ($pict['picture_number'] == 1): ?>
            <div class="carousel-item active">
              <img src="<?= base_url().$pict['relative_path'].'/'.$pict['file_name']?>" class="d-block h-100 w-100  img center-block " alt="<?= $pict['file_name']?>">
            </div>
          <?php else: ?>
            <div class="carousel-item">
              <img src="<?= base_url().$pict['relative_path'].'/'.$pict['file_name']?>" class="d-block h-100 w-100 img center-block " alt="<?= $pict['file_name']?>">
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

</div>
