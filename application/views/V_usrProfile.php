<div class="container" role="main" id="content">
			
			<div id="announcement" class="alert alert-info alert-dismissible fade show text-center" role="alert">
				<button id="read_announcement_button" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
				<strong>Announcement (Apr-06):</strong> Check out our latest interview with TheElusiveTaco! <a title="Go to forum thread" href="https://mangadex.org/thread/72221"><span class="fa fa-external-link fa-fw " aria-hidden="true" title="Forum thread"></span></a></div>
				
				<div class="card mb-3">
					<h6 class="card-header d-flex align-items-center py-2">
						<span class="fa fa-user fa-fw " aria-hidden="true"></span> <span class="mx-1"><?= $_SESSION['username']?></span>
						<span class="rounded flag flag-gb" title="English"></span> <a class="ml-auto" target="_blank" href="https://mangadex.org/rss/sQeGay8r9wSDTphFbCtqYuHv6MPEc5XK/user_id/254253"><span class="fa fa-rss fa-2x"></span></a> </h6>
						<div class="card-body p-0">
							<div class="row edit">
								<div class="col-xl-3 col-lg-4 col-md-5"><img class="rounded avatar-fit mt-2" alt="Avatar" src="<?php base_url()?>upload/profile/<?= $_SESSION['profile_chara']?>"></div>
								<div class="col-xl-9 col-lg-8 col-md-7">
									<div class="row m-0 py-1 px-0">
										<div class="col-lg-3 col-xl-2 strong">User level:</div>
										<div class="col-lg-9 col-xl-10"><span class="fa fa-graduation-cap fa-fw " aria-hidden="true"></span> <span style="color: #06f; ">Member</span></div>
									</div>
									<div class="row m-0 py-1 px-0 border-top">
										<div class="col-lg-3 col-xl-2 strong">Joined:</div>
										<div class="col-lg-9 col-xl-10"><span class="fa fa-calendar-alt fa-fw " aria-hidden="true"></span> <?= $_SESSION['joined_date'] ?></div>
									</div>
									<div class="row m-0 py-1 px-0 border-top">
										<div class="col-lg-3 col-xl-2 strong">Last online:</div>
										<div class="col-lg-9 col-xl-10"><span class="fa fa-clock fa-fw " aria-hidden="true"></span> Now</div>
									</div>
									<div class="row m-0 py-1 px-0 border-top">
										<div class="col-lg-3 col-xl-2 strong">Group(s):</div>
										<div class="col-lg-9 col-xl-10">None</div>
									</div>
									<div class="row m-0 py-1 px-0 border-top">
										<div class="col-lg-3 col-xl-2 strong">Stats:</div>
										<div class="col-lg-9 col-xl-10">
											<ul class="list-inline m-0">
												<li class="list-inline-item text-info"><span class="fa fa-eye fa-fw " aria-hidden="true" title="Views"></span> 2</li>
												<li class="list-inline-item"><span class="fa fa-file fa-fw " aria-hidden="true" title="Chapters uploaded"></span> 0</li>
											</ul>
										</div>
									</div>
									<div class="row m-0 py-1 px-0 border-top">
										<div class="col-lg-3 col-xl-2 strong">Actions:</div>
										<div class="col-lg-9 col-xl-10">
											<button role="button" class="btn btn-secondary" title="This user hasn't set their list to public" disabled="disabled"><img src="<?= base_url()?>assets/img/navbar.svg" height="16px"> MDList</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<ul class="edit nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href=""><span class="fa fa-file fa-fw " aria-hidden="true" title="Chapters"></span> <span class="d-none d-md-inline">Chapters</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url()?>C_usrProfile/#"><span class="fa fa-book fa-fw " aria-hidden="true" title="Manga"></span> <span class="d-none d-md-inline">Manga</span></a>
						</li>
					</ul>

					<div class="tab-content">
						<div class="alert alert-info mt-3 text-center" role="alert"><strong>Notice:</strong> This user hasn't uploaded any chapters yet.</div></div>
					</div> 