<?php if(config('frontend.custom_url.status') == 'on'): ?>
    <script type="text/javascript">
		window.location.href = "<?php echo e(config('frontend.custom_url.link')); ?>"
	</script>
<?php else: ?>

<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
	<head>
		<!-- Meta data -->
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="<?php echo e($information['author']); ?>">
	    <meta name="keywords" content="<?php echo e($information['keywords']); ?>">
	    <meta name="description" content="<?php echo e($information['description']); ?>">
		
        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Title -->
        <title><?php echo e($information['title']); ?></title>

        <!--CSS Files -->
        <link href="<?php echo e(URL::asset('plugins/slick/slick.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(URL::asset('plugins/slick/slick-theme.css')); ?>" rel="stylesheet">

		<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!--Custom User CSS File -->
		<link href="<?php echo e(URL::asset($information['css'])); ?>" rel="stylesheet">

		<!--Google AdSense-->
		<?php echo adsense_header(); ?>


	</head>

	<body class="app sidebar-mini frontend-body <?php echo e(Request::path() != '/' ? 'blue-background' : ''); ?>">

		<?php if(config('frontend.maintenance') == 'on'): ?>
			
			<div class="container h-100vh">
				<div class="row text-center h-100vh align-items-center">
					<div class="col-md-12">
						<img src="<?php echo e(URL::asset('img/files/maintenance.png')); ?>" alt="Maintenance Image">
						<h2 class="mt-4 font-weight-bold"><?php echo e(__('We are just tuning up a few things')); ?>.</h2>
						<h5><?php echo e(__('We apologize for the inconvenience but')); ?> <span class="font-weight-bold text-info"><?php echo e(config('app.name')); ?></span> <?php echo e(__('is currently undergoing planned maintenance')); ?>.</h5>
					</div>
				</div>
			</div>
		<?php else: ?>

			<!-- Page -->
			<?php if(config('frontend.frontend_page') == 'on'): ?>
						
				<div class="page">
					<div class="page-main">

						<section id="main-wrapper">
					
							<div class="relative flex items-top justify-center min-h-screen">
				
								<div class="container-fluid fixed-top" id="navbar-container">
									
									<?php echo $__env->yieldContent('menu'); ?>
				
									<?php echo $__env->make('layouts.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				
								</div>
				
							</div>  
						</section>

						<!-- App-Content -->			
						<div class="main-content">
							<div class="side-app frontend-background">

								<?php echo $__env->yieldContent('content'); ?>

							</div>                   
						</div>
					</div>
				
				</div><!-- End Page -->
			
				<!-- FOOTER SECTION
				========================================================-->
				<footer id="welcome-footer" >

					<div class="container-fluid" id="curve-container">
						<div class="curve-box">
							<div class="overflow-hidden">
								<svg class="curve" preserveAspectRatio="none" width="1440" height="86" viewBox="0 0 1440 86" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 85.662C240 29.1253 480 0.857 720 0.857C960 0.857 1200 29.1253 1440 85.662V0H0V85.662Z"></path>
								</svg>
							</div>
						</div>
					</div>

					<!-- FOOTER MAIN CONTENT -->
					<div id="footer" class="container text-center">

						<div class="row">
							<div class="col-sm-12 mb-6 mt-6">
								<h1><?php echo e(__('Save time. Get Started Now.')); ?></h1>
								<h3><?php echo e(__('Unleash the most advanced AI creator')); ?></h3>
								<h3><?php echo e(__('and boost your productivity')); ?></h3>
							</div>
						</div>
								
						<div class="row"> 
							<div class="col-sm-12">	
								<div>
									<img src="<?php echo e(URL::asset('img/brand/logo-white.png')); ?>" alt="Brand Logo">									
								</div>

								<div class="mb-7">
									<span class="notification fs-12 mr-2"><?php echo e(__('Try for free')); ?>.</span><span class="notification fs-12"><?php echo e(__('No credit card required')); ?></span>
								</div>
									
																							
							</div>							
						</div>

						<div class="row"> 
							<div class="col-sm-12 d-flex justify-content-center">	
								<div class="flex mr-6">
									<a class="footer-link" href="<?php echo e(route('privacy')); ?>" target="_blank"><?php echo e(__('Privacy Policy')); ?></a>
								</div>							
								<div class="flex mr-6">
									<a class="footer-link" href="<?php echo e(route('terms')); ?>" target="_blank"><?php echo e(__('Terms of Service')); ?></a>
								</div>								
								<div class="flex">
									<a class="footer-link" href="<?php echo e(route('privacy')); ?>" target="_blank"><?php echo e(__('Contact Us')); ?></a>
								</div>
								
							</div>
						</div>

					</div> <!-- END CONTAINER-->

					<!-- COPYRIGHT INFORMATION -->
					<div id="copyright" class="container pl-0 pr-0">	
						
						<div class="row no-gutters">
							<div class="col-lg-4 col-md-4 col-sm-12">
								<div class="dropdown header-locale" id="frontend-local">
									<a class="nav-link icon" data-bs-toggle="dropdown">
										<span class="fs-12"><?php echo e(Config::get('locale')[App::getLocale()]['display']); ?></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
										<div class="local-menu">
											<?php $__currentLoopData = Config::get('locale'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php if($lang != App::getLocale()): ?>
													<a href="<?php echo e(route('locale', $lang)); ?>" class="dropdown-item d-flex">
														<div class="text-info"><i class="flag flag-<?php echo e($language['flag']); ?> mr-3"></i></div>
														<div>
															<span class="font-weight-normal fs-12"><?php echo e($language['display']); ?></span>
														</div>
													</a>                                        
												<?php endif; ?>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center">
								<ul id="footer-icons" class="list-inline">
									<?php if(config('frontend.social_linkedin')): ?>
										<a href="<?php echo e(config('frontend.social_linkedin')); ?>" target="_blank"><li class="list-inline-item"><i class="footer-icon fa-brands fa-linkedin"></i></li></a>
									<?php endif; ?>
									<?php if(config('frontend.social_twitter')): ?>
										<a href="<?php echo e(config('frontend.social_twitter')); ?>" target="_blank"><li class="list-inline-item"><i class="footer-icon fa-brands fa-twitter"></i></li></a>
									<?php endif; ?>
									<?php if(config('frontend.social_instagram')): ?>
										<a href="<?php echo e(config('frontend.social_instagram')); ?>" target="_blank"><li class="list-inline-item"><i class="footer-icon fa-brands fa-instagram"></i></li></a>
									<?php endif; ?>
									<?php if(config('frontend.social_facebook')): ?>
										<a href="<?php echo e(config('frontend.social_facebook')); ?>" target="_blank"><li class="list-inline-item"><i class="footer-icon fa-brands fa-facebook"></i></li></a>
									<?php endif; ?>										
								</ul>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12">
								<p class="text-right" id="frontend-copyright">© <?php echo e(date("Y")); ?> <a href="<?php echo e(config('app.url')); ?>"><?php echo e(config('app.name')); ?></a>. <?php echo e(__('All rights reserved')); ?>.</p>
							</div>
						</div>
					

						<!-- SCROLL TO TOP -->
						<a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

					</div>
					
				</footer> <!-- END FOOTER -->  

				<?php echo $__env->make('cookie-consent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

			<?php endif; ?>
		
		<?php endif; ?>

		<?php echo $__env->make('layouts.footer-frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<!-- Custom User JS File -->
		<?php if($information['js']): ?>
			<script src="<?php echo e(URL::asset($information['js'])); ?>"></script>
		<?php endif; ?>
		
            
	</body>
</html>

<?php endif; ?><?php /**PATH /home/infiniteideas/public_html/resources/views/layouts/frontend.blade.php ENDPATH**/ ?>