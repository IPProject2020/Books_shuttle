<?php 
include "sellbook.php";

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="header" id="topheader">
	
	<nav class="navbar navbar-expand-lg fixed-top">
	<div class="container text-uppercase">	
  <a class="navbar-brand font-weight-bold text-white" href="#">Book Shuttle</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Hello , </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout &nbsp;<i class="fa fa-sign-out" aria-hidden="true"></i></a>
      </li>
    </ul>
  </div>
</div>
</nav>

<section class="header-section">
	<div class="center-div">
		<h2 class="font-weight-bold">World's Largest Book Store</h2>
		<p>Second Hand Buying And Selling of Used Book</p>
		<div class="container">
		<div class="header-button">

			<button class="btn1" data-target="#mymodel" data-toggle="modal">Buy Books</button>
			<button class="btn2" data-target="#Sellbooksmodal" data-toggle="modal">Sell Books</button>
			<!-- <a href="Login.html">Login</a> -->
			<!-- <a href="signup.html">Sign Up</a> -->
		</div>
	</div>
	</div>
	
</section>

</div>
<script src="Javascript/sellbook.js"></script>

</body>
</html>