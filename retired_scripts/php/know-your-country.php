﻿<!DOCTYPE html>
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

		<!-- Header
		============================================= -->
		<?php include 'header-2.php';?>

		<!-- Page Title
		============================================= -->
		

		<section id="page-title" class="page-title-pattern">

			<div class="container clearfix">
				<h1 style="color:white;">Know your country</h1>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap-2">
				<div class="container clearfix">

					

				</div>

				

				<div class="container">

					

					<div class="section">
					<div class="container">

						<div class="heading-block center">
							<h2>Know your country</h2>
							<span>is a unique workshop where we provide the participants with the knnowledge about Nepal's</span>
						</div>

						<div class="row col-mb-50">
							

							<div class="col-md-3">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt" style="font-size:25px;padding:0px">1.</i></a>
									</div>
									<div class="fbox-content" style="padding:0px;">
										<h3>History</h3>
										
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt" style="font-size:25px;padding:0px">2.</i></a>
									</div>
									<div class="fbox-content" style="padding:0px;">
										<h3>Geography</h3>
										
									</div>
								</div>
							</div>

							<div class="col-md-4" style="padding-bottom:0px;">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt" style="font-size:25px;padding:0px">3.</i></a>
									</div>
									<div class="fbox-content" style="padding:0px;">
										<h3>Cultures</h3>
										
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt" style="font-size:25px;padding:0px">4.</i></a>
									</div>
									<div class="fbox-content" style="padding:0px;">
										<h3>Economy</h3>
										
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt" style="font-size:25px;padding:0px">5.</i></a>
									</div>
									<div class="fbox-content" style="padding:0px;">
										<h3>Constitution</h3>
										
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt" style="font-size:25px;padding:0px">6.</i></a>
									</div>
									<div class="fbox-content" style="padding:0px;">
										<h3>and our shared aspirations</h3>
										
									</div>
								</div>
							</div>

							

							
						
						
						</div>
						</div>

						<div class="heading-block center">
							
							<span>The first cohort of this course will soon be announced.</span>
						</div>

					</div>
				</div>

					

				</div>
				
				<!-- Page Title
		
				<a href="#" class="button button-full center text-right topmargin-lg footer-stick">
					<div class="container clearfix">
						Need help with your Account? <strong>Start here</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>

				 -->

			</div>
		</section><!-- #content end -->

		<?php include 'footer.php';?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<!-- Charts JS
	============================================= -->
	<script src="js/chart.js"></script>
	<script src="js/chart-utils.js"></script>

	<script>

		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
					],
					backgroundColor: [
						window.chartColors.red,
						window.chartColors.orange,
						window.chartColors.yellow,
						window.chartColors.green,
						window.chartColors.blue,
					],
					label: 'Dataset 1'
				}],
				labels: [
					"Red",
					"Orange",
					"Yellow",
					"Green",
					"Blue"
				]
			},
			options: {
				responsive: true,
				legend: {
					display: false,
					position: 'top',
				},
				title: {
					display: false,
					text: 'Doughnut Chart'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		};


		// Radar Chart

		var color = Chart.helpers.color;
		var configRadar = {
			type: 'radar',
			data: {
				labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
				datasets: [{
					label: "My First dataset",
					backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
					borderColor: window.chartColors.red,
					pointBackgroundColor: window.chartColors.red,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					]
				}, {
					label: "My Second dataset",
					backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
					borderColor: window.chartColors.blue,
					pointBackgroundColor: window.chartColors.blue,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					]
				},]
			},
			options: {
				legend: {
					display: false
				},
				title: {
					display: false
				},
				scale: {
				  ticks: {
					beginAtZero: true
				  }
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById("chart-doughnut").getContext("2d");
			window.myDoughnut = new Chart(ctx, config);
			window.myRadar = new Chart(document.getElementById("chart-radar"), configRadar);
		};

	</script>

</body>
</html>