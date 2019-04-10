	<div class="container" role="main" id="content">
		<div id="announcement" class="alert alert-info fade show text-center" role="alert">
			<strong>Announcement (Apr-06):</strong> Check out our latest interview with TheElusiveTaco! <a title="Go to forum thread" href="https://mangadex.org/thread/72221"><span class="fa fa-external-link fa-fw " aria-hidden="true" title="Forum thread"></span></a></div>
			<script src="./Login - MangaCat_files/api.js.download"></script>
			<div class="alert alert-info text-center" role="alert"><strong>Notice:</strong> Certain features disabled for guests during DDoS mitigation.</div>

			<div class="mx-auto form-narrow" id="login_container">
				<form method="post" id="login_form" action="<?= base_url()?>C_login/login_process">
					<h1 class="text-center">Login</h1>
					<hr>
					<div class="form-group">
						<label for="login_username" class="sr-only">Username</label>
						<input autofocus="" tabindex="1" type="text" name="login_username" id="login_username" class="form-control" placeholder="Username" required="">
					</div>
					<div class="form-group">
						<label for="login_password" class="sr-only">Password</label>
						<input tabindex="2" type="password" name="login_password" id="login_password" class="form-control" placeholder="Password" required="">
					</div>
					<div class="form-group">
						<input tabindex="4" type="checkbox" class="" id="remember_me" name="remember_me" value="1">
						<label class="" for="remember_me">Remember me</label>
					</div>
					<button tabindex="5" class="btn btn-lg btn-success btn-block" type="submit" id="login_button"><span class="fa fa-sign-in fa-fw " aria-hidden="true"></span> Login</button>
					<a tabindex="6" href="#" class="btn btn-lg btn-warning btn-block" id="forgot_button"><span class="fa fa-sync fa-fw " aria-hidden="true"></span> Reset password</a>
					<a tabindex="7" href="<?= base_url()?>C_register" class="btn btn-lg btn-info btn-block" id="signup_button"><span class="fa fa-pencil fa-fw " aria-hidden="true"></span> Sign up</a>
				</form>
			</div>

			<div id="forgot_container" class="mx-auto form-narrow display-none">
				<form method="post" id="reset_form">
					<h1 class="text-center">Reset Password</h1>
					<hr>
					<div class="form-group">
						<label for="reset_email" class="sr-only">Email address</label>
						<input data-toggle="popover" data-content="Enter the email address used when you registered." type="email" name="reset_email" id="reset_email" class="form-control" placeholder="Email Address" required="">
					</div>
					<div class="mb-3 g-recaptcha" data-sitekey="6LcmPEgUAAAAAF5AfkGbv0-UXLDtsX_fQVjFOBpW"><div style="width: 304px; height: 78px;"><div><iframe src="./Login - MangaCat_files/anchor.html" width="304" height="78" role="presentation" name="a-knmhix8t4c0t" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
					<button class="btn btn-lg btn-danger btn-block" type="submit" id="reset_button"><span class="fa fa-sync fa-fw " aria-hidden="true"></span> Send reset email</button>
				</form>
			</div>
		</div> 