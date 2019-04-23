<!DOCTYPE html>
<html lang="en">

<head>
	<title>MangaDex</title>
	<base href="<?php echo base_url(); ?>" >
	<script type="text/javascript" async="" src="<?= base_url(); ?>/assets/js/analytics.js.download"></script>
	<script type="text/javascript" async="" src="<?= base_url(); ?>/assets/js/recaptcha__en.js.download"></script>

	<link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

	<link href="<?= base_url(); ?>assets/css/bootstrap-select.min.css" rel="stylesheet">

	<link href="<?= base_url(); ?>assets/css/owl.carousel.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/owl.theme.default.min.css" rel="stylesheet">

	<link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">

	<link href="<?= base_url(); ?>assets/css/lightbox.min.css" rel="stylesheet">

	<link href="<?= base_url(); ?>assets/css/theme.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/Light.css" rel="stylesheet">
	<script type="module" src="<?= base_url(); ?>assets/jss/bundle.prod.js.download"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<style type="text/css">
	/* Chart.js */
	@-webkit-keyframes chartjs-render-animation {
		from {
			opacity: 0.99
		}

		to {
			opacity: 1
		}
	}

	@keyframes chartjs-render-animation {
		from {
			opacity: 0.99
		}

		to {
			opacity: 1
		}
	}

	.chartjs-render-monitor {
		-webkit-animation: chartjs-render-animation 0.001s;
		animation: chartjs-render-animation 0.001s;
	}
</style>
</head>

<body>
	<nav class="navbar fixed-top navbar-expand-lg text-nowrap navbar-light bg-light">
		<div class="container">
			<button class="navbar-toggler mr-auto" type="button" data-toggle="modal" data-target="#left_modal">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="p-0 navbar-brand" href="<?php base_url() ?>"><img class="mx-2" height="38px" src="<?= base_url(); ?>/assets/img/navbar.svg" alt="MangaDex" title="MangaDex"> <small class="d-lg-none d-xl-inline">MangaDex</small></a>
			<button class="navbar-toggler ml-auto" type="button" data-toggle="modal" data-target="#homepage_settings_modal">
				<span class="navbar-icon"><span class="fa fa-cog fa-fw " aria-hidden="true"></span></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown mx-1">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-book fa-fw" aria-hidden="true"></span> Manga</a>
						<!--BINGUNG DISINI ^^ -->
						<div class="dropdown-menu">
							<a class="dropdown-item " href="#"><span class="fa fa-book fa-fw" aria-hidden="true"></span> Titles</a>
							<a class="dropdown-item " href="#"><span class="fa fa-sync fa-fw " aria-hidden="true"></span> Updates</a>
							<a class="dropdown-item " href="#"><span class="fa fa-search fa-fw " aria-hidden="true"></span> Search</a>
							<a class="dropdown-item " href="#"><span class="fa fa-tv fa-fw " aria-hidden="true"></span> Featured</a>
							<a class="dropdown-item" href="#"><span class="fa fa-question-circle fa-fw " aria-hidden="true"></span> Random</a>
							<a class="dropdown-item " href="#"><span class="fa fa-plus-circle fa-fw " aria-hidden="true"></span> Add</a>
						</div>
					</li>
					<li class="nav-item mx-1" id="login">
						<a class="nav-link" href="" title="You need to log in."><span class="fa fa-bookmark fa-fw " aria-hidden="true"></span> Follows</a>
					</li>
					<li class="nav-item mx-1 dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-users fa-fw " aria-hidden="true"></span> Community</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#"><span class="fa fa-university fa-fw " aria-hidden="true" title="Forums"></span> Forums</a>
							<a class="dropdown-item" href="#"><span class="fa fa-users fa-fw " aria-hidden="true" title="Groups"></span> Groups</a>
							<a class="dropdown-item" href="#"><span class="fa fa-user fa-fw " aria-hidden="true" title="Users"></span> Users</a>
							<a class="dropdown-item" href="#" target="_blank" rel="nofollow"><span class="fab fa-discord fa-fw " aria-hidden="true" title="Rules"></span> Discord</a>
							<a class="dropdown-item" href="#" target="_blank" rel="nofollow"><span class="fab fa-twitter fa-fw " aria-hidden="true" title="Twitter"></span> Twitter</a>
							<a class="dropdown-item" href="#" target="_blank" rel="nofollow"><span class="fab fa-reddit fa-fw " aria-hidden="true" title="Reddit"></span> Reddit</a>
							<a class="dropdown-item" href="#" rel="nofollow"><span class="fa fa-hashtag fa-fw " aria-hidden="true" title="IRC"></span> IRC</a>
						</div>
					</li>
					<li class="nav-item mx-1 dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-info-circle fa-fw " aria-hidden="true"></span> Info</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#"><span class="fa fa-clipboard fa-fw " aria-hidden="true" title="Stats"></span> Stats</a>
							<a class="dropdown-item" href="#"><span class="fa fa-list fa-fw " aria-hidden="true" title="Rules"></span> Rules</a>
							<a class="dropdown-item" href="#"><span class="fa fa-info fa-fw " aria-hidden="true" title="About"></span> About</a>
							<a class="dropdown-item" href="#"><span class="fa fa-code fa-fw " aria-hidden="true" title="Change log"></span> Change log</a>
						</div>
					</li>
				</ul>
				<form id="quick_search_form" method="get" action="#" role="search" class="form-inline mx-1">
					<div class="input-group">
						<div class="input-group-prepend">
							<select class="form-control" id="quick_search_type">
								<option value="1" data-content="&lt;span class=&#39;fa fa-sitemap fa-fw &#39; aria-hidden=&#39;true&#39; &gt;&lt;/span&gt; &lt;span class=&#39;d-none d-xl-inline&#39;&gt;All&lt;/span&gt;">All</option>
								<option selected="" value="2" data-content="&lt;span class=&#39;fa fa-book fa-fw &#39; aria-hidden=&#39;true&#39; &gt;&lt;/span&gt; &lt;span class=&#39;d-none d-xl-inline&#39;&gt;Manga&lt;/span&gt;">Manga</option>
								<option value="3" data-content="&lt;span class=&#39;fa fa-users fa-fw &#39; aria-hidden=&#39;true&#39; &gt;&lt;/span&gt; &lt;span class=&#39;d-none d-xl-inline&#39;&gt;Groups&lt;/span&gt;">Groups</option>
								<option value="4" data-content="&lt;span class=&#39;fa fa-user fa-fw &#39; aria-hidden=&#39;true&#39; &gt;&lt;/span&gt; &lt;span class=&#39;d-none d-xl-inline&#39;&gt;Users&lt;/span&gt;">Users</option>
							</select>
						</div>
						<input type="text" class="form-control" placeholder="Quick search" name="term" id="quick_search_input" required="">
						<span class="input-group-append">
							<button class="btn btn-secondary" type="submit" id="quick_search_button"><span class="fa fa-search fa-fw " aria-hidden="true"></span></button>
						</span>
					</div>
				</form>
				<?php if(!isset($_SESSION['username'])) { ?>
					<ul class="navbar-nav">
						<li class="d-none d-lg-block nav-item mx-1" id="homepage_cog">
							<a class="nav-link" href="#" title="Settings" data-toggle="modal" data-target="#homepage_settings_modal"><span class="fa fa-cog fa-fw " aria-hidden="true" title="Settings"></span></a>
						</li>
						<li class="nav-item mx-1 dropdown">
							<a href="<?= base_url()?>#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="fa fa-user-times fa-fw " aria-hidden="true"></span> <span class="d-lg-none d-xl-inline" style="color: #000">Guest</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="<?= base_url() ?>C_login"><span class="fa fa-sign-in fa-fw " aria-hidden="true" title="Log in"></span> Log in</a>
								<a class="dropdown-item" href="<?= base_url() ?>C_register"><span class="fa fa-pencil fa-fw " aria-hidden="true" title="Sign up"></span> Sign up</a>
							</div>
						</li>
					</ul>
				<?php } else { ?>
					<ul class="navbar-nav">
					<li class="d-none d-lg-block nav-item mx-1" id="homepage_cog">
						<a class="nav-link" href="#" title="Settings" data-toggle="modal" data-target="#homepage_settings_modal"><span class="fa fa-cog fa-fw " aria-hidden="true" title="Settings"></span></a>
					</li>
					<li class="nav-item mx-1 dropdown">
						<a href="<?= base_url()?>C_ctrlUser" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<span class="fa fa-user fa-fw " aria-hidden="true"></span> <span class="d-lg-none d-xl-inline" style="color: #06f"> <?= $_SESSION['username']?> </span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
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
						</li>
					</ul>
				<?php } ?>
			</div>
		</div>
	</nav>
