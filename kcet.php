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
					<header id="header" class="alt style2">
						<a href="index.php" class="logo"><strong>Guide</strong> <span>to the future</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
							<li><a href="comedk.php">COMED-K</a></li>
							<li><a href="kcet.html">K-CET</a></li>
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>KCET College Predictor</h1>
							</header>
							<div class="content">
								<p>Karnataka Common Entrance Test</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h2>Details</h2>
									</header>
									<p>Enter KCET B.Tech Exam Details</p>
								</div>
							</section>

						
				<!-- Contact -->
				<section id="contact">
					<div class="inner">
						<section>
							<form method="post"  id="login" onsubmit="return funu()">
								<div class="fields">
									<div class="field half">
										<label for="name">Rank</label>
										<input type="text" name="rank" id="name1"  required placeholder="Required"/><br>
										<div class="err" id="error1"></div>
									
										<script>
											function funu() {
												const u = document.getElementById("name1").value;
												const form = document.getElementById("login_form");
												const a = /[0-9]/;
												const op = a.exec(u);
												if (op) {
													
													return true;
												}
												else{
													document.getElementById("error1").style.border="2px dotted darkred";
													document.getElementById("error1").style.padding="2px";
													document.getElementById("error1").innerHTML="Invalid Rank  ";
													return false; 	
												}
											}
										</script></div>
									<div class="field half">
									<label for="name">Branch</label>
										<div class="col-12">
											<select name="branch" id="demo-category" required>
												<option value="" disable>- Select -</option>
												<option value="Aero_nautical_Engineering">Aeronautical Engineering</option>
												<option value="Aerospace_Engineering">Aerospace Engineering</option>
												<option value="Artificial_Intelligence_Data_Science">AI Data science</option>
												<option value="Artificial_Intelligence_Machine_Learning">AI Machine learning</option>
												<option value="Automation_Robotics_Engineering">Automation Robotics Engineering</option>
												<option value="Automobile_Engineering">Automobile Engineering</option>
												<option value="Bio_Medical_Engineering">Biomedical Engineering</option>
												<option value="Bio_technology">Bio tech</option>
												<option value="Chemical_Engineering">Chemical Engineering</option>
												<option value="Civil_Engineering">Civil Engineering</option>
												<option value="Civil_Construction_Engineering_Management">Civil Construction  Engineering</option>
												<option value="Computer_Comm_unication_Engineering">Computer Communication Engineering</option>
												<option value="Computer_Engineering">Computer Science Engineering</option>
											</select>
										</div>
									</div>
									
									<div class="field half">
										<label for="name">Caste Group</label>
										<div class="col-12">
											<select name="category" id="demo-category" required>
												<option value="">- Select -</option>
												<option value="GM">General Merit</option>
												<option value="OBC">Other Backward Classes</option>
												<option value="SC">Scheduled Caste</option>
												<option value="ST">Scheduled Tribe</option>
											</select>
										</div>
									</div>
									<div class="field half">
										<label for="name">Do you belong to Hyd-Karnataka Border?</label>
										<div class="col-12">
											<select name="reserv" id="demo-category" required>
												<option value="">- Select -</option>
												<option value="YES">Yes</option>
												<option value="NO">No</option>
											</select>
										</div>
									</div>
								</div>
								<ul class="actions">
									<li><input type="submit" name="save" value="Predict College" class="primary" /></li>
									<li><input type="reset" value="Clear" /></li>
								</ul>
							</form>
							<?php
								
								
								if(isset($_POST['rank']))
								{
									$_SESSION['rank'] = $_POST['rank']; 
									$_SESSION['branch']=$_POST['branch'];
									$_SESSION['category']=$_POST['category'];
									// $_SESSION['reserv']=$_POST['reserv'];
									?>
									<script>window.location='kcetresult.php';</script>
									<?php

								}
								elseif(isset($_SESSION['rank'])){
									$_SESSION['rank']="";
									$_SESSION['branch']="";
									$_SESSION['category']="";
									echo "try again";

								}
								
							?>
						</section>
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
