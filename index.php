<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>The Book Lounge </title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/slide.css">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>The Book Lounge</h1>

	<div class="container" style="height: 600px;">
			<a href="adminlogin.php"><img src="images/admin.jpg" style="vertical-align: text-bottom;" height="20px" alt=""></a>
            <a href="adminlogin.php" style="padding-right: 30px;"><span style="color: white">Admin Login</span></a>

            <a href="userlogin.php"><img src="images/user.png" height="20px" style="vertical-align: text-bottom;" alt=""></a>
            <a href="userlogin.php" style="padding-right: 30px;"><span style="color: white">Login</span></a>

            <a href="register.php"><img src="images/register.jpg" height="20px" style="vertical-align: text-bottom;" alt=""></a>
            <a href="register.php"><span style="color: white">Register</span></a>

			<br><br><br><br>
			<div style="align-items: center;">
				<h2 style="color: white;"><center><strong>About Us</strong></center></h2>
				<p style="color: white">A library management system is software that is designed to manage all the functions of a library. It helps librarian to maintain the database of new books and the books that are borrowed by members along with their due dates. This system completely automates all your library's activities.</p>
			</div>
			<div class="slideshow-container">
			<br><br>
			<!-- Full-width images with number and caption text -->
			<div class="mySlides fade">
				<img src="images/books/book1.jpg" style="width:20%">
			</div>

			<div class="mySlides fade">
				<img src="images/books/book2.jpg" style="width:20%">
			</div>

			<div class="mySlides fade">
				<img src="images/books/book3.jpg" style="width:20%">
			</div>

			<!-- Next and previous buttons -->
			<!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a> -->
			</div>
			<br>

			<!-- The dots/circles -->
			<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			</div>
			
					
	</div>
	
	<div class="footer w3layouts agileits">
		<p> &copy; 2022 The Book Lounge. All Rights Reserved </a></p>
		
	</div>

	<script src="auto.js"></script>
</body>
<!-- //Body -->

</html>
