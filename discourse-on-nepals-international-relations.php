<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	
	<link href="../../css.css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="css/dark.css" type="text/css">
	<link rel="stylesheet" href="css/font-icons.css" type="text/css">
	<link rel="stylesheet" href="css/animate.css" type="text/css">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" href="css/custom.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Youth Congress Nepal | Young Democrats, Together for Nepal</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header Start -->
		<?php include 'header-2.php';?>
		<!-- Header End-->

		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-pattern">

			<div class="container clearfix">
				<h1 style="color:white;">Discourse on Nepal's International Relations</h1>
			</div>

		</section>

		<div class="section" style="margin: 0px;">
					<div class="container">

						<div class="heading-block center">
							<h4>
							Discourse on Nepal’s International Relations is a series through which Youth Congress Nepal intends to inform Nepali youth with various dimensions of international relations in context of Nepal. We invite experts on international relations for talk series and knowledge sessions through which we conduct this series.
							</h4>
							
						</div>

						<div class="row col-mb-50">
							
							

							
						</div>

					</div>
				</div>


		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="position-relative">

						<div class="timeline-border"></div>

						<!-- Posts
						============================================= -->
						<div id="posts" class="post-grid grid-container row post-timeline col-mb-50" data-basewidth=".entry:not(.entry-date-section):eq(0)">

							<div class="entry entry-date-section col-12 mb-3"><span>2020</span></div>

							<div class="entry col-lg-6 col-12">
								<div class="entry-timeline">
									<div class="timeline-divider"></div>
								</div>
								<div class="grid-inner">
									
								<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FYouthCongressNepal%2Fvideos%2F316261896315901%2F&show_text=0&width=560" width="560" height="270" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
									<div class="entry-title">
										<h2>The Reemergence of the territorial disputes and war of Map in South Asia</h2>
									</div>
									<div class="entry-meta">
										<ul>
											<li><i class="icon-calendar3"></i> 5 September 2020</li>
											<li><i class="icon-microphone"></i> Geja Sharma Wagle</li>
											
										</ul>
									</div>
									<div class="entry-content">
										<p>Youth Congress Nepal organized a discussion program  on the topic  "The Reemergence of the territorial disputes and war of Map in South Asia" with Security, Strategic and International Affairs with Expert Mr. Geja Sharma Wagle on 5th September 2020. We will continue with this program understanding the dire need of knowledge on international relations. </p>
									</div>
								</div>
							</div>

							

						

							
							


						</div><!-- #posts end -->

					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<?php include 'footer.php';?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="js/plugins.infinitescroll.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>

		jQuery(window).on( 'load', function(){

			let $container = $('#posts');

			function blogTimelineEntries() {
				$('.post-timeline').find('.entry:not(.entry-date-section)').each( function(){
					let position = $(this).position();
					if( position.left === 0 ) {
						$(this).removeClass('alt');
					} else {
						$(this).addClass('alt');
					}
					$(this).find('.entry-timeline').fadeIn();
				});

				$('.entry.entry-date-section').next().next().find('.entry-timeline').css({ 'top': '70px' });
			}

			$container.on( 'layoutComplete', function() {
				blogTimelineEntries();
			});

			$(window).resize(function() {
				$container.isotope('layout');
				setTimeout( function(){
					blogTimelineEntries();
				}, 2500 );
			});

		});

	</script>

</body>
</html>