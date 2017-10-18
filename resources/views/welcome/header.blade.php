<?php
/*
use Cake\Routing\Router;

$loggedUser = $this->request->session()->read('Auth.User');

$current_controller = $this->request->params['controller'];
$current_action = $this->request->params['action'];
*/


$current_controller = explode (".", Route::currentRouteName())[0];
$current_action = explode (".", Route::currentRouteName())[1];

$loggedUser = 1;
?>
<header>

<section class="header-top-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header-top-items">
					<div class="header-top-single-item">
						We are available <span class="text-red">24/7</span>
					</div>
					<div class="header-top-single-item">
						Contact Us: <span class="text-red">888-976-2747</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="header-bottom-section <?if($current_action=='login'||$current_action=='signup'){ echo 'with-shadow'; }?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="header-logo">
					<a class="main-logo" href="{{ route('welcome.index') }}"><img src="{{ asset('img/logo.png') }}" alt="" /></a>
				</div>
				<span class="toggle_menu"><i class="fa fa-bars" aria-hidden="true"></i><i class="fa fa-times-circle-o" aria-hidden="true"></i>
				</span>
				<div class="navigation_menu">
					<nav class="main-nav">
						<ul>
							<?php //$this->Custom->checkActivePageFrontEnd($current_controller, $current_controller, 'Pages', 'index'); ?>
							<li class=" page_item <?php if($current_action=='index'){ echo 'active'; }?> ">
							<a href="{{ route('welcome.index') }}">Home</a>
							</li>
							<li class=" <?php  if($current_action=='portfolio'){ echo 'active'; }?> ">
							<a href="{{ route('welcome.portfolio') }}">Portfolio</a>
							</li>
							<li class=" <?php if($current_action=='pricing'){ echo 'active'; }?> ">
							<a href="{{ route('welcome.pricing') }}">Pricing</a>
							</li>
							<li class=" <?php if($current_action=='faq'){ echo 'active'; }?> ">
							<a href="{{ route('welcome.faq') }}">FAQ</a>
							</li>
							<li class=" <?php if($current_action=='blog'){ echo 'active'; }?> ">
							<a href="{{ route('welcome.blog') }}">Blog</a>
							</li>
							<li class=" <?php if($current_action=='aboutus'){ echo 'active'; }?> ">
							<a href="{{ route('welcome.aboutus') }}">About Us</a>
							</li>
							<?php if ($loggedUser): ?>
							<li class=" <?php if($current_action=='logout'){ echo 'active'; }?> ">
							<a href="{{ route('welcome.logout') }}">Logout</a>
							</li>
							<li class=" <?php if($current_action=='login'){ echo 'active'; }?> ">
							<a href="{{ route('welcome.login') }}">Dashboard</a>
							</li>
							<?php else: ?>
							<li class=" <?php if($current_action=='login'){ echo 'active'; }?> ">
							<a href="{{ route('welcome.login') }}">Login</a>
							</li>
							<li class=" <?php if($current_action=='signup'){ echo 'active'; }?> signlink">
							<a  href="{{ route('welcome.signup') }}">Sign Up</a>
							</li>
							<?php endif; ?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

</header>
