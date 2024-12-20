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
				<h1 style="color:white;">The Basics of Politics</h1>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					

				</div>

				

				<div class="container">

					<div class="row align-items-center col-mb-50">
						<div class="col-md-5">
							<img src="images/ycn/bop.jpg">
						</div>

						<div class="col-md-7 text-center text-md-left">
							<p>The need of the young generation in the politics of Nepal has increased in these testing times. With the mission " Politically literate youths, together for Nepal" we have initiated seven days workshop called, "The Basics of Politics." This course aims to increase politically aware youths and is designed to provide learning, networking, and leading spaces for youths.</p>

							<p>Youth Congress Nepal is a movement of Young Nepali patriots and democrats working to build a prosperous democratic nation and the first step to do that is educating youths about politics and making them responsible citizens. The broader vision of this project is to escalate the interest of youths in politics and the emergence of them as proficient youth leaders of tomorrow. The modules of the course will be taken by prominent individuals such as political leaders, professors, social activists, and political analysts.</p>

							
						</div>
					</div>

					<div class="section">
					<div class="container">

						<div class="heading-block center">
							<h2>Course Details</h2>
							<span>Modules of our Course</span>
						</div>

						<div class="row col-mb-50">
							

							<div class="col-md-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt">1.</i></a>
									</div>
									<div class="fbox-content">
										<h3>Introduction to politics and political ideologies</h3>
										<p></p>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt">2.</i></a>
									</div>
									<div class="fbox-content">
										<h3>Political Compassing</h3>
										
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt">3.</i></a>
									</div>
									<div class="fbox-content">
										<h3>Modern political history of Nepal</h3>
										
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt">4.</i></a>
									</div>
									<div class="fbox-content">
										<h3>Separation of powers and Federalism in Nepal</h3>
										
									</div>
								</div>
							</div>

							<div class="col-md-8">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="i-alt">5.</i></a>
									</div>
									<div class="fbox-content">
										<h3>The idea of Inclusion (minorities and marginalized movements in Nepal)</h3>
										
									</div>
								</div>
							</div>
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