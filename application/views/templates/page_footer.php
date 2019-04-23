	<div class="modal fade" id="homepage_settings_modal" tabindex="-1" role="dialog" aria-labelledby="homepage_settings_label" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="homepage_settings_label"><span class="fa fa-cog fa-fw " aria-hidden="true"></span> MangaDex settings</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" id="homepage_settings_form">
							<div class="form-group row">
								<label for="language" class="col-lg-3 col-form-label-modal">Site theme:</label>
								<div class="col-lg-9">
									<div class="dropdown bootstrap-select form-control"><select class="form-control selectpicker" id="theme_id" name="theme_id" tabindex="-98">
										<option selected="" value="1">Light</option>
										<option value="2">Dark</option><option value="3">Light-Bronze</option>
										<option value="4">Dark-Bronze</option><option value="5">Light-Slate</option>
										<option value="6">Dark-Slate</option><option value="7">Abyss</option> </select>
									</div>
								</div>
							</div>
								<div class="form-group row">
									<label for="default_lang_ids" class="col-lg-3 col-form-label-modal">Filter chapter languages:</label>
									<div class="col-lg-9">
										<div class="dropdown bootstrap-select show-tick form-control">
											<select multiple="" class="form-control selectpicker show-tick" data-actions-box="true" data-selected-text-format="count &gt; 5" data-size="10" id="default_lang_ids" name="default_lang_ids[]" title="All langs" tabindex="-98">
												<option value="19" data-content="&lt;span class=&#39;rounded flag flag-sa&#39; title=&#39;Arabic&#39;&gt;&lt;/span&gt; Arabic">Arabic</option>
												<option value="22" data-content="&lt;span class=&#39;rounded flag flag-bd&#39; title=&#39;Bengali&#39;&gt;&lt;/span&gt; Bengali">Bengali</option>
												<option value="14" data-content="&lt;span class=&#39;rounded flag flag-bg&#39; title=&#39;Bulgarian&#39;&gt;&lt;/span&gt; Bulgarian">Bulgarian</option>
												<option value="37" data-content="&lt;span class=&#39;rounded flag flag-mm&#39; title=&#39;Burmese&#39;&gt;&lt;/span&gt; Burmese">Burmese</option>
												<option value="33" data-content="&lt;span class=&#39;rounded flag flag-ct&#39; title=&#39;Catalan&#39;&gt;&lt;/span&gt; Catalan">Catalan</option>
												<option value="21" data-content="&lt;span class=&#39;rounded flag flag-cn&#39; title=&#39;Chinese (Simp)&#39;&gt;&lt;/span&gt; Chinese (Simp)">Chinese (Simp)</option>
												<option value="35" data-content="&lt;span class=&#39;rounded flag flag-hk&#39; title=&#39;Chinese (Trad)&#39;&gt;&lt;/span&gt; Chinese (Trad)">Chinese (Trad)</option>
												<option value="24" data-content="&lt;span class=&#39;rounded flag flag-cz&#39; title=&#39;Czech&#39;&gt;&lt;/span&gt; Czech">Czech</option>
												<option value="20" data-content="&lt;span class=&#39;rounded flag flag-dk&#39; title=&#39;Danish&#39;&gt;&lt;/span&gt; Danish">Danish</option>
												<option value="5" data-content="&lt;span class=&#39;rounded flag flag-nl&#39; title=&#39;Dutch&#39;&gt;&lt;/span&gt; Dutch">Dutch</option>
												<option value="1" data-content="&lt;span class=&#39;rounded flag flag-gb&#39; title=&#39;English&#39;&gt;&lt;/span&gt; English">English</option>
												<option value="34" data-content="&lt;span class=&#39;rounded flag flag-ph&#39; title=&#39;Filipino&#39;&gt;&lt;/span&gt; Filipino">Filipino</option>
												<option value="11" data-content="&lt;span class=&#39;rounded flag flag-fi&#39; title=&#39;Finnish&#39;&gt;&lt;/span&gt; Finnish">Finnish</option>
												<option value="10" data-content="&lt;span class=&#39;rounded flag flag-fr&#39; title=&#39;French&#39;&gt;&lt;/span&gt; French">French</option>
												<option value="8" data-content="&lt;span class=&#39;rounded flag flag-de&#39; title=&#39;German&#39;&gt;&lt;/span&gt; German">German</option>
												<option value="13" data-content="&lt;span class=&#39;rounded flag flag-gr&#39; title=&#39;Greek&#39;&gt;&lt;/span&gt; Greek">Greek</option>
												<option value="9" data-content="&lt;span class=&#39;rounded flag flag-hu&#39; title=&#39;Hungarian&#39;&gt;&lt;/span&gt; Hungarian">Hungarian</option>
												<option value="27" data-content="&lt;span class=&#39;rounded flag flag-id&#39; title=&#39;Indonesian&#39;&gt;&lt;/span&gt; Indonesian">Indonesian</option>
												<option value="6" data-content="&lt;span class=&#39;rounded flag flag-it&#39; title=&#39;Italian&#39;&gt;&lt;/span&gt; Italian">Italian</option>
												<option value="2" data-content="&lt;span class=&#39;rounded flag flag-jp&#39; title=&#39;Japanese&#39;&gt;&lt;/span&gt; Japanese">Japanese</option>
												<option value="28" data-content="&lt;span class=&#39;rounded flag flag-kr&#39; title=&#39;Korean&#39;&gt;&lt;/span&gt; Korean">Korean</option>
												<option value="38" data-content="&lt;span class=&#39;rounded flag flag-lt&#39; title=&#39;Lithuanian&#39;&gt;&lt;/span&gt; Lithuanian">Lithuanian</option>
												<option value="31" data-content="&lt;span class=&#39;rounded flag flag-my&#39; title=&#39;Malay&#39;&gt;&lt;/span&gt; Malay">Malay</option>
												<option value="25" data-content="&lt;span class=&#39;rounded flag flag-mn&#39; title=&#39;Mongolian&#39;&gt;&lt;/span&gt; Mongolian">Mongolian</option>
												<option value="30" data-content="&lt;span class=&#39;rounded flag flag-ir&#39; title=&#39;Persian&#39;&gt;&lt;/span&gt; Persian">Persian</option>
												<option value="3" data-content="&lt;span class=&#39;rounded flag flag-pl&#39; title=&#39;Polish&#39;&gt;&lt;/span&gt; Polish">Polish</option>
												<option value="16" data-content="&lt;span class=&#39;rounded flag flag-br&#39; title=&#39;Portuguese (Br)&#39;&gt;&lt;/span&gt; Portuguese (Br)">Portuguese (Br)</option>
												<option value="17" data-content="&lt;span class=&#39;rounded flag flag-pt&#39; title=&#39;Portuguese (Pt)&#39;&gt;&lt;/span&gt; Portuguese (Pt)">Portuguese (Pt)</option>
												<option value="23" data-content="&lt;span class=&#39;rounded flag flag-ro&#39; title=&#39;Romanian&#39;&gt;&lt;/span&gt; Romanian">Romanian</option>
												<option value="7" data-content="&lt;span class=&#39;rounded flag flag-ru&#39; title=&#39;Russian&#39;&gt;&lt;/span&gt; Russian">Russian</option>
												<option value="4" data-content="&lt;span class=&#39;rounded flag flag-rs&#39; title=&#39;Serbo-Croatian&#39;&gt;&lt;/span&gt; Serbo-Croatian">Serbo-Croatian</option>
												<option value="15" data-content="&lt;span class=&#39;rounded flag flag-es&#39; title=&#39;Spanish (Es)&#39;&gt;&lt;/span&gt; Spanish (Es)">Spanish (Es)</option><option value="29" data-content="&lt;span class=&#39;rounded flag flag-mx&#39; title=&#39;Spanish (LATAM)&#39;&gt;&lt;/span&gt; Spanish (LATAM)">Spanish (LATAM)</option>
												<option value="18" data-content="&lt;span class=&#39;rounded flag flag-se&#39; title=&#39;Swedish&#39;&gt;&lt;/span&gt; Swedish">Swedish</option>
												<option value="32" data-content="&lt;span class=&#39;rounded flag flag-th&#39; title=&#39;Thai&#39;&gt;&lt;/span&gt; Thai">Thai</option>
												<option value="26" data-content="&lt;span class=&#39;rounded flag flag-tr&#39; title=&#39;Turkish&#39;&gt;&lt;/span&gt; Turkish">Turkish</option>
												<option value="36" data-content="&lt;span class=&#39;rounded flag flag-ua&#39; title=&#39;Ukrainian&#39;&gt;&lt;/span&gt; Ukrainian">Ukrainian</option>
												<option value="12" data-content="&lt;span class=&#39;rounded flag flag-vn&#39; title=&#39;Vietnamese&#39;&gt;&lt;/span&gt; Vietnamese">Vietnamese</option>
											</select>
											<div class="dropdown-menu " role="combobox">
												<div class="bs-actionsbox"><div class="btn-group btn-group-sm btn-block">
													<button type="button" class="actions-btn bs-select-all btn btn-light">Select All</button>
													<button type="button" class="actions-btn bs-deselect-all btn btn-light">Deselect All</button>
												</div>
											</div>
											<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul>
											</div>
										</div>
										</div>
									</div>
								</div>
									<div class="form-group row">
										<label for="display_language" class="col-lg-3 col-form-label-modal">User interface language:</label>
										<div class="col-lg-9">
											<div class="dropdown bootstrap-select form-control">
												<select class="form-control selectpicker" id="display_lang_id" name="display_lang_id" data-size="10" tabindex="-98">
													<option value="19" data-content="&lt;span class=&#39;rounded flag flag-sa&#39; title=&#39;Arabic&#39;&gt;&lt;/span&gt; Arabic">Arabic</option>
													<option value="22" data-content="&lt;span class=&#39;rounded flag flag-bd&#39; title=&#39;Bengali&#39;&gt;&lt;/span&gt; Bengali">Bengali</option>
													<option value="14" data-content="&lt;span class=&#39;rounded flag flag-bg&#39; title=&#39;Bulgarian&#39;&gt;&lt;/span&gt; Bulgarian">Bulgarian</option>
													<option value="37" data-content="&lt;span class=&#39;rounded flag flag-mm&#39; title=&#39;Burmese&#39;&gt;&lt;/span&gt; Burmese">Burmese</option>
													<option value="33" data-content="&lt;span class=&#39;rounded flag flag-ct&#39; title=&#39;Catalan&#39;&gt;&lt;/span&gt; Catalan">Catalan</option>
													<option value="21" data-content="&lt;span class=&#39;rounded flag flag-cn&#39; title=&#39;Chinese (Simp)&#39;&gt;&lt;/span&gt; Chinese (Simp)">Chinese (Simp)</option>
													<option value="35" data-content="&lt;span class=&#39;rounded flag flag-hk&#39; title=&#39;Chinese (Trad)&#39;&gt;&lt;/span&gt; Chinese (Trad)">Chinese (Trad)</option>
													<option value="24" data-content="&lt;span class=&#39;rounded flag flag-cz&#39; title=&#39;Czech&#39;&gt;&lt;/span&gt; Czech">Czech</option>
													<option value="20" data-content="&lt;span class=&#39;rounded flag flag-dk&#39; title=&#39;Danish&#39;&gt;&lt;/span&gt; Danish">Danish</option>
													<option value="5" data-content="&lt;span class=&#39;rounded flag flag-nl&#39; title=&#39;Dutch&#39;&gt;&lt;/span&gt; Dutch">Dutch</option>
													<option selected="" value="1" data-content="&lt;span class=&#39;rounded flag flag-gb&#39; title=&#39;English&#39;&gt;&lt;/span&gt; English">English</option>
													<option value="34" data-content="&lt;span class=&#39;rounded flag flag-ph&#39; title=&#39;Filipino&#39;&gt;&lt;/span&gt; Filipino">Filipino</option>
													<option value="11" data-content="&lt;span class=&#39;rounded flag flag-fi&#39; title=&#39;Finnish&#39;&gt;&lt;/span&gt; Finnish">Finnish</option>
													<option value="10" data-content="&lt;span class=&#39;rounded flag flag-fr&#39; title=&#39;French&#39;&gt;&lt;/span&gt; French">French</option>
													<option value="8" data-content="&lt;span class=&#39;rounded flag flag-de&#39; title=&#39;German&#39;&gt;&lt;/span&gt; German">German</option>
													<option value="13" data-content="&lt;span class=&#39;rounded flag flag-gr&#39; title=&#39;Greek&#39;&gt;&lt;/span&gt; Greek">Greek</option>
													<option value="9" data-content="&lt;span class=&#39;rounded flag flag-hu&#39; title=&#39;Hungarian&#39;&gt;&lt;/span&gt; Hungarian">Hungarian</option>
													<option value="27" data-content="&lt;span class=&#39;rounded flag flag-id&#39; title=&#39;Indonesian&#39;&gt;&lt;/span&gt; Indonesian">Indonesian</option>
													<option value="6" data-content="&lt;span class=&#39;rounded flag flag-it&#39; title=&#39;Italian&#39;&gt;&lt;/span&gt; Italian">Italian</option>
													<option value="2" data-content="&lt;span class=&#39;rounded flag flag-jp&#39; title=&#39;Japanese&#39;&gt;&lt;/span&gt; Japanese">Japanese</option>
													<option value="28" data-content="&lt;span class=&#39;rounded flag flag-kr&#39; title=&#39;Korean&#39;&gt;&lt;/span&gt; Korean">Korean</option>
													<option value="38" data-content="&lt;span class=&#39;rounded flag flag-lt&#39; title=&#39;Lithuanian&#39;&gt;&lt;/span&gt; Lithuanian">Lithuanian</option>
													<option value="31" data-content="&lt;span class=&#39;rounded flag flag-my&#39; title=&#39;Malay&#39;&gt;&lt;/span&gt; Malay">Malay</option>
													<option value="25" data-content="&lt;span class=&#39;rounded flag flag-mn&#39; title=&#39;Mongolian&#39;&gt;&lt;/span&gt; Mongolian">Mongolian</option>
													<option value="30" data-content="&lt;span class=&#39;rounded flag flag-ir&#39; title=&#39;Persian&#39;&gt;&lt;/span&gt; Persian">Persian</option>
													<option value="3" data-content="&lt;span class=&#39;rounded flag flag-pl&#39; title=&#39;Polish&#39;&gt;&lt;/span&gt; Polish">Polish</option>
													<option value="16" data-content="&lt;span class=&#39;rounded flag flag-br&#39; title=&#39;Portuguese (Br)&#39;&gt;&lt;/span&gt; Portuguese (Br)">Portuguese (Br)</option>
													<option value="17" data-content="&lt;span class=&#39;rounded flag flag-pt&#39; title=&#39;Portuguese (Pt)&#39;&gt;&lt;/span&gt; Portuguese (Pt)">Portuguese (Pt)</option>
													<option value="23" data-content="&lt;span class=&#39;rounded flag flag-ro&#39; title=&#39;Romanian&#39;&gt;&lt;/span&gt; Romanian">Romanian</option>
													<option value="7" data-content="&lt;span class=&#39;rounded flag flag-ru&#39; title=&#39;Russian&#39;&gt;&lt;/span&gt; Russian">Russian</option>
													<option value="4" data-content="&lt;span class=&#39;rounded flag flag-rs&#39; title=&#39;Serbo-Croatian&#39;&gt;&lt;/span&gt; Serbo-Croatian">Serbo-Croatian</option>
													<option value="15" data-content="&lt;span class=&#39;rounded flag flag-es&#39; title=&#39;Spanish (Es)&#39;&gt;&lt;/span&gt; Spanish (Es)">Spanish (Es)</option>
													<option value="29" data-content="&lt;span class=&#39;rounded flag flag-mx&#39; title=&#39;Spanish (LATAM)&#39;&gt;&lt;/span&gt; Spanish (LATAM)">Spanish (LATAM)</option>
													<option value="18" data-content="&lt;span class=&#39;rounded flag flag-se&#39; title=&#39;Swedish&#39;&gt;&lt;/span&gt; Swedish">Swedish</option>
													<option value="32" data-content="&lt;span class=&#39;rounded flag flag-th&#39; title=&#39;Thai&#39;&gt;&lt;/span&gt; Thai">Thai</option>
													<option value="26" data-content="&lt;span class=&#39;rounded flag flag-tr&#39; title=&#39;Turkish&#39;&gt;&lt;/span&gt; Turkish">Turkish</option>
													<option value="36" data-content="&lt;span class=&#39;rounded flag flag-ua&#39; title=&#39;Ukrainian&#39;&gt;&lt;/span&gt; Ukrainian">Ukrainian</option>
													<option value="12" data-content="&lt;span class=&#39;rounded flag flag-vn&#39; title=&#39;Vietnamese&#39;&gt;&lt;/span&gt; Vietnamese">Vietnamese</option> 
												</select>
												<div class="dropdown-menu " role="combobox">
													<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
														<ul class="dropdown-menu inner show"></ul>
													</div>
												</div>
											</div>
										</div>
										</div>
										<div class="form-group row">
											<div class="col-lg-3 text-right">
												<button type="submit" class="btn btn-secondary" id="homepage_settings_button"><span class="fa fa-save fa-fw " aria-hidden="true"></span> Save</button>
											</div>
											<div class="col-lg-9 text-left">
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<div class="alert alert-info mx-auto text-center" role="alert"><strong>Info:</strong> These settings are temporary. Please <span class="fa fa-pencil fa-fw " aria-hidden="true"></span> <a href="<?php base_url() ?>C_register">make an account</a> to remember these permanently.</div> </div>
								</div>
							</div>
						</div>

						<div class="modal left fade" id="left_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content border-0">
										<nav class="navbar fixed-top text-nowrap navbar-light bg-light">
											<div class="container p-0">
												<div class="dropdown">
													<?php if(!isset($_SESSION['username'])) { ?>
													<a href="#" class="dropdown-toggle no-underline" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
														<span class="fa fa-user-times fa-fw " aria-hidden="true"></span> <span class="d-lg-none d-xl-inline" style="color: #000">Guest</span>
													</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="<?= base_url() ?>C_login"><span class="fa fa-sign-in fa-fw " aria-hidden="true" title="Log in"></span> Log in</a>
														<a class="dropdown-item" href="<?= base_url() ?>C_register"><span class="fa fa-pencil fa-fw " aria-hidden="true" title="Sign up"></span> Sign up</a>
													</div>
													<?php } else { ?>
														<a href="<?= base_url()?>C_ctrlUser" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
															<span class="fa fa-user fa-fw " aria-hidden="true"></span> <span class="d-lg-none d-xl-inline" style="color: #06f"> <?= $_SESSION['username']?> </span>
														</a>
														<div class="dropdown-menu dropdown-menu">
															<a class="dropdown-item" href="<?php base_url() ?>C_usrProfile">
																<span class="fa fa-user fa-fw " aria-hidden="true" title="Profile"></span> Profile </a>
																<a class="dropdown-item" href="#"><span class="fa fa-history fa-fw " aria-hidden="true" title="History"></span> History</a>
																<a class="dropdown-item" href="<?= base_url() ?>C_userSetting"><span class="fa fa-cog fa-fw " aria-hidden="true" title="Settings"></span> Settings</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#"><span class="fa fa-list fa-fw " aria-hidden="true" title="My list"></span> MDList</a>
																<a class="dropdown-item" href="#"><span class="fa fa-user-friends fa-fw " aria-hidden="true" title="social"></span> Social </a>
																<a class="dropdown-item" href="#"><span class="fa fa-exclamation-circle fa-fw " aria-hidden="true" title="notifications"></span> Notifications </a>
																<a class="dropdown-item" href="#"><span class="fa fa-envelope fa-fw " aria-hidden="true" title="Inbox"></span> Inbox </a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item" href="#"><span class="fa fa-dollar-sign fa-fw " aria-hidden="true" title="support"></span> Support</a>
																<div class="dropdown-divider"></div>
																<a class="dropdown-item logout" href="<?php base_url()?>C_login/logout"><span class="fa fa-sign-out fa-fw " aria-hidden="true" title="Log out"></span> Log out</a>
														</div>
													<?php } ?>
												</div>
												<button class="navbar-toggler ml-auto" type="button">
													<a class="" href="<?= base_url()?>C_login"><span class="navbar-icon"><span class="fa fa-sign-in fa-fw " aria-hidden="true"></span></span></a>
												</button>
											</div>
										</nav>
										<nav style="margin-top: 70px;" class="nav flex-column">
											<div class="dropdown nav-link">
												<a href="#" class="dropdown-toggle no-underline" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-book fa-fw " aria-hidden="true"></span> Manga</a>
												<div class="dropdown-menu">
													<a class="dropdown-item " href="#"><span class="fa fa-book fa-fw " aria-hidden="true"></span> Titles</a>
													<a class="dropdown-item " href="#"><span class="fa fa-sync fa-fw " aria-hidden="true"></span> Updates</a>
													<a class="dropdown-item " href="#"><span class="fa fa-search fa-fw " aria-hidden="true"></span> Search</a>
													<a class="dropdown-item " href="#"><span class="fa fa-tv fa-fw " aria-hidden="true"></span> Featured</a>
													<a class="dropdown-item" href="#""><span class="fa fa-question-circle fa-fw " aria-hidden="true"></span> Random</a>
													<a class="dropdown-item " href="#"><span class="fa fa-plus-circle fa-fw " aria-hidden="true"></span> Add</a>
												</div>
											</div>
											<a class="nav-link no-underline" href="#" title="You need to log in."><span class="fa fa-bookmark fa-fw " aria-hidden="true"></span> Follows</a>
											<div class="dropdown nav-link">
												<a href="./Login - MangaCat_files/login" class="dropdown-toggle no-underline" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-users fa-fw " aria-hidden="true"></span> Community</a>
												<div class="dropdown-menu">
													<a class="dropdown-item " href="#"><span class="fa fa-university fa-fw " aria-hidden="true"></span> Forums</a>
													<a class="dropdown-item " href="#"><span class="fa fa-users fa-fw " aria-hidden="true"></span> Groups</a>
													<a class="dropdown-item " href="#"><span class="fa fa-user fa-fw " aria-hidden="true"></span> Users</a>
													<a class="dropdown-item" href="#" target="_blank" rel="nofollow"><span class="fa fa-discord fa-fw " aria-hidden="true" title="Rules"></span> Discord</a>
													<a class="dropdown-item" href="#" target="_blank" rel="nofollow"><span class="fa fa-twitter fa-fw " aria-hidden="true" title="Twitter"></span> Twitter</a>
													<a class="dropdown-item" href="#" target="_blank" rel="nofollow"><span class="fa fa-reddit fa-fw " aria-hidden="true" title="Reddit"></span> Reddit</a>
													<a class="dropdown-item" href="#" rel="nofollow"><span class="fa fa-hashtag fa-fw " aria-hidden="true" title="IRC"></span> IRC</a>
												</div>
											</div>
											<div class="dropdown nav-link">
												<a href="./Login - MangaCat_files/login" class="dropdown-toggle no-underline" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-info-circle fa-fw " aria-hidden="true"></span> Info</a>
												<div class="dropdown-menu">
													<a class="dropdown-item " href="#"><span class="fa fa-clipboard fa-fw " aria-hidden="true" title="Stats"></span> Stats</a>
													<a class="dropdown-item " href="#"><span class="fa fa-list fa-fw " aria-hidden="true" title="Rules"></span> Rules</a>
													<a class="dropdown-item " href="#"><span class="fa fa-info fa-fw " aria-hidden="true" title="About"></span> About</a>
													<a class="dropdown-item " href="#"><span class="fa fa-code fa-fw " aria-hidden="true" title="Change log"></span> Change log</a>
												</div>
											</div>
										</nav>
										<form id="quick_search_form_m" method="get" action="#" role="search" class="form-inline px-3 py-2">
											<div class="input-group">
												<div class="input-group-prepend">
													<select class="form-control" id="quick_search_type_m">
														<option value="1" data-content="&lt;span class=&#39;fa fa-sitemap fa-fw &#39; aria-hidden=&#39;true&#39; &gt;&lt;/span&gt; &lt;span class=&#39;d-none d-xl-inline&#39;&gt;All&lt;/span&gt;">All</option>
														<option selected="" value="2" data-content="&lt;span class=&#39;fas fa-book fa-fw &#39; aria-hidden=&#39;true&#39; &gt;&lt;/span&gt; &lt;span class=&#39;d-none d-xl-inline&#39;&gt;Manga&lt;/span&gt;">Manga</option>
														<option value="3" data-content="&lt;span class=&#39;fa fa-users fa-fw &#39; aria-hidden=&#39;true&#39; &gt;&lt;/span&gt; &lt;span class=&#39;d-none d-xl-inline&#39;&gt;Groups&lt;/span&gt;">Groups</option>
														<option value="4" data-content="&lt;span class=&#39;fa fa-user fa-fw &#39; aria-hidden=&#39;true&#39; &gt;&lt;/span&gt; &lt;span class=&#39;d-none d-xl-inline&#39;&gt;Users&lt;/span&gt;">Users</option>
													</select>
												</div>
												<input type="text" class="form-control" placeholder="Quick search" name="" id="quick_search_input_m" required="">
												<span class="input-group-append">
													<button class="btn btn-secondary" id="quick_search_button_m" type="submit"><span class="fa fa-search fa-fw " aria-hidden="true"></span></button>
												</span>
											</div>
										</form>
									</div>
								</div>
							</div>






	<script src="<?= base_url(); ?>/assets/js/jquery.min.js.download"></script>
	<script src="<?= base_url(); ?>/assets/js/jquery.touchSwipe.min.js.download"></script>
	<script src="<?= base_url(); ?>/assets/js/popper.min.js.download"></script>
	<script src="<?= base_url(); ?>/assets/js/bootstrap.min.js.download"></script>
	<script src="<?= base_url(); ?>/assets/js/bootstrap-select.min.js.download"></script>
	<script src="<?= base_url(); ?>/assets/js/lightbox.js.download"></script>
	<script src="<?= base_url(); ?>/assets/js/chart.min.js.download"></script>
	<script nomodule="" src="<?= base_url(); ?>/assets/js/bundle.prod.js.download"></script>
	<script src="./Login - MangaCat_files/reporting.js.download"></script>

</body>
	<footer class="footer">
		<!-- ISI FOOTER DISINI -->
		<p class="m-0 text-center text-muted">© 2018 - 2019
			<a href="<?= base_url()?>/C_home" >MangaDex</a> | Powered By SomethingSomething
		</p>

	</footer>