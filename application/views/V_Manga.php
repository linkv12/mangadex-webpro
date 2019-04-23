<?php $data = $this->M_Manga->getMangaById($idManga) ?>
<?php if (sizeof($data) == 0): ?>
<?php echo "404"?>
<?php else: ?>
  <div class="container" role="main" id="content">
  		<div class="card mb-3">
  			<h6 class="card-header d-flex align-items-center py-2">
  				<span class='fas fa-book fa-fw ' aria-hidden='true'></span> <span class="mx-1"><?=$data['Title']?></span>
  				<span class='rounded flag flag-jp' title='Japanese'></span> <span class="ml-1"></span>
  				<a class='ml-auto' href='/login'><span title='Due to the volume of bots spamming RSS links, this now requires an account to use.' class='fas fa-rss fa-2x'></span></a> </h6>
  				<div class="card-body p-0">
  					<div class="row edit">
  						<div class="col-xl-3 col-lg-4 col-md-5">
  							<a href="#" title="See covers">
  								<img class="rounded" width="100%" src="<?=base_url('assets/manga_cover/'.$data['cover']);?>" />
  							</a>
  						</div>
  						<div class="col-xl-9 col-lg-8 col-md-7">
  							<div class="row m-0 py-1 px-0">
  								<div class="col-lg-3 col-xl-2 strong">Alt name(s):</div>
  								<div class="col-lg-9 col-xl-10">
  									<ul class="list-inline m-0">
                      <?php $alt_name = $this->M_Manga->getAltName($idManga) ?>
                      <?php if ($alt_name != null): ?>
                          <?php foreach ($alt_name as $name_alt): ?>
                            <li class='list-inline-item'><span class='fas fa-book fa-fw ' aria-hidden='true'></span><?= $name_alt['alt_name'] ?></li>
                          <?php endforeach; ?>
                      <?php endif; ?>
  									</div>
  								</div>
  								<div class="row m-0 py-1 px-0 border-top">
  									<div class="col-lg-3 col-xl-2 strong">Author:</div>
  									<div class="col-lg-9 col-xl-10">
  										<a href="#" title="Other manga by this author"><?= $data['Author']?></a>
                    </div>
  								</div>
  									<div class="row m-0 py-1 px-0 border-top">
  										<div class="col-lg-3 col-xl-2 strong">Artist:</div>
  										<div class="col-lg-9 col-xl-10">
  											<a href="#" title="Other manga by this artist"><?= $data['Artist']?></a>
                      </div>
  									</div>
                      <div class='row m-0 py-1 px-0 border-top'>
  											<div class='col-lg-3 col-xl-2 strong'>Genre:</div>
  											<div class='col-lg-9 col-xl-10'>
                          <?php $genres= $this->M_Manga->getMangaGenres($idManga) ?>
                          <?php if ($genres != null): ?>
                              <?php foreach ($genres as $gen): ?>
                                <a class='badge badge-secondary' href='#'><?= $gen['genre']?></a>
                              <?php endforeach; ?>
                          <?php endif; ?>
                        </div>
                      </div>
  											<div class="row m-0 py-1 px-0 border-top">
  												<div class="col-lg-3 col-xl-2 strong">Pub. status:</div>
  												<div class="col-lg-9 col-xl-10"><?= $data['pub_status']?></div>
  											</div>
  											<div class="row m-0 py-1 px-0 border-top">
  												<div class="col-lg-3 col-xl-2 strong">Stats:</div>
  												<div class="col-lg-9 col-xl-10">
  													<ul class="list-inline m-0">
                              <?php
                                $manga_stats = $this->M_Manga->getMangaStat($idManga);
                              ?>
  														<li class="list-inline-item text-info"><span class='fas fa-eye fa-fw ' aria-hidden='true' title='Views'></span> <?= $manga_stats['view']?></li>
  														<li class="list-inline-item text-success"><span class='fas fa-bookmark fa-fw ' aria-hidden='true' title='Follows'></span> <?= $manga_stats['follow']?></li>
  														<li class="list-inline-item"><span class='far fa-file fa-fw ' aria-hidden='true' title='Total chapters'></span> <?= $manga_stats['total']?></li>
  													</ul>
  												</div>
  											</div>
  												<div class="row m-0 py-1 px-0 border-top">
  													<div class="col-lg-3 col-xl-2 strong">Description:</div>
  													<div class="col-lg-9 col-xl-10"><?= $data['description']?></div>
  												</div>
  												<div class="row m-0 py-1 px-0 border-top">
  													<div class="col-lg-3 col-xl-2 strong">Actions:</div>
  													<div class="col-lg-9 col-xl-10">
                              <?php if (!$this->session->userdata('username')): ?>
                              <button class='btn btn-secondary' id='upload_button' disabled title='You need to log in to use this function.'>
                                <span class='fas fa-upload fa-fw ' aria-hidden='true' title='Upload'></span>
                                <span class='d-none d-xl-inline'>Upload chapter</span>
                              </button>
                              <?php else: ?>
                                <form action="<?= site_url('C_Chapter/addChapter/'.$data['idManga'])?>" method="get">
                                  <button class='btn btn-secondary' id='upload_button' type="submit" title='Upload'>
                                    <span class='fas fa-upload fa-fw ' aria-hidden='true' title='Upload'></span>
                                    <span class='d-none d-xl-inline'>Upload chapter</span>
                                  </button>
                                </form>
                              <?php endif; ?>
  													</div>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<ul class="edit nav nav-tabs" role="tablist">
  									<li class="nav-item">
  										<a class="nav-link active" href="#"><span class='far fa-file fa-fw ' aria-hidden='true'></span> <span class="d-none d-md-inline">Chapters</span></a>
  									</li>
  									<li class="nav-item">
  										<a class="nav-link " href="#"><span class='fas fa-image fa-fw ' aria-hidden='true'></span> <span class="d-none d-md-inline">Covers</span></a>
  									</li>
  								</ul>
                  <div class="edit tab-content">
                    <div class="chapter-container ">
                      <div class="row no-gutters">
                        <div class="col ">
                          <div class="chapter-row d-flex row no-gutters p-2 align-items-center border-bottom odd-row">
                            <div class="col-auto text-center order-lg-1" style="flex: 0 0 2.5em;"><span class='fas fa-eye fa-fw ' aria-hidden='true' title='Read'></span></div>
                            <div class="col col-lg-5 row no-gutters pr-1 order-lg-2"><span class='far fa-file fa-fw ' aria-hidden='true' title='Chapter'></span></div>
                            <div class="col-2 col-lg-1 ml-1 text-right order-lg-8"><span class='far fa-clock fa-fw ' aria-hidden='true' title='Age'></span></div>
                            <div class="w-100 d-lg-none"></div>
                            <div class="col-auto text-center order-lg-4" style="flex: 0 0 2.5em;"><span class='fas fa-globe fa-fw ' aria-hidden='true' title='Language'></span></div>
                            <div class="col order-lg-5"><span class='fas fa-users fa-fw ' aria-hidden='true' title='Group'></span></div>
                            <div class="col-auto col-lg-1 text-right mx-1 order-lg-6"><span class='fas fa-user fa-fw ' aria-hidden='true' title='Uploader'></span></div>
                            <div class="col-2 col-lg-1 text-right text-info order-lg-7"><span class='fas fa-eye fa-fw ' aria-hidden='true' title='Views'></span></div>
                          </div>
                        </div>
                      </div>

                        <?php $chap_list = $this->M_Manga->getChapter($data['idManga']) ?>
                        <?php if ($chap_list != null): ?>
                          <?php foreach ($chap_list as $chap): ?>
                            <div class="row no-gutters">
                              <div class="col ">
                              <div class="chapter-row d-flex row no-gutters p-2 align-items-center border-bottom odd-row" >
                                <div class="col-auto text-center order-lg-1" style="flex: 0 0 2.5em;">
                                  <span class='grey' title='.'><span class='fas fa-eye fa-fw ' aria-hidden='true'></span></span>
                                </div>
                                <div class="col col-lg-5 row no-gutters align-items-center flex-nowrap text-truncate pr-1 order-lg-2">
                                  <a href='<?= site_url('C_Chapter/chapter/'.$chap['idChapter'])?>' class='text-truncate'><?= $chap['chapter_title']?></a>
                                  <div></div>
                                </div>
                                <div class="col-2 col-lg-1 ml-1 text-right text-truncate order-lg-8 text-success" title="<?= $chap['upload_time']?>">
                                    <?= timespan(strtotime($chap['upload_time']),strtotime(@mdate("%d-%m-%Y, %H:%i:%s")),1)?>
                                  <span class='d-none d-xl-inline'>ago</span>
                                </div>
                                  <div class="w-100 d-lg-none"></div>
                                  <div class="chapter-list-flag col-auto text-center order-lg-4" style="flex: 0 0 2.5em;">
                                    <?php
                                      if($chap['langguage'] == 'English') {
                                        $flag = 'gb';
                                      } else if ($chap['langguage'] == 'Indonesia') {
                                        $flag = 'id';
                                      }
                                     ?>
                                    <span class='rounded flag flag-<?= $flag?>' title='<?= $chap['langguage']?>'></span>
                                  </div>
                                  <div class="chapter-list-group col text-truncate order-lg-5">
                                    <a href='#'><?= $this->M_Group->getGroupName($chap['idScanGroup'])?></a>
                                  </div>
                                  <div class="chapter-list-uploader col-auto col-lg-1 text-truncate text-right mx-1 order-lg-6">
                                    <a class='user_level_guest' style='color: #36f; ' href='#'><?= $chap['uploader']?></a>
                                  </div>
                                    <div class="chapter-list-views col-2 col-lg-1 text-right text-info text-truncate order-lg-7">
                                      <?php $view = $this->M_Chapter->getChapterStat($chap['idChapter'])['view'] ?>
                                      <span class="d-none d-md-inline d-lg-none d-xl-inline"><?= $view?></span>
                                      <span class="d-inline d-md-none d-lg-inline d-xl-none" title="<?=$view?>"><?$view?></span>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
  </div>
<?php endif; ?>
<!--data-id="=#$chap['idChapter']?>" data-title="< #$chap['cha']?>" data-chapter="" data-volume="" data-comments="2" data-read="false" data-lang="1" data-group="339" data-uploader="SadaoMaou" data-views="172" data-timestamp="1556003024" data-manga-id="8847"-->
