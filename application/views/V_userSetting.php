		<div class="container" role="main" id="content">
			<div id="announcement" class="alert alert-info alert-dismissible fade show text-center" role="alert">
				<button id="read_announcement_button" type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
				<strong>Announcement (Apr-06):</strong> Check out our latest interview with TheElusiveTaco! <a title="Go to forum thread" href="https://mangadex.org/thread/72221"><span class="fa fa-external-link fa-fw " aria-hidden="true" title="Forum thread"></span></a>
			</div>
			<?php if($this->session->flashdata('gagal')){ ?>
			<div class="alert alert-danger text-center" role="alert">
				<strong>Failed :</strong> Gagal mengganti password, mungkin password baru tidak sama atau password lama salah
			</div>
			<?php }?>

		<?php if($this->session->flashdata('berhasil')){ ?>
			<div class="alert alert-danger text-center" role="alert">
				<strong>Success :</strong> Ganti password berhasil, silahkan logout kemudian login dengan password baru untuk menerapkan
			</div>
			<?php }?>

			<?php if($this->session->flashdata('error')){ ?>
			<div class="alert alert-danger text-center" role="alert">
				<strong>Failed :</strong> Gatau errornya apa tapi ada error lah
			</div>
			<?php }?>

				<ul class="nav nav-tabs mb-3" role="tablist">
					<li class="nav-item">
						<a class="nav-link" href="#site_settings" aria-controls="site_settings" data-toggle="tab">
							<span class="fa fa-home fa-fw " aria-hidden="true" title="Site settings"></span>
							<span class="d-none d-lg-inline">Site settings</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active show" href="#change_profile" aria-controls="change_profile" data-toggle="tab">
							<span class="fa fa-user fa-fw " aria-hidden="true" title="Change profile"></span>
							<span class="d-none d-lg-inline">Change profile</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#change_password" aria-controls="change_password" data-toggle="tab">
							<span class="fa fa-key fa-fw " aria-hidden="true" title="Password and Security"></span>
							<span class="d-none d-lg-inline">Password and Security</span>
						</a>
					</li>

				</ul>
				<!-- MODAL UNTUK TAB SITE SETTING TINGGALKAN, BELUM FUNGSIONAL -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade" id="site_settings">
						<form method="post" id="site_settings_form" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="language" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Site theme:</label>
								<div class="col-md-8 col-lg-9 col-xl-10">
									<div class="dropdown bootstrap-select form-control">
										<select class="form-control selectpicker" id="theme_id" name="theme_id" tabindex="-98">
											<option selected="selected" value="1">Light</option>
											<option value="2">Dark</option><option value="3">Light-Bronze</option>
											<option value="4">Dark-Bronze</option>
											<option value="5">Light-Slate</option>
											<option value="6">Dark-Slate</option>
											<option value="7">Abyss</option>
										</select>
										<div class="dropdown-menu" role="combobox" style="max-height: 761px; overflow: hidden; min-height: 107px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);" x-placement="bottom-start">
											<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1" style="max-height: 743px; overflow-y: auto; min-height: 89px;">
												<ul class="dropdown-menu inner show">
													<li class="selected active"><a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true"><span class=" bs-ok-default check-mark"></span><span class="text">Light</span></a></li>
													<li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Dark</span></a></li>
													<li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Light-Bronze</span></a></li>
													<li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Dark-Bronze</span></a></li>
													<li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Light-Slate</span></a></li>
													<li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Dark-Slate</span></a></li>
													<li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false"><span class=" bs-ok-default check-mark"></span><span class="text">Abyss</span></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
									<label for="navigation" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Navigation:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<div class="dropdown bootstrap-select form-control">
											<select class="form-control selectpicker" id="navigation" name="navigation" tabindex="-98">
												<option value="0">Legacy</option>
												<option selected="selected" value="1">Nav (Left)</option>
												<option value="2">Nav (Right)</option>
											</select>
											<div class="dropdown-menu" role="combobox" style="max-height: 642px; overflow: hidden; min-height: 0px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);" x-placement="bottom-start">
												<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1" style="max-height: 624px; overflow-y: auto; min-height: 0px;">
													<ul class="dropdown-menu inner show">
														<li class="selected active">
															<a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true">
																<span class=" bs-ok-default check-mark"></span>
																<span class="text">Legacy</span>
															</a>
														</li>
														<li class="selected active">
															<a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true">
																<span class=" bs-ok-default check-mark"></span>
																<span class="text">Nav (Left)</span>
															</a>
														</li>
														<li><a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false">
															<span class=" bs-ok-default check-mark"></span>
															<span class="text">Nav (Right)</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
							</div>
							<div class="form-group row">
									<label for="latest_updates" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Latest updates:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<div class="dropdown bootstrap-select form-control">
											<select class="form-control selectpicker" id="latest_updates" name="latest_updates" tabindex="-98">
												<option selected="selected" value="0">Default</option>
												<option value="1">Grouped chapter list</option>
											</select>
											<div class="dropdown-menu" role="combobox" style="max-height: 659px; overflow: hidden; min-height: 0px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);" x-placement="bottom-start">
												<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1" style="max-height: 641px; overflow-y: auto; min-height: 0px;">
													<ul class="dropdown-menu inner show">
														<li class="selected active">
															<a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true">
																<span class=" bs-ok-default check-mark"></span>
																<span class="text">Default</span>
															</a>
														</li>
														<li>
															<a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false">
																<span class=" bs-ok-default check-mark"></span>
																<span class="text">Grouped chapter list</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
							</div>
							<div class="form-group row">
									<label for="reader" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Reader:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<div class="dropdown bootstrap-select form-control">
											<select class="form-control selectpicker" id="reader" name="reader" tabindex="-98">
												<option selected="selected" value="0">Default</option>
												<option value="1">Legacy</option>
											</select>
											<div class="dropdown-menu" role="combobox" style="max-height: 608px; overflow: hidden; min-height: 0px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);" x-placement="bottom-start">
												<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1" style="max-height: 590px; overflow-y: auto; min-height: 0px;">
													<ul class="dropdown-menu inner show">
														<li class="selected active">
															<a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true">
																<span class=" bs-ok-default check-mark"></span>
																<span class="text">Default</span>
															</a>
														</li>
														<li>
															<a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false">
																<span class=" bs-ok-default check-mark"></span>
																<span class="text">Legacy</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
							</div>
							<div class="form-group row">
									<label for="default_lang_ids" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Filter chapter languages:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<div class="dropdown bootstrap-select show-tick form-control">
											<select multiple="multiple" class="form-control selectpicker show-tick" data-actions-box="true" data-selected-text-format="count &gt; 5" data-size="10" id="default_lang_ids" name="default_lang_ids[]" title="All langs" tabindex="-98">
												<option value="19" data-content="&lt;span class='rounded flag flag-sa' title='Arabic'&gt;&lt;/span&gt; Arabic">Arabic</option>
												<option value="22" data-content="&lt;span class='rounded flag flag-bd' title='Bengali'&gt;&lt;/span&gt; Bengali">Bengali</option>
												<option value="14" data-content="&lt;span class='rounded flag flag-bg' title='Bulgarian'&gt;&lt;/span&gt; Bulgarian">Bulgarian</option>
												<option value="37" data-content="&lt;span class='rounded flag flag-mm' title='Burmese'&gt;&lt;/span&gt; Burmese">Burmese</option>
												<option value="33" data-content="&lt;span class='rounded flag flag-ct' title='Catalan'&gt;&lt;/span&gt; Catalan">Catalan</option>
												<option value="21" data-content="&lt;span class='rounded flag flag-cn' title='Chinese (Simp)'&gt;&lt;/span&gt; Chinese (Simp)">Chinese (Simp)</option>
												<option value="35" data-content="&lt;span class='rounded flag flag-hk' title='Chinese (Trad)'&gt;&lt;/span&gt; Chinese (Trad)">Chinese (Trad)</option>
												<option value="24" data-content="&lt;span class='rounded flag flag-cz' title='Czech'&gt;&lt;/span&gt; Czech">Czech</option>
												<option value="20" data-content="&lt;span class='rounded flag flag-dk' title='Danish'&gt;&lt;/span&gt; Danish">Danish</option>
												<option value="5" data-content="&lt;span class='rounded flag flag-nl' title='Dutch'&gt;&lt;/span&gt; Dutch">Dutch</option>
												<option value="1" data-content="&lt;span class='rounded flag flag-gb' title='English'&gt;&lt;/span&gt; English">English</option>
												<option value="34" data-content="&lt;span class='rounded flag flag-ph' title='Filipino'&gt;&lt;/span&gt; Filipino">Filipino</option>
												<option value="11" data-content="&lt;span class='rounded flag flag-fi' title='Finnish'&gt;&lt;/span&gt; Finnish">Finnish</option>
												<option value="10" data-content="&lt;span class='rounded flag flag-fr' title='French'&gt;&lt;/span&gt; French">French</option>
												<option value="8" data-content="&lt;span class='rounded flag flag-de' title='German'&gt;&lt;/span&gt; German">German</option>
												<option value="13" data-content="&lt;span class='rounded flag flag-gr' title='Greek'&gt;&lt;/span&gt; Greek">Greek</option>
												<option value="9" data-content="&lt;span class='rounded flag flag-hu' title='Hungarian'&gt;&lt;/span&gt; Hungarian">Hungarian</option>
												<option value="27" data-content="&lt;span class='rounded flag flag-id' title='Indonesian'&gt;&lt;/span&gt; Indonesian">Indonesian</option>
												<option value="6" data-content="&lt;span class='rounded flag flag-it' title='Italian'&gt;&lt;/span&gt; Italian">Italian</option>
												<option value="2" data-content="&lt;span class='rounded flag flag-jp' title='Japanese'&gt;&lt;/span&gt; Japanese">Japanese</option>
												<option value="28" data-content="&lt;span class='rounded flag flag-kr' title='Korean'&gt;&lt;/span&gt; Korean">Korean</option>
												<option value="38" data-content="&lt;span class='rounded flag flag-lt' title='Lithuanian'&gt;&lt;/span&gt; Lithuanian">Lithuanian</option>
												<option value="31" data-content="&lt;span class='rounded flag flag-my' title='Malay'&gt;&lt;/span&gt; Malay">Malay</option>
												<option value="25" data-content="&lt;span class='rounded flag flag-mn' title='Mongolian'&gt;&lt;/span&gt; Mongolian">Mongolian</option>
												<option value="30" data-content="&lt;span class='rounded flag flag-ir' title='Persian'&gt;&lt;/span&gt; Persian">Persian</option>
												<option value="3" data-content="&lt;span class='rounded flag flag-pl' title='Polish'&gt;&lt;/span&gt; Polish">Polish</option>
												<option value="16" data-content="&lt;span class='rounded flag flag-br' title='Portuguese (Br)'&gt;&lt;/span&gt; Portuguese (Br)">Portuguese (Br)</option>
												<option value="17" data-content="&lt;span class='rounded flag flag-pt' title='Portuguese (Pt)'&gt;&lt;/span&gt; Portuguese (Pt)">Portuguese (Pt)</option>
												<option value="23" data-content="&lt;span class='rounded flag flag-ro' title='Romanian'&gt;&lt;/span&gt; Romanian">Romanian</option>
												<option value="7" data-content="&lt;span class='rounded flag flag-ru' title='Russian'&gt;&lt;/span&gt; Russian">Russian</option>
												<option value="4" data-content="&lt;span class='rounded flag flag-rs' title='Serbo-Croatian'&gt;&lt;/span&gt; Serbo-Croatian">Serbo-Croatian</option>
												<option value="15" data-content="&lt;span class='rounded flag flag-es' title='Spanish (Es)'&gt;&lt;/span&gt; Spanish (Es)">Spanish (Es)</option>
												<option value="29" data-content="&lt;span class='rounded flag flag-mx' title='Spanish (LATAM)'&gt;&lt;/span&gt; Spanish (LATAM)">Spanish (LATAM)</option>
												<option value="18" data-content="&lt;span class='rounded flag flag-se' title='Swedish'&gt;&lt;/span&gt; Swedish">Swedish</option>
												<option value="32" data-content="&lt;span class='rounded flag flag-th' title='Thai'&gt;&lt;/span&gt; Thai">Thai</option>
												<option value="26" data-content="&lt;span class='rounded flag flag-tr' title='Turkish'&gt;&lt;/span&gt; Turkish">Turkish</option>
												<option value="36" data-content="&lt;span class='rounded flag flag-ua' title='Ukrainian'&gt;&lt;/span&gt; Ukrainian">Ukrainian</option>
												<option value="12" data-content="&lt;span class='rounded flag flag-vn' title='Vietnamese'&gt;&lt;/span&gt; Vietnamese">Vietnamese</option>
											</select>
										</div>
									</div>
							</div>
							<div class="form-group row">
									<label for="display_language" class="col-md-4 col-lg-3 col-xl-2 col-form-label">User interface language:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<div class="dropdown bootstrap-select form-control">
											<select class="form-control selectpicker" id="display_lang_id" name="display_lang_id" data-size="10" tabindex="-98">
													<option value="19" data-content="&lt;span class='rounded flag flag-sa' title='Arabic'&gt;&lt;/span&gt; Arabic">Arabic</option>
													<option value="22" data-content="&lt;span class='rounded flag flag-bd' title='Bengali'&gt;&lt;/span&gt; Bengali">Bengali</option>
													<option value="14" data-content="&lt;span class='rounded flag flag-bg' title='Bulgarian'&gt;&lt;/span&gt; Bulgarian">Bulgarian</option>
													<option value="37" data-content="&lt;span class='rounded flag flag-mm' title='Burmese'&gt;&lt;/span&gt; Burmese">Burmese</option>
													<option value="33" data-content="&lt;span class='rounded flag flag-ct' title='Catalan'&gt;&lt;/span&gt; Catalan">Catalan</option>
													<option value="21" data-content="&lt;span class='rounded flag flag-cn' title='Chinese (Simp)'&gt;&lt;/span&gt; Chinese (Simp)">Chinese (Simp)</option>
													<option value="35" data-content="&lt;span class='rounded flag flag-hk' title='Chinese (Trad)'&gt;&lt;/span&gt; Chinese (Trad)">Chinese (Trad)</option>
													<option value="24" data-content="&lt;span class='rounded flag flag-cz' title='Czech'&gt;&lt;/span&gt; Czech">Czech</option>
													<option value="20" data-content="&lt;span class='rounded flag flag-dk' title='Danish'&gt;&lt;/span&gt; Danish">Danish</option>
													<option value="5" data-content="&lt;span class='rounded flag flag-nl' title='Dutch'&gt;&lt;/span&gt; Dutch">Dutch</option>
													<option value="1" data-content="&lt;span class='rounded flag flag-gb' title='English'&gt;&lt;/span&gt; English">English</option>
													<option value="34" data-content="&lt;span class='rounded flag flag-ph' title='Filipino'&gt;&lt;/span&gt; Filipino">Filipino</option>
													<option value="11" data-content="&lt;span class='rounded flag flag-fi' title='Finnish'&gt;&lt;/span&gt; Finnish">Finnish</option>
													<option value="10" data-content="&lt;span class='rounded flag flag-fr' title='French'&gt;&lt;/span&gt; French">French</option>
													<option value="8" data-content="&lt;span class='rounded flag flag-de' title='German'&gt;&lt;/span&gt; German">German</option>
													<option value="13" data-content="&lt;span class='rounded flag flag-gr' title='Greek'&gt;&lt;/span&gt; Greek">Greek</option>
													<option value="9" data-content="&lt;span class='rounded flag flag-hu' title='Hungarian'&gt;&lt;/span&gt; Hungarian">Hungarian</option>
													<option value="27" data-content="&lt;span class='rounded flag flag-id' title='Indonesian'&gt;&lt;/span&gt; Indonesian">Indonesian</option>
													<option value="6" data-content="&lt;span class='rounded flag flag-it' title='Italian'&gt;&lt;/span&gt; Italian">Italian</option>
													<option value="2" data-content="&lt;span class='rounded flag flag-jp' title='Japanese'&gt;&lt;/span&gt; Japanese">Japanese</option>
													<option value="28" data-content="&lt;span class='rounded flag flag-kr' title='Korean'&gt;&lt;/span&gt; Korean">Korean</option>
													<option value="38" data-content="&lt;span class='rounded flag flag-lt' title='Lithuanian'&gt;&lt;/span&gt; Lithuanian">Lithuanian</option>
													<option value="31" data-content="&lt;span class='rounded flag flag-my' title='Malay'&gt;&lt;/span&gt; Malay">Malay</option>
													<option value="25" data-content="&lt;span class='rounded flag flag-mn' title='Mongolian'&gt;&lt;/span&gt; Mongolian">Mongolian</option>
													<option value="30" data-content="&lt;span class='rounded flag flag-ir' title='Persian'&gt;&lt;/span&gt; Persian">Persian</option>
													<option value="3" data-content="&lt;span class='rounded flag flag-pl' title='Polish'&gt;&lt;/span&gt; Polish">Polish</option>
													<option value="16" data-content="&lt;span class='rounded flag flag-br' title='Portuguese (Br)'&gt;&lt;/span&gt; Portuguese (Br)">Portuguese (Br)</option>
													<option value="17" data-content="&lt;span class='rounded flag flag-pt' title='Portuguese (Pt)'&gt;&lt;/span&gt; Portuguese (Pt)">Portuguese (Pt)</option>
													<option value="23" data-content="&lt;span class='rounded flag flag-ro' title='Romanian'&gt;&lt;/span&gt; Romanian">Romanian</option>
													<option value="7" data-content="&lt;span class='rounded flag flag-ru' title='Russian'&gt;&lt;/span&gt; Russian">Russian</option>
													<option value="4" data-content="&lt;span class='rounded flag flag-rs' title='Serbo-Croatian'&gt;&lt;/span&gt; Serbo-Croatian">Serbo-Croatian</option>
													<option value="15" data-content="&lt;span class='rounded flag flag-es' title='Spanish (Es)'&gt;&lt;/span&gt; Spanish (Es)">Spanish (Es)</option>
													<option value="29" data-content="&lt;span class='rounded flag flag-mx' title='Spanish (LATAM)'&gt;&lt;/span&gt; Spanish (LATAM)">Spanish (LATAM)</option>
													<option value="18" data-content="&lt;span class='rounded flag flag-se' title='Swedish'&gt;&lt;/span&gt; Swedish">Swedish</option>
													<option value="32" data-content="&lt;span class='rounded flag flag-th' title='Thai'&gt;&lt;/span&gt; Thai">Thai</option>
													<option value="26" data-content="&lt;span class='rounded flag flag-tr' title='Turkish'&gt;&lt;/span&gt; Turkish">Turkish</option>
													<option value="36" data-content="&lt;span class='rounded flag flag-ua' title='Ukrainian'&gt;&lt;/span&gt; Ukrainian">Ukrainian</option>
													<option value="12" data-content="&lt;span class='rounded flag flag-vn' title='Vietnamese'&gt;&lt;/span&gt; Vietnamese">Vietnamese</option>
											</select>
										</div>
									</div>
							</div>
							<div class="form-group row">
									<label for="hentai_mode" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Hentai toggle:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<div class="dropdown bootstrap-select form-control">
											<select class="form-control selectpicker" id="hentai_mode" name="hentai_mode" tabindex="-98">
												<option selected="selected" value="0">Hide toggle (in navbar cog)</option>
												<option value="1">Show toggle (in navbar cog)</option>
											</select>
										</div>
									</div>
							</div>
							<div class="form-group row">
									<label for="display_moderated" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Comment visibility:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<div class="dropdown bootstrap-select form-control">
											<select class="form-control selectpicker" id="display_moderated" name="display_moderated" tabindex="-98">
												<option selected="selected" value="0">Hide moderated comments</option>
												<option value="1">Show all comments</option>
											</select>
											<div class="dropdown-menu" role="combobox" style="max-height: 404px; overflow: hidden; min-height: 0px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);" x-placement="bottom-start">
												<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1" style="max-height: 386px; overflow-y: auto; min-height: 0px;">
													<ul class="dropdown-menu inner show">
														<li class="selected active">
															<a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true">
																<span class=" bs-ok-default check-mark"></span>
																<span class="text">Hide moderated comments</span>
															</a>
														</li>
														<li>
															<a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false">
																<span class=" bs-ok-default check-mark"></span>
																<span class="text">Show all comments</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
							</div>
							<div class="form-group row">
									<label for="list_privacy" class="col-md-4 col-lg-3 col-xl-2 col-form-label">MDList privacy:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<div class="dropdown bootstrap-select form-control">
											<select class="form-control selectpicker" id="list_privacy" name="list_privacy" tabindex="-98">
												<option selected="selected" value="0">Private</option>
												<option value="1">Public</option>
												<option value="2">Friends only</option>
											</select>
											<div class="dropdown-menu" role="combobox" style="max-height: 353px; overflow: hidden; min-height: 0px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);" x-placement="bottom-start">
												<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1" style="max-height: 335px; overflow-y: auto; min-height: 0px;">
													<ul class="dropdown-menu inner show">
														<li class="selected active">
															<a role="option" class="dropdown-item selected active" aria-disabled="false" tabindex="0" aria-selected="true">
																<span class=" bs-ok-default check-mark"></span><span class="text">Private</span>
															</a>
														</li>
														<li>
															<a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false">
																<span class=" bs-ok-default check-mark"></span><span class="text">Public</span>
															</a>
														</li>
														<li>
															<a role="option" class="dropdown-item" aria-disabled="false" tabindex="0" aria-selected="false">
																<span class=" bs-ok-default check-mark"></span><span class="text">Friends only</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
							</div>
							<div class="form-group row">
									<label for="file" class="col-md-4 col-lg-3 col-xl-2 col-form-label">MDList banner:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Leave blank if no change to image" readonly="readonly" name="old_file">
											<span class="input-group-append">
												<span class="btn btn-secondary btn-file">
													<span class="fa fa-folder-open fa-fw " aria-hidden="true"></span> <span>Browse</span> <input type="file" name="file" id="file" accept=".jpg,.jpeg,.png,.gif">
												</span>
											</span>
										</div>
									</div>
							</div>
							<div class="form-group row">
									<label for="list_banner" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Current MDList banner:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<div class="profile-banner-wrapper" style="max-height: none;">
											<a href="<?= base_url() ?>C_usrProfile"><img alt="Banner" src="<?= base_url() ?>assets/img/default-banner.png" width="100%"></a>
										</div>
									</div>
							</div>
							<div class="form-group row">
									<label for="reset_list_banner" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Reset MDList banner:</label>
									<div class="col-md-8 col-lg-9 col-xl-10 ">
										<div class="custom-control custom-checkbox form-check">
											<input type="checkbox" class="custom-control-input" id="reset_list_banner" name="reset_list_banner" value="1" data-state="0">
											<label class="custom-control-label" for="reset_list_banner">&nbsp;</label>
										</div>
									</div>
							</div>
							<div class="form-group row">
								<label for="" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Exclude tags:</label>
								<div class="col-md-8 col-lg-9 col-xl-10 excluded_genres_wrapper">
									<div class="alert alert-info text-center">
										Select tags to exclude from the frontpage, latest chapter updates, and chapter lists from manga and group pages.<br>
										The search and the user's MDList will ignore this setting and use their individual filter functionality instead.
									</div>
									<div class="row mb-2"><span class="col-12 strong border-bottom mb-1">Content</span>
												<div class="col-6 col-md-4 col-lg-3 col-xl-2">
													<div class="custom-control custom-checkbox form-check py-0">
														<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-9" name="manga_genres[]" value="9" data-state="0">
														<label class="custom-control-label" for="checkbox-tag-9"><span class="badge badge-warning">Ecchi</span></label>
													</div>
												</div>
												<div class="col-6 col-md-4 col-lg-3 col-xl-2">
													<div class="custom-control custom-checkbox form-check py-0">
														<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-49" name="manga_genres[]" value="49" data-state="0">
														<label class="custom-control-label" for="checkbox-tag-49"><span class="badge badge-warning">Gore</span></label>
													</div>
												</div>
												<div class="col-6 col-md-4 col-lg-3 col-xl-2">
													<div class="custom-control custom-checkbox form-check py-0">
														<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-50" name="manga_genres[]" value="50" data-state="0">
														<label class="custom-control-label" for="checkbox-tag-50"><span class="badge badge-warning">Sexual Violence</span></label>
													</div>
												</div>
												<div class="col-6 col-md-4 col-lg-3 col-xl-2">
													<div class="custom-control custom-checkbox form-check py-0">
														<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-32" name="manga_genres[]" value="32" data-state="0">
														<label class="custom-control-label" for="checkbox-tag-32"><span class="badge badge-warning">Smut</span></label>
													</div>
												</div>
									</div>
									<div class="row mb-2"><span class="col-12 strong border-bottom mb-1">Format</span>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-1" name="manga_genres[]" value="1" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-1"><span class="badge badge-secondary">4-Koma</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-42" name="manga_genres[]" value="42" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-42"><span class="badge badge-secondary">Adaptation</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-43" name="manga_genres[]" value="43" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-43"><span class="badge badge-secondary">Anthology</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-4" name="manga_genres[]" value="4" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-4"><span class="badge badge-secondary">Award Winning</span></label>															</div>
														</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-7" name="manga_genres[]" value="7" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-7"><span class="badge badge-secondary">Doujinshi</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-48" name="manga_genres[]" value="48" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-48"><span class="badge badge-secondary">Fan Colored</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-45" name="manga_genres[]" value="45" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-45"><span class="badge badge-secondary">Full Color</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-36" name="manga_genres[]" value="36" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-36"><span class="badge badge-secondary">Long Strip</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-47" name="manga_genres[]" value="47" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-47"><span class="badge badge-secondary">Official Colored</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-21" name="manga_genres[]" value="21" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-21"><span class="badge badge-secondary">Oneshot</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-46" name="manga_genres[]" value="46" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-46"><span class="badge badge-secondary">User Created</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-44" name="manga_genres[]" value="44" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-44"><span class="badge badge-secondary">Web Comic</span></label>
														</div>
													</div>
									</div>
									<div class="row mb-2"><span class="col-12 strong border-bottom mb-1">Genre</span>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-2" name="manga_genres[]" value="2" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-2"><span class="badge badge-secondary">Action</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-3" name="manga_genres[]" value="3" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-3"><span class="badge badge-secondary">Adventure</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-5" name="manga_genres[]" value="5" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-5"><span class="badge badge-secondary">Comedy</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-51" name="manga_genres[]" value="51" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-51"><span class="badge badge-secondary">Crime</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-8" name="manga_genres[]" value="8" data-state="0">
																<label class="custom-control-label" for="checkbox-tag-8"><span class="badge badge-secondary">Drama</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-10" name="manga_genres[]" value="10" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-10"><span class="badge badge-secondary">Fantasy</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-13" name="manga_genres[]" value="13" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-13"><span class="badge badge-secondary">Historical</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-14" name="manga_genres[]" value="14" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-14"><span class="badge badge-secondary">Horror</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-41" name="manga_genres[]" value="41" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-41"><span class="badge badge-secondary">Isekai</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-52" name="manga_genres[]" value="52" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-52"><span class="badge badge-secondary">Magical Girls</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-17" name="manga_genres[]" value="17" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-17"><span class="badge badge-secondary">Mecha</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-18" name="manga_genres[]" value="18" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-18"><span class="badge badge-secondary">Medical</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-20" name="manga_genres[]" value="20" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-20"><span class="badge badge-secondary">Mystery</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-53" name="manga_genres[]" value="53" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-53"><span class="badge badge-secondary">Philosophical</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-22" name="manga_genres[]" value="22" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-22"><span class="badge badge-secondary">Psychological</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-23" name="manga_genres[]" value="23" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-23"><span class="badge badge-secondary">Romance</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-25" name="manga_genres[]" value="25" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-25"><span class="badge badge-secondary">Sci-Fi</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-28" name="manga_genres[]" value="28" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-28"><span class="badge badge-secondary">Shoujo Ai</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-30" name="manga_genres[]" value="30" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-30"><span class="badge badge-secondary">Shounen Ai</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-31" name="manga_genres[]" value="31" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-31"><span class="badge badge-secondary">Slice of Life</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-33" name="manga_genres[]" value="33" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-33"><span class="badge badge-secondary">Sports</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-54" name="manga_genres[]" value="54" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-54"><span class="badge badge-secondary">Superhero</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-55" name="manga_genres[]" value="55" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-55"><span class="badge badge-secondary">Thriller</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-35" name="manga_genres[]" value="35" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-35"><span class="badge badge-secondary">Tragedy</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-56" name="manga_genres[]" value="56" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-56"><span class="badge badge-secondary">Wuxia</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-37" name="manga_genres[]" value="37" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-37"><span class="badge badge-secondary">Yaoi</span></label>
														</div>
													</div>
													<div class="col-6 col-md-4 col-lg-3 col-xl-2">
														<div class="custom-control custom-checkbox form-check py-0">
															<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-38" name="manga_genres[]" value="38" data-state="0">
															<label class="custom-control-label" for="checkbox-tag-38"><span class="badge badge-secondary">Yuri</span></label>
														</div>
													</div>
									</div>
									<div class="row mb-2"><span class="col-12 strong border-bottom mb-1">Theme</span>
															<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-57" name="manga_genres[]" value="57" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-57"><span class="badge badge-secondary">Aliens</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-58" name="manga_genres[]" value="58" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-58"><span class="badge badge-secondary">Animals</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-6" name="manga_genres[]" value="6" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-6"><span class="badge badge-secondary">Cooking</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-59" name="manga_genres[]" value="59" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-59"><span class="badge badge-secondary">Crossdressing</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-61" name="manga_genres[]" value="61" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-61"><span class="badge badge-secondary">Delinquents</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-60" name="manga_genres[]" value="60" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-60"><span class="badge badge-secondary">Demons</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-62" name="manga_genres[]" value="62" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-62"><span class="badge badge-secondary">Genderswap</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-63" name="manga_genres[]" value="63" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-63"><span class="badge badge-secondary">Ghosts</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-11" name="manga_genres[]" value="11" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-11"><span class="badge badge-secondary">Gyaru</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-12" name="manga_genres[]" value="12" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-12"><span class="badge badge-secondary">Harem</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-83" name="manga_genres[]" value="83" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-83"><span class="badge badge-secondary">Incest</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-65" name="manga_genres[]" value="65" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-65"><span class="badge badge-secondary">Loli</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-66" name="manga_genres[]" value="66" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-66"><span class="badge badge-secondary">Magic</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-16" name="manga_genres[]" value="16" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-16"><span class="badge badge-secondary">Martial Arts</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-67" name="manga_genres[]" value="67" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-67"><span class="badge badge-secondary">Military</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-64" name="manga_genres[]" value="64" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-64"><span class="badge badge-secondary">Monster Girls</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-68" name="manga_genres[]" value="68" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-68"><span class="badge badge-secondary">Monsters</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-19" name="manga_genres[]" value="19" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-19"><span class="badge badge-secondary">Music</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-69" name="manga_genres[]" value="69" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-69"><span class="badge badge-secondary">Ninja</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-70" name="manga_genres[]" value="70" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-70"><span class="badge badge-secondary">Office Workers</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-71" name="manga_genres[]" value="71" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-71"><span class="badge badge-secondary">Police</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-72" name="manga_genres[]" value="72" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-72"><span class="badge badge-secondary">Post-Apocalyptic</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-73" name="manga_genres[]" value="73" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-73"><span class="badge badge-secondary">Reincarnation</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-74" name="manga_genres[]" value="74" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-74"><span class="badge badge-secondary">Reverse Harem</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-75" name="manga_genres[]" value="75" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-75"><span class="badge badge-secondary">Samurai</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-24" name="manga_genres[]" value="24" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-24"><span class="badge badge-secondary">School Life</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-76" name="manga_genres[]" value="76" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-76"><span class="badge badge-secondary">Shota</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-34" name="manga_genres[]" value="34" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-34"><span class="badge badge-secondary">Supernatural</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-77" name="manga_genres[]" value="77" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-77"><span class="badge badge-secondary">Survival</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-78" name="manga_genres[]" value="78" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-78"><span class="badge badge-secondary">Time Travel</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-80" name="manga_genres[]" value="80" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-80"><span class="badge badge-secondary">Traditional Games</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-79" name="manga_genres[]" value="79" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-79"><span class="badge badge-secondary">Vampires</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-40" name="manga_genres[]" value="40" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-40"><span class="badge badge-secondary">Video Games</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-81" name="manga_genres[]" value="81" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-81"><span class="badge badge-secondary">Virtual Reality</span></label>
																	</div>
																</div>
																<div class="col-6 col-md-4 col-lg-3 col-xl-2">
																	<div class="custom-control custom-checkbox form-check py-0">
																		<input type="checkbox" class="custom-control-input indeterminate-mark " id="checkbox-tag-82" name="manga_genres[]" value="82" data-state="0">
																		<label class="custom-control-label" for="checkbox-tag-82"><span class="badge badge-secondary">Zombies</span></label>
																	</div>
																</div>
									</div>
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-secondary" id="site_settings_button"><span class="fas fa-save fa-fw " aria-hidden="true"></span> Save</button>
							</div>
						</form>
					</div>
					<div role="tabpanel" class="tab-pane fade active show" id="change_profile">
						<form method="post" id="change_profile_form" action="<?= base_url() ?>C_userSetting/userEdit">
							<div class="form-group row">
								<label for="username" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Username:</label>
								<div class="col-md-8 col-lg-9 col-xl-10">
									<input type="text" class="form-control" id="username" name="username" value="<?= $_SESSION['username'] ?>" disabled="">
								</div>
							</div>
							<div class="form-group row">
								<label for="email" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Email:</label>
								<div class="col-md-8 col-lg-9 col-xl-10">
									<input type="email" class="form-control" id="email" name="email" value="<?= $_SESSION['email']?>" disabled="">
								</div>
							</div>
							<div class="form-group row">
								<label for="website" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Website:</label>
								<div class="col-md-8 col-lg-9 col-xl-10">
									<?php if($_SESSION['website'] == "No Website")	{?>
										<input type="text" class="form-control" id="website" name="website" value="" placeholder="http:// or https:// required (Defaults to your MangaDex profile page if not set.)">
									<?php }else {?>
										<input type="text" class="form-control" id="website" name="website" value="<?= $_SESSION['website']?>" placeholder="http:// or https:// required (Defaults to your MangaDex profile page if not set.)">
									<?php }?>
								</div>
							</div>
							<div class="form-group row">
								<label for="language" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Profile language:</label>
								<div class="col-md-8 col-lg-9 col-xl-10">
									<div class="dropdown bootstrap-select form-control">
										<button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" data-id="lang_id" title="English">
										<div class="filter-option">
											<div class="filter-option-inner">
												<div class="filter-option-inner-inner"><span class="rounded flag flag-gb" title="English"></span> English
												</div>
											</div>
										</div>
										</button>
										<div class="dropdown-menu " role="combobox">
											<div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
												<ul class="dropdown-menu inner show"></ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="user_bio" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Biography:</label>
								<div class="col-md-8 col-lg-9 col-xl-10">
									<?php if($_SESSION['biography'] == 'No Biography'){ echo "<textarea class='form-control' name='user_bio' id='user_bio'>"; echo"</textarea>";}else{ echo "<textarea class='form-control' name='user_bio' id='user_bio'>";echo $_SESSION['biography']; echo"</textarea>";} ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="file" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Avatar:</label>
								<div class="col-md-8 col-lg-9 col-xl-10">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Leave blank if no change to image" readonly="" name="old_file">
										<span class="input-group-append">
											<span class="btn btn-secondary btn-file">
												<span class="fa fa-folder-open fa-fw " aria-hidden="true"></span> <span>Browse</span> <input type="file" name="file" id="file" accept=".jpg,.jpeg,.png,.gif">
											</span>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="avatar" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Current avatar:</label>
								<div class="col-md-8 col-lg-9 col-xl-10">
									<img class="rounded avatar mt-2" alt="Avatar" src="<?= base_url() ?>upload/profile/<?= $_SESSION['profile_chara'] ?>">
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-secondary" id="change_profile_button"name="userEdit"><span class="fa fa-save fa-fw " aria-hidden="true" ></span> Save</button>
							</div>
						</form>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="change_password">
						<div class="container">
							<form method="post" id="change_password_form"action="<?=base_url()?>C_userSetting/changePassword">
								<div class="form-group row">
									<label for="old_password" class="col-md-4 col-lg-3 col-xl-2 col-form-label">Old password:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old password" required="">
									</div>
								</div>
								<div class="form-group row">
									<label for="new_password1" class="col-md-4 col-lg-3 col-xl-2 col-form-label">New password:</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="New password" required="">
									</div>
								</div>
								<div class="form-group row">
									<label for="new_password2" class="col-md-4 col-lg-3 col-xl-2 col-form-label">New password (again):</label>
									<div class="col-md-8 col-lg-9 col-xl-10">
										<input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="New password (again)" required="">
									</div>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-danger" id="change_password_button"><span class="fa fa-save fa-fw " aria-hidden="true"></span> Save</button>
								</div>
							</form>
						</div>

				<!-- BATAS BAWAH MODAL TAB SITE SETTING , TIDAK FUNGSIONAL -->


		</div>
