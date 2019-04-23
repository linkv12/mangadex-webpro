<div class="container">
  <div class="card">
    <?php
      $all_manga = $this->M_Manga->getAllManga();
    ?>
    <?php if ($all_manga->num_rows() < 0): ?>
      <div class="col-md-6 p-2 center-block">
        <span>Empty !</span>
      </div>
    <?php else: ?>
      <?php foreach ($all_manga->result_array() as $value): ?>
          <!---->
          <div class='col-md-12 border-bottom p-2'>
            <div class='hover sm_md_logo rounded float-left mr-2'>
              <?php $cover_one = $this->M_Manga->getMangaCover($value['idManga']); ?>
              <a href='/title/21040/parallel-paradise'><img class='rounded max-width' src='<?=base_url('assets/manga_cover/'.$cover_one);?>'></a>
            </div>
            <div class='pt-0 pb-1 mb-1 border-bottom d-flex align-items-center flex-nowrap'>
              <div><span class='fas fa-book fa-fw mr-1' aria-hidden='true'></span></div>
              <a class='manga_title text-truncate' title='<?= site_url('C_Manga/title/'.$value['idManga'])?>' href='<?= site_url('C_Manga/title/'.$value['idManga'])?>'><?= $this->M_Manga->getMangaTitle($value['idManga']);?></a>
            </div>
            <div class='py-0 mb-1 row no-gutters align-items-center flex-nowrap'>
              <span class='far fa-file fa-fw col-auto mr-1' aria-hidden='true'></span>
              <a class='text-truncate' style='flex: 0 1 auto;'>
                <?= $value['description']?>
              </a>
              <div class='ml-1'><span class='rounded flag flag-gb' title='English'></span></div>
            </div>
          </div>

      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>
