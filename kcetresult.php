<!DOCTYPE HTML>
<html>
	<head>
		<title>K-CET College Predictor</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<?php session_start();?>
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
										<h1>K-CET College Predictor</h1>
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
															<tbody>
																<?php
																require 'database connection/dbcon.php';
																if(isset($_SESSION['rank']))
																{
																	$rank=$_SESSION['rank'];
																	$branch = $_SESSION['branch'];
																	$category = $_SESSION['category'];
																	session_destroy();
																}
																$query=$conn->query("SELECT * FROM kcet k WHERE  k.$branch >= $rank AND k.Seat_Category = '$category' ORDER BY k.$branch ASC ");
																while ($row=$query->fetch_array())
																{?>

																
																<tr>
																	<td><?php echo $row['College_Code'];?></td>
																	<td><?php echo $row['College_Name'];?></td>
																	<td> <?php echo str_replace("_"," ",$branch)?></td>
																	<td><?php echo $row[$branch];?></td>
																</tr>
																<?php }?>
																
															</tbody>
															<tfoot>
																<tr>
																	<td colspan="2"></td>																</tr>
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
