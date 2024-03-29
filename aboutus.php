<!DOCTYPE HTML>
<html>
	<head>
		<title>About Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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
							<li><a href="comedk.php">COMED-K</a></li>
							<li><a href="kcet.html">K-CET</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>CogniGuide</h1>
									</header>
									<span class="image main"><img src="images/pic12.jpeg" alt=""/></span>
									<p><ul><li>Know your college admission chances based on your Seat Type, Caste, etc. & exam result</li>
										<li>Get your Entrance Exam personalised report with Top Predicted Govt. & Private Self-Financed Colleges displayed according to your rank</li></p>
									<p>We at <b>CogniGuide</b> help students to get into their dream colleges, the best colleges available for them based upon their ranks in respective entrance examinations.</p>
									<p>We have recommendations based on latest cutoffs. So that you get the genuine results.</p>
									<p><b>We bridge the gap between students and the best available college for them</b></p>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="mailto:pbs.dsce2001@gmail.com" onsubmit="checker()">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" placeholder="*required*"/>
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="email" name="email" id="email" placeholder="xyz@abc.com"/>
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
						</div>
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
			<script type="text/javascript">
				function checker()
				{
					var n1=document.getElementById('name');
					var em=document.getElementById('email');
					const ntype= /^[a-z]*$/;
					var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
					if(n1.value.length==0)
					{
						alert("the name cannot be empty");
						n1.focus();
					}
					if(!ntype.test(n1.value))
					{
						alert("name cant contain numbers or special characters");
						n1.focus();
						return false;
					}
					if(em.value.legend==0)
					{
						alert("email cannot be empty");
						return false;
					}
					if(!em.value.match(mailformat))
					{
						alert("you have entered the wrong email address");
						em.focus();
						return false;
					}

					else
					{
						return true;
					}

				}
			</script>

	</body>
</html>
