<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Meghna One page parallax responsive HTML Template ">
        
        <meta name="author" content="Muhammad Morshed">
		
        <title>Pixtory Photography</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<?= $this->Html->meta(
			'favicon.png',
			'master-template/img/favicon.png',
			['type' => 'icon']
		);
		?>				
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <?= $this->Html->css('/master-template/css/font-awesome.min'); ?>  
		<!-- bootstrap.min css -->
        <?= $this->Html->css('/master-template/css/bootstrap.min'); ?>  
		<!-- Animate.css -->
        <?= $this->Html->css('/master-template/css/animate'); ?>  
		<!-- Owl Carousel -->
        <?= $this->Html->css('/master-template/css/owl.carousel'); ?>  
		<!-- Grid Component css -->
        <?= $this->Html->css('/master-template/css/component'); ?>  
		<!-- Slit Slider css -->
        <?= $this->Html->css('/master-template/css/slit-slider'); ?>  
		<!-- Main Stylesheet -->
        <?= $this->Html->css('/master-template/css/main'); ?>  
		<!-- Media Queries -->
        <?= $this->Html->css('/master-template/css/media-queries'); ?>  
		<!-- Galery Lightbox -->
		<?= $this->Html->css('/master-template/js/lightbox/css/lightbox'); ?>  

		<!-- Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
        <?= $this->Html->css('http://fonts.googleapis.com/css?family=Oswald:400,300'); ?>  
		<!-- Ubuntu / Body Font -->
        <?= $this->Html->css('http://fonts.googleapis.com/css?family=Ubuntu:400,300'); ?>  
		
		<!-- Modernizer Script for old Browsers -->		
		<?= $this->Html->script('/master-template/js/modernizr-2.6.2.min'); ?>  
		
	
    </head>
	
    <body id="body">
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				 <?= $this->Html->image('/master-template/img/preloader.gif', ['alt' => 'Meghna Preloader']); ?>
			</div>
		</div>
		<!--
        End Preloader
        ==================================== -->
		
        <!--
        Welcome Slider
		==================================== -->
		<?php
			if ($this->request->getParam('controller') == 'Pages' && $this->request->getParam('action') == 'home'):
		?>
		<section id="home">	    
		
            <div id="slitSlider" class="sl-slider-wrapper">
				<div class="sl-slider">
					
					<div class="carousel-caption">
						<div>
							<a href="#about">
								<?= $this->Html->image('/master-template/img/logos/pixtory-logo.png', ['class'=>'logo wow fadeInUp','alt' => 'Meghna Preloader','width'=>'400px']); ?>
							</a>
						</div>
					</div>
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
						</div>
					</div>
					<!-- /single slide item -->
					
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
						</div>
					</div>
					<!-- /single slide item -->

				</div><!-- /sl-slider -->
				
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
		<?php
			endif;
		?>
		<!--/#home section-->
		
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
                    <a class="navbar-brand" href="#body">
						<h1 id="logo">
							<?= $this->Html->image('/master-template/img/pixtory.gif',['width'=>'58%']) ?>
						</h1>
					</a>
					<!-- /logo -->
				</div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li>
							<?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home','#'=>'home']); ?>
						</li>
						<li>
							<?= $this->Html->link('About Us', ['controller' => 'Pages', 'action' => 'home','#'=>'about']); ?>
						</li>
						<li class='dropdown <?php if ($this->request->getParam('controller') == 'Pages' && 
													 ($this->request->getParam('action') == 'photography') || 
													 ($this->request->getParam('action') == 'cinematography')) 
													 echo 'current' 
											?>'>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>
										<?= $this->Html->link('Photography', ['controller' => 'Pages', 'action' => 'photography']); ?>
									</li>
									<li> 
										<?= $this->Html->link('Cinematography', ['controller' => 'Pages', 'action' => 'cinematography']); ?>
									</li>
								</ul>
                        <li><a href="#pricing">Packages</a></li>
                        <li><a href="">Books</a></li>
                        <li><a href="#contact-us">Contact</a></li>
						<li>
							<?= $this->Html->link('Login Admin', ['controller' => 'Login', 'action' => 'login']); ?>
						</li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<!-- Page content -->
		<?= $this->fetch('content') ?>
		
		<!-- end Contact Area
		========================================== -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<?= $this->Html->image('/master-template/img/logos/pixtory-logo.png', ['width'=>'20%','alt' => 'Meghna']); ?>
							</a>
							<br><br>
							
							<p><a href="http://www.themefisher.com"> PIXTORY Photography</a> | Copyright &copy; 2019 | All Rights Reserved.</p>
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
        <?= $this->Html->script('/master-template/js/jquery-1.11.0.min'); ?>  
		<!-- Bootstrap 3.1 -->
        <?= $this->Html->script('/master-template/js/bootstrap.min'); ?>  
		<!-- Slitslider -->
        <?= $this->Html->script('/master-template/js/jquery.slitslider'); ?>  
        <?= $this->Html->script('/master-template/js/jquery.ba-cond.min'); ?>  
		<!-- Parallax -->
        <?= $this->Html->script('/master-template/js/jquery.parallax-1.1.3'); ?>  
		<!-- Owl Carousel -->
        <?= $this->Html->script('/master-template/js/owl.carousel.min'); ?>  
		<!-- Portfolio Filtering -->
		<?= $this->Html->script('/master-template/js/jquery.mixitup.min'); ?>  
		<!-- Galery Lightbox -->
        <?= $this->Html->script('/master-template/js/lightbox/js/lightbox'); ?>  
		<!-- Custom Scrollbar -->
        <?= $this->Html->script('/master-template/js/jquery.nicescroll.min'); ?>  
		<!-- Jappear js -->
        <?= $this->Html->script('/master-template/js/jquery.appear'); ?>  
		<!-- Pie Chart -->
		<!-- jQuery Easing -->
        <?= $this->Html->script('/master-template/js/jquery.easing-1.3.pack'); ?>  
		<!-- tweetie.min -->
        <?= $this->Html->script('/master-template/js/tweetie.min'); ?>  
		<!-- Google Map API -->
        <?= $this->Html->script('http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyBsi3wHXtNGejtrJGFvqh-QfNOa9fv1aIc'); ?>  
		<!-- Highlight menu item -->
        <?= $this->Html->script('/master-template/js/jquery.nav'); ?>  
		<!-- Sticky Nav -->
        <?= $this->Html->script('/master-template/js/jquery.sticky'); ?>  
		<!-- Number Counter Script -->
        <?= $this->Html->script('/master-template/js/jquery.countTo'); ?>  
		<!-- wow.min Script -->
        <?= $this->Html->script('/master-template/js/wow.min'); ?>  
		<!-- For video responsive -->
        <?= $this->Html->script('/master-template/js/jquery.fitvids'); ?>  
		<!-- Grid js -->
        <?= $this->Html->script('/master-template/js/grid'); ?>  
		<!-- Custom js -->
		<?= $this->Html->script('/master-template/js/custom'); ?>
		

		<script>
			lightbox.option({
			'disableScrolling': true,
			})
		</script>
    </body>
</html>