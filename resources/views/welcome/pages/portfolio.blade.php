<?php 
	 
?>
@extends('welcome')
@section('content')
<main>
	
	<!-- Portfolio Header Section Starts -->
	<section class="portfolio-header-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="heading-primary-red-large">PORTFOLIO</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<p class="para-primary-white">Showcase of Our Awesome Works.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio Header Section Ends -->
	
	<!-- Portfolio Page Section Starts  -->
	<section class="portfolio-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12 text-center">
					<div class="portfolio-options-btn-wrapper" >
						
						<a href="#" class="portfolio-options-btn notJump active filter" data-filter="*">Show All</a>
						<?php if ($portfolio_categories): ?>
						<?php foreach ($portfolio_categories as $k => $portfolio_category): ?>
						<a href="#" data-filter=".pf-<?= $portfolio_category->id ?>" class="portfolio-options-btn notJump filter"><?= $portfolio_category->name ?></a>
						<?php endforeach; ?>
						<?php endif; ?>
			
					</div>
				</div>
			</div>

			<?php if ($portfolios): ?>
			<div class="row">
				<div class="portfolio-item-wrapper">
					<?php foreach ($portfolios as $k => $portfolio): ?>                  
					<?php
						$filter_class = '';
						if (isset($portfolio->portfolio_category)):
						$filter_class = 'pf-' . $portfolio->portfolio_category->id;
						endif;
					?>
					
					<div class="mix <?= $filter_class ?>">	

						<?php
							$featured_image_url = '';
							$featured_image_url = CustomHelper::getPortfolioFeaturedImageUrlUsingObj($portfolio);
						?>
					
						<a class="uduf_vip" href="<?php echo $featured_image_url; ?>">
							<?php
								if ($featured_image_url):
									?>
									<img src = "{{ asset($featured_image_url) }}" alt ="<?= $portfolio->title?>">
									<?php									
								endif;
							?>
						</a>
						
					</div>
					<?php endforeach; ?>
					
				</div>
			</div>
			<?php endif; ?>
			
			
			
		</div>
	</section>
	<!-- Portfolio Page Section Ends  -->
	
	
	
	<!-- Try Graphics Section Starts -->
	<section class="try-graphics-light-section text-center">
		<h2 class="heading-primary-red">TRY GRAPHICS  ZOO NOW!</h2>
		<button class="try-graphics-btn">GET STARTED TODAY</button>
	</section>
	<!-- Try Graphics Section Ends -->
	
</main>

<link href="{{ asset('/css/welcome/viewbox.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/welcome/jquery.viewbox.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/welcome/functions.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/welcome/plugins.js') }}"></script>


<script>fbq('track', 'Portfolio');</script>
<script>
jQuery(function(){
	jQuery('.uduf_vip').viewbox();
});
</script>
@endsection