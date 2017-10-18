<html>
	<head>
		<title>
            <?php
            if (isset($page_title)):
                echo $page_title;
            else:
                echo $this->fetch('title');
            endif;
            ?>            
        </title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
		<script type="text/javascript" href="{{ asset('js/jquery.js') }}"></script>
		
		@include('welcome.css')
		@include('welcome.js')
		@include('welcome.analytic')
	</head>	
	<body>
		
		<!-- <div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div> -->
		<div class="wrap">
			@include('welcome.header')
			@yield('content')
			@include('welcome.footer')
			@include('welcome.js_bottom')
		</div>		
	</body>
</html>
