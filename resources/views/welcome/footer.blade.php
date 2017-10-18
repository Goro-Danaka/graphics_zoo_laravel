<!-- Footer Area Starts -->
		<footer>
			<section class="footer-top-section">
				<div class="container">
					<div class="row">
						<div class="col-md-3 text-center">
							<div class="footer-logo">
								<img src="{{ asset('img/logo-white.png') }}" alt="" />
								<p>We are an unlimited graphic design team based in <span class="text-red">Houston, TX.</span></p>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer-top-wrapper">
								<h2 class="heading-footer">THE ZOO</h2>
								<nav class="footer-nav">
									<ul>
									
										<li><a href="{{ route('welcome.aboutus') }}">About us</a></li>
										<li><a href="{{ route('welcome.portfolio') }}">Portfolio</a></li>
										<li><a href="{{ route('welcome.pricing') }}">Pricing</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer-top-wrapper">
								<h2 class="heading-footer">Resources</h2>
								<nav class="footer-nav">
									<ul>
										<li><a href="{{ route('welcome.index') }}#how-it-works">How it Works</a></li>
										<li><a href="{{ route('welcome.blog') }}">Blog</a></li>
										<li><a href="{{ route('welcome.faq') }}">FAQs</a></li>
										<li><a href="{{ route('welcome.contactus') }}">Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer-top-wrapper">
								<h2 class="heading-footer">Extras</h2>
								<nav class="footer-nav">
									<ul>
										<li><a href="{{ route('welcome.login') }}">Login</a></li>
										<li><a href="{{ route('welcome.signup') }}">Sign-up</a></li>
										<li><a href="{{ route('welcome.termsAndConditions') }}">Terms and Conditions</a></li>
										<li><a href="{{ route('welcome.privacyPolicy') }}	">Privacy Policy</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="footer-bottom-section">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<p>We are available <span class="text-red"> 24/7</span> <br />Contact Us: <span class="text-red">  888-976-2747</span></p>
						</div>
						<div class="col-md-6">
							<div class="footer-right-reserve text-center">
								<p>All Rights Reserved © 2017 Graphics Zoo</p>								
							</div>
						</div>
					</div>
				</div>
			</section>
		</footer>
		<!-- Footer Area Ends -->

<script>
jQuery(".toggle_menu").click(function(){
    jQuery(".main-nav").toggleClass("mobile_menu");
    jQuery(this).toggleClass("close_ico");
});
jQuery(window).load(function () {
jQuery('.exp_date label').insertBefore('#expiration1Mask');
});
</script>