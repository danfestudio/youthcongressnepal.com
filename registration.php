<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="author" content="SemiColonWeb">

	<!-- Stylesheets
	============================================= -->
	<link href="../../css.css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="css/dark.css" type="text/css">
	<link rel="stylesheet" href="css/font-icons.css" type="text/css">
	<link rel="stylesheet" href="css/animate.css" type="text/css">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="css/components/datepicker.css" type="text/css">

	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="css/components/bs-filestyle.css" type="text/css">

	<link rel="stylesheet" href="css/custom.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/custom.css" type="text/css">

	<!-- Document Title
	============================================= -->
	<title>Jobs - Forms | Canvas</title>

	<script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "P1" :
            document.getElementById("status").options[0]=new Option("Select status","");
			document.getElementById("status").options[1]=new Option("Bhojpur District");
			document.getElementById("status").options[2]=new Option("Dhankuta District");
			document.getElementById("status").options[3]=new Option("Ilam District");
			document.getElementById("status").options[4]=new Option("Jhapa District");
			document.getElementById("status").options[5]=new Option("Khotang District");
			document.getElementById("status").options[6]=new Option("Morang District");
			document.getElementById("status").options[7]=new Option("Okhaldhunga District");
			document.getElementById("status").options[8]=new Option("Panchthar District");
			document.getElementById("status").options[9]=new Option("Sankhuwasabha District");
			document.getElementById("status").options[10]=new Option("Solukhumbu District");
			document.getElementById("status").options[11]=new Option("Sunsari District");
			document.getElementById("status").options[12]=new Option("Taplejung District");
			document.getElementById("status").options[13]=new Option("Terhathum District");
			document.getElementById("status").options[14]=new Option("Udayapur District");
            break;
        case "P2" :
            document.getElementById("status").options[0]=new Option("Select status","");
            document.getElementById("status").options[1]=new Option("Taplejung-2");
            document.getElementById("status").options[2]=new Option("Jhapa-2");
            
            break;
        }
        return true;
    }
    </script>

<style>
.file-caption.icon-visible .file-caption-name {
	font-family: 'Lato', sans-serif;
	color: #666;
}
</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header Start -->
		<?php include 'header.php';?>
		<!-- Header End-->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Youth Congress Nepal Membership Form</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Registration</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="form-widget">

						<div class="form-result"></div>

						<div class="row">
							<div class="col-lg-12">
								<form class="row" action="include/form.php" method="post" enctype="multipart/form-data">
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="col-12 form-group">
										<div class="row">

											<div class="col-md-4 form-group">
												<label>First Name:</label>
												<input type="text" name="jobs-application-phone" id="jobs-application-phone" class="form-control required" value="" placeholder="Enter your First Name">
											</div>

											<div class="col-md-4 form-group">
												<label>Last Name:</label>
												<input type="text" name="jobs-application-location" id="jobs-application-location" class="form-control" value="" placeholder="Enter your Last Name">
											</div>

											<div class="col-8 form-group">
												<label>Email:</label>
												<input type="email" name="jobs-application-email" id="jobs-application-email" class="form-control required" value="" placeholder="Enter your Email">
											</div>

											<div class="col-6 form-group">
												<label>Contact Number</label>
												<input type="email" name="jobs-application-email" id="jobs-application-email" class="form-control required" value="" placeholder="Enter your contact Number">
											</div>

											<div class="col-md-8 form-group">
												<label>Gender:</label>
												<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-male" autocomplete="off" value="Male"> Male
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> Female
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> Non Binary
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> Prefer not to say
													</label>

												
												</div>
												<!-- <select class="form-control" name="jobs-application-gender" id="jobs-application-gender">
													<option value="">-- Select One --</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select> -->
											</div>

											<div class="col-md-12 form-group">
												<label>Blood Group</label>
												<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-male" autocomplete="off" value="Male"> O-ve
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> O+ve
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> A-ve
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> A+ve
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-male" autocomplete="off" value="Male"> B-ve
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> B+ve
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> AB-ve
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> AB+ve
													</label>
													<label class="btn btn-outline-secondary ls0 nott">
														<input type="radio" name="jobs-application-gender" id="jobs-application-gender-female" autocomplete="off" value="Female"> Prefer not to say
													</label>

												
												</div>
												<!-- <select class="form-control" name="jobs-application-gender" id="jobs-application-gender">
													<option value="">-- Select One --</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select> -->
											</div>

											<div class="col-md-3 form-group" id="category_div">
												<label></label>
												<select class="form-control required" name="source" id="source" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
													<option value="">Select your Province</option>
													<option value="P1">Province 1</option>
													<option value="P2">Province 2</option>
													<option value="P3">Province 3</option>
													<option value="P4">Province 4</option>
													<option value="P5">Province 5</option>
													<option value="P6">Province 6</option>
													<option value="P7">Province 7</option>
												</select>
											</div>
											<div class="col-md-3 form-group">
												<label></label>

												<script type="text/javascript" language="JavaScript">
       											 document.write('<select name="status" id="status" class="form-control required"><option value="">Select your District</option></select>')
												</script>
		
												
											</div>

											<div class="col-4 form-group">
												<label></label>
												<input type="email" name="jobs-application-email" id="jobs-application-email" class="form-control required" value="" placeholder="Enter your Municipality / Sub-Municipality">
											</div>

											<div class="col-2 form-group">
												<label></label>
												<input type="email" name="jobs-application-email" id="jobs-application-email" class="form-control required" value="" placeholder="Ward Number">
											</div>

											<div class="col-8 form-group">
												<label>Upload your Citizenship or Voter ID:</label>
												<input type="file" id="jobs-application-resume" name="jobs-application-resume" class="file-loading required" data-show-preview="false">
											</div>
					
											
											
											
											
											
										</div>
										
									</div>

								
									<div class="col-12">
										<button type="submit" name="jobs-application-submit" class="btn btn-secondary">Submit your Application</button>
									</div>

									<input type="hidden" name="prefix" value="jobs-application-">
								</form>
							</div>

							

						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget clearfix">

										<img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">

										<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

										<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												795 Folsom Ave, Suite 600<br>
												San Francisco, CA 94107<br>
											</address>
											<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
											<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
										</div>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget widget_links clearfix">

										<h4>Blogroll</h4>

										<ul>
											<li><a href="../../index.htm">Documentation</a></li>
											<li><a href="../../support/forum/requests-and-feedback/index.htm">Feedback</a></li>
											<li><a href="../../plugins/index.htm">Plugins</a></li>
											<li><a href="../../support/index.htm">Support Forums</a></li>
											<li><a href="../../themes/index.htm">Themes</a></li>
											<li><a href="../../news/index.htm">Canvas Blog</a></li>
											<li><a href="../../index-1.htm">Canvas Planet</a></li>
										</ul>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget clearfix">
										<h4>Recent Posts</h4>

										<div class="posts-sm row col-mb-30" id="post-list-footer">
											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-4 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-lg-6 bottommargin-sm">
												<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
												<h5 class="mb-0">Total Downloads</h5>
											</div>

											<div class="col-lg-6 bottommargin-sm">
												<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
												<h5 class="mb-0">Clients</h5>
											</div>
										</div>

									</div>
								</div>

								<div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget clearfix">
										<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
										<div class="widget-subscribe-form-result"></div>
										<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
											<div class="input-group mx-auto">
												<div class="input-group-prepend">
													<div class="input-group-text"><i class="icon-email2"></i></div>
												</div>
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
												<div class="input-group-append">
													<button class="btn btn-success" type="submit">Subscribe</button>
												</div>
											</div>
										</form>
									</div>
								</div>

								<div class="col-md-3 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
												<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
											</div>
											<div class="col-6 col-md-12 col-lg-6 clearfix">
												<a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
													<i class="icon-rss"></i>
													<i class="icon-rss"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-left">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-right">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>

							<div class="clear"></div>

							<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- DatePicker JS -->
	<script src="js/components/datepicker.js"></script>

	<!-- Bootstrap File Upload Plugin -->
	<script src="js/components/bs-filestyle.js"></script>

	<!-- TinyMCE Plugin -->
	<script src="js/components/tinymce/tinymce.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<script>
		jQuery(document).ready( function(){
			$('.dobpicker').datepicker({
				autoclose: true,
			});

			$("#jobs-application-resume").fileinput({
				required: true,
				browseClass: "btn btn-secondary",
				browseIcon: "",
				removeClass: "btn btn-danger",
				removeLabel: "",
				removeIcon: "<i class='icon-trash-alt1'></i>",
				showUpload: false
			});

			tinymce.init({
				selector: '#jobs-application-message',
				menubar: false,
				setup: function(editor) {
					editor.on('change', function(e) {
						editor.save();
					});
				}
			});
		})
	</script>

</body>
</html>