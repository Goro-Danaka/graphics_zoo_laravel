<?php 
	 use App\Helper;
?>
@extends('welcome')
@section('content')
<!-- Intro -->
<!-- Showcase Section Starts -->
<section class="showcase-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2 class="showcase-heading">Unlimited graphic designs. <br />One flat-rate. Dedicated designer.</h2>
				<ul class="showcase-list">
					<li>- On-demand team</li>
					<li>- Unlimited revisions</li>
					<li>- Quick turnaround</li>
				</ul>
				<a href="{{ route('welcome.pricing') }}" class="showcase-btn">Try Risk-Free for 14-days </a>
			</div>
			<div class="col-md-8">
				<img src="{{ asset('img/unlimited-graphics.png') }}" class="showcase-img" alt="" />
			</div>
		</div>
	</div>
</section>
<!-- Showcase Section Ends -->

<!-- Graphics Zoo Section Starts -->
<section class="graphics-zoo-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h2 class="heading-primary">WHO TRUSTS GRAPHICS ZOO?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 col-xs-12 text-center">
				<div class="graphics-zoo-item">
					<img src="{{ asset('img/payment-oasis-icon.png') }}" alt="" />
				</div>
			</div>
			<div class="col-sm-3 col-xs-12 text-center">
				<div class="graphics-zoo-item">
					<img src="{{ asset('img/casa_gorordo.png') }}" alt="" />
				</div>
			</div>
			<div class="col-sm-3 col-xs-12 text-center">
				<div class="graphics-zoo-item">
					<img src="{{ asset('img/kristo_rey.png') }}" alt="" />
				</div>
			</div>
			<div class="col-sm-3 col-xs-12 text-center">
				<div class="graphics-zoo-item">
					<img src="{{ asset('img/hatood.png') }}" alt="" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Graphics Zoo Section Ends -->





<!-- How IT Work Section Starts -->
<section id="how-it-works" class="how-it-work-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h2 class="heading-primary">HOW IT WORKS</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-xs-12 text-center">
				<p class="para-primary">Submit your request - Communicate with your designer - Accept your design</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="how-it-work-item">
					<div class="how-it-work-item-icon">
						<img src="{{ asset('img/no-contracts.png') }}" alt="" />
					</div>
					<div class="how-it-work-item-number">
						<span>1</span>
					</div>
					<div class="how-it-work-item-text">
						<h3 class="heading-secondary">No Contracts</h3>
						<p>Enjoy our unlimited design services month-to-month with no long term contract commitment.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="how-it-work-item">
					<div class="how-it-work-item-icon">
						<img src="{{ asset('img/flat-rate.png') }}" alt="" />
					</div>
					<div class="how-it-work-item-number">
						<span>2</span>
					</div>
					<div class="how-it-work-item-text">
						<h3 class="heading-secondary">Flat-rate</h3>
						<p>You pay the same low rate every month. No matter the number of design requests you have.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="how-it-work-item">
					<div class="how-it-work-item-icon">
						<img src="{{ asset('img/accept.png') }}" alt="" />
					</div>
					<div class="how-it-work-item-number">
						<span>3</span>
					</div>
					<div class="how-it-work-item-text">
						<h3 class="heading-secondary">Unlimited Designs</h3>
						<p>No restrictions on the number of design requests and revisions during any given month. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- How IT Work Section Ends -->


<!-- Portfolio Section Starts -->
<section class="portfolio-section">
	<div class="portfolio-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<h2 class="heading-primary">PORTFOLIO</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12 text-center">
					<p class="para-primary">Simple and easy platform that will fulfill your design requests in 3 easy steps.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="portfolio-body">
		<div class="portfolio-items center">
			
			<?php if ($portfolios): ?>
			<?php foreach ($portfolios as $k => $portfolio): ?>
			<?php
				$featured_image_url = '';
				$featured_image_url = CustomHelper::getPortfolioFeaturedImageUrlUsingObj($portfolio);
				if ($featured_image_url):
			?>
			<div><div class="portfolio-items-wrapper">
			<a class="uduf_vip" href="<?= $featured_image_url ?>"><img src="<?= $featured_image_url ?>" alt="" /></a></div></div>
			<?php endif; ?>
			<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<!-- Portfolio Section Ends -->


<!-- Services Section Starts -->
<section class="services-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h2 class="heading-primary">SERVICES</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<p class="para-primary">Great designs that are provided with service in mind.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="services-item text-center">
					<div class="services-item-wrapper">
						<img src="{{ asset('img/highly-qualified.png') }}" alt="" />
					</div>	
					<h3 class="heading-secondary">Highly Qualified Designers</h3>
					<p>Work one-on-one with your personal designer.</p>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="services-item text-center">
					<div class="services-item-wrapper">
						<img src="{{ asset('img/unlimited-revision.png') }}" alt="" />
					</div>
					<h3 class="heading-secondary">Unlimited Requests and Revisions</h3>
					<p>Get as many design revisions as you need and until you are satisfied completely.</p>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="services-item text-center">
					<div class="services-item-wrapper">
						<img src="{{ asset('img/communication-platform.png') }}" alt="" />
					</div>	
					<h3 class="heading-secondary">Simple Communication Platform</h3>
					<p>Access to a simple platform to manage all your design needs and communicate directly with your designer.</p>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="services-item text-center">
					<div class="services-item-wrapper">
						<img src="{{ asset('img/source-files.png') }}" alt="" />
					</div>	
					<h3 class="heading-secondary">Source Files Included</h3>
					<p>You own everything we create. Whether you need png, pdf, jpg, or editable files. Just ask.</p>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="services-item text-center">
					<div class="services-item-wrapper">
						<img src="{{ asset('img/quality.png') }}" alt="" />
					</div>	
					<h3 class="heading-secondary">Quality Assurance</h3>
					<p>Our professional designers will ensure you receive the best quality designs.</p>
				</div>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="services-item text-center">
					<div class="services-item-wrapper">
						<img src="{{ asset('img/24-7.png') }}" alt="" />
					</div>	
					<h3 class="heading-secondary">Available 24/7</h3>
					<p>Have a question? We are available to answer any and all your questions anytime you need us.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services Section Ends -->			


<!-- Try Graphics Section Starts -->
<section class="try-graphics-dark-section text-center">
	<h2 class="heading-primary-red">TRY GRAPHICS  ZOO NOW!</h2>
	<a href="{{ route('welcome.pricing') }}" class="try-graphics-btn">GET STARTED TODAY</a>
</section>
<!-- Try Graphics Section Ends -->

<!-- Reviews Section Starts -->
<section class="reviews-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h2 class="heading-primary">REVIEWS</h2>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">
								<div class="col-sm-6 text-center">
									<img src="{{ asset('img/Reviews1.png') }}" alt="" />
								</div>
								<div class="col-sm-6">
									<h3 class="heading-secondary-red">Fast Turn-around and Reliable</h3>
									<p>Graphics Zoo has been amazing with their ability to always get the right designs to me on time. Every design is delivered in the time frame that we expect. We are going to continue using your services.</p>
									
									<p class="feature-text">Timothy Galon - Marketing Executive</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-sm-6 text-center">
									<img src="{{ asset('img/Reviews2.png') }}" alt="" />
								</div>
								<div class="col-sm-6">
									<h3 class="heading-secondary-red">Great Support and Exceptional Product</h3>
									<p>Dealing with graphic designs has never been easier. The team at Graphics Zoo just finds a way to make the perfect designs. The best part is whenever I have questions or concerns the team is always ready to make it right.</p>
									
									
									<p class="feature-text">Susan Haley - CEO</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-sm-6 text-center">
									<img src="{{ asset('img/Reviews3.png') }}" alt="" />
								</div>
								<div class="col-sm-6">
									<h3 class="heading-secondary-red">Best Design Service</h3>
									<p>We have used many designers before and the hardest part was getting the right design without paying an arm and a leg. The amount of designs we need every month, there couldn’t be a better service for us. Graphics Zoo rocks!.</p>
									
									
									
									<p class="feature-text">Daniel Rhodes - General Manager</p>
								</div>
							</div>
						</div>
						
						
					</div>
					
					<!-- Controls -->
					<a class="left carousel-control" href="javascript:void(0)" role="button" data-slide="prev" onclick="$('#carousel-example-generic').carousel('prev')">
						<span class="fa fa-chevron-left text-red" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="javascript:void(0)" role="button" data-slide="next" onclick="$('#carousel-example-generic').carousel('next')">
						<span class="fa fa-chevron-right text-red" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Reviews Section Ends -->


<!-- Blog Section Starts -->
<section class="blog-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h2 class="heading-primary">LATEST FROM OUR BLOG</h2>
			</div>
		</div>
		<div class="row">
			<div class="blog-body">
				
				<?php if ($posts): ?>
				<?php foreach ($posts as $k => $post): ?>
				
				<div class="col-sm-4 col-xs-12">
					<div class="blog-item blog-item-first">
						<?php
							$featured_image_url = '';
							$featured_image_url = CustomHelper::getPostFeaturedImageUrlUsingObj($post);
							if ($featured_image_url):
							echo '<img src="'.$featured_image_url.'" alt="" />';
							endif;
						?>
						<h3 class="heading-secondary-red"><?= $post->title ?></h3>
						<a class="blog-btn" href="{{ route('welcome.posts') }}">Read More</a>
					</div>
				</div>	
				
				
				<?php endforeach; ?>
				<?php endif; ?>  
				<div class="col-md-12" style="clear: both;text-align: center;margin-top: 50px;"><a href="{{ route('welcome.blog') }}" class="try-graphics-btn">View All Blogs</a></div>
			</div>
		</div>
	</div>
</section>
<!-- Blog Section Ends -->


<link href="{{ asset('/css/welcome/viewbox.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/welcome/jquery.viewbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/welcome/functions.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/welcome/plugins.js') }}"></script>

<script>fbq('track', 'Home');</script>
<script>
	jQuery(function(){
		jQuery('.uduf_vip').viewbox();
	});
</script>
@endsection	