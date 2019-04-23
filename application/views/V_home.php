<!--  Latest Manga   -->
<div class="d-flex justify-content-center">
  <div class="container" role="main" id="content">
      <div class="row">
        <div class="col-lg-8">
          <div class="card mb-3">
            <h6 class="card-header text-center"><span class="fas fa-external-link-alt fa-fw" aria-hidden="true"></span> <a href="#">Latest updates</a> </h6>
            <div class="card-header p-0">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item">
                      <a cclass="nav-link" Active href="#" aria-controls="latest_update" data-toggle="tab">All</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" aria-controls="follows_update" data-toggle="tab">Follows</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="latest_update">
                <div class="row m-0">
                  <?php $this->load->helper('date');
                        $format = "%d-%m-%Y, %H:%i:%s";
                        $latest_manga = $this->M_Chapter->getLatestChapter();
                        #echo count($latest_manga).'</br>';
                        #echo count($latest_manga) > 3;
                        # idChapter	idManga	chapter_number	chapter_title	langguage	idScanGroup	uploader	view	upload_time	idThread
                        $now = strtotime(@mdate($format));?>
                  <?php $tal = 0 ?>
                  <?php if (sizeof($latest_manga) < 2): ?>
                    <div class="col-md-6 p-2 center-block">
                      <span>Empty !</span>
                    </div>
                  <?php else: ?>
                    <?php foreach ($latest_manga as $value): ?>
                      <?php if ($tal == 1): ?>
                        <?php $temp_data[$tal] = $value;
                              $tal = 0;
                        ?>
                        <!---->
                        <div class='col-md-6 border-bottom p-2'>
                          <div class='hover sm_md_logo rounded float-left mr-2'>
                            <?php $cover_one = $this->M_Manga->getMangaCover($temp_data[0]['idManga']); ?>
                            <a href='/title/21040/parallel-paradise'><img class='rounded max-width' src='<?=base_url('assets/manga_cover/'.$cover_one);?>'></a>
                          </div>
                          <div class='pt-0 pb-1 mb-1 border-bottom d-flex align-items-center flex-nowrap'>
                            <div><span class='fas fa-book fa-fw mr-1' aria-hidden='true'></span></div>
                            <a class='manga_title text-truncate' title='Parallel Paradise' href='<?= site_url('C_Manga/title/'.$temp_data[0]['idManga'])?>'><?= $this->M_Manga->getMangaTitle($temp_data[0]['idManga']);?></a>
                          </div>
                          <div class='py-0 mb-1 row no-gutters align-items-center flex-nowrap'>
                            <span class='far fa-file fa-fw col-auto mr-1' aria-hidden='true'></span>
                            <a class='text-truncate' href='<?= site_url('C_Chapter/chapter/'.$temp_data[0]['idChapter'])?>' style='flex: 0 1 auto;'>
                              <?= "Chapter ".$temp_data[0]['chapter_number']?>
                            </a>
                            <div class='ml-1'><span class='rounded flag flag-gb' title='English'></span></div>
                          </div>
                            <div class='text-truncate py-0 mb-1'>
                              <span class='fas fa-users fa-fw ' aria-hidden='true'></span>
                              <?= $this->M_Group->getGroupName($temp_data[0]['idScanGroup'])?>
                              <a href='/group/777/making-babies'></a>
                            </div>
                            <div class='text-truncate py-0 mb-1'><span class='far fa-clock fa-fw ' aria-hidden='true'></span> <?=timespan( strtotime($temp_data[0]['upload_time']),$now, 1)?>   <span class='d-none d-xl-inline'>ago</span></div>
                        </div>
                        <!---->
                        <!---->
                        <div class='col-md-6 border-bottom p-2'>
                        <div class='hover sm_md_logo rounded float-left mr-2'>
                          <?php $cover_two = $this->M_Manga->getMangaCover($temp_data[1]['idManga']); ?>
                          <a href='/title/29854/switch'>
                            <img class='rounded max-width' src='<?=base_url('assets/manga_cover/'.$cover_two);?>'>
                          </a></div>
                        <div class='pt-0 pb-1 mb-1 border-bottom d-flex align-items-center flex-nowrap'>
                        <div><span class='fas fa-book fa-fw mr-1' aria-hidden='true'></span></div>
                        <a class='manga_title text-truncate' title='Switch' href='<?= site_url('C_Manga/title/'.$temp_data[1]['idManga'])?>'><?= $this->M_Manga->getMangaTitle($temp_data[1]['idManga']);?></a>
                        </div>
                        <div class='py-0 mb-1 row no-gutters align-items-center flex-nowrap'>
                          <span class='far fa-file fa-fw col-auto mr-1' aria-hidden='true'></span>
                          <a class='text-truncate' href='<?= site_url('C_Chapter/chapter/'.$temp_data[1]['idChapter'])?>' style='flex: 0 1 auto;'>
                            <?= "Chapter ".$temp_data[1]['chapter_number']?>
                          </a>
                          <div class='ml-1'><span class='rounded flag flag-gb' title='English'></span></div></div>
                        <div class='text-truncate py-0 mb-1'><span class='fas fa-users fa-fw ' aria-hidden='true'></span>
                          <?= $this->M_Group->getGroupName($temp_data[0]['idScanGroup'])?>
                          <a href='/group/5625/mono-scans'></a></div>
                          <?php $upload_time_2 = strtotime($temp_data[1]['upload_time']) ?>
                        <div class='text-truncate py-0 mb-1'><span class='far fa-clock fa-fw ' aria-hidden='true'></span> <?= timespan($upload_time_2,$now, 1)?>   <span class='d-none d-xl-inline'>ago</span></div>
                        </div>
                        <!---->
                        <?php else: ?>
                          <?php $temp_data[$tal] = $value;
                                $tal = $tal + 1;
                           ?>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
