<!DOCTYPE HTML>
<html>
	<head>
		<title>COMED-K College Predictor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<?php
			session_start(); 
		?>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo"><strong>Guide</strong> <span>to the future</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>COMED-K College Predictor</h1>
									</header>
													<h3>Best Colleges available for you</h3>

													<br>
													<div class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>College Code</th>
																	<th>College Name</th>
																	<th>Branch/Course</th>
																	<th>Cut-off</th>
																</tr>
															</thead>
															<?php 
																require 'database connection/dbcon.php';
																if(isset($_SESSION['rank1']))
																{
																	$rank=$_SESSION['rank1'];
																	$branch = $_SESSION['branch1'];
																	$category = $_SESSION['category1'];
																	session_destroy();
																	// echo $rank;
																	// echo $branch;
																	// echo $category;
																}
																$query=$conn->query("SELECT c.College_Code,c.College_Name,c.$branch FROM comedk c WHERE c.$branch >= $rank AND c.Seat_Category = '$category' ORDER BY c.$branch ASC");
																while($row=$query->fetch_array())
																{
															?>
															<tbody>
																<tr>
																	<td><?php echo $row['College_Code'];?></td>
																	<td><?php echo $row['College_Name'];?></td>
																	<td><?php echo str_replace("_"," ",$branch)?></td>
																	<td><?php echo $row[$branch];?></</td>
																</tr>
															</tbody>
																<?php
																 }
																?>
															<tfoot>
																<tr>
																	<td colspan="2"></td>
																</tr>
															</tfoot>
														</table>
													</div>
                                </div>
													
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
