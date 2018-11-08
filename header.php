<?php extract($_GET);?>

<!DOCTYPE html>

<html>

	<head>

		<!-- Bootstrap CSS -->

		<link rel="stylesheet" href="assets/bootstrap-4.0.0/css/bootstrap.min.css">	

		<!-- jQuery JS -->

		<script src="assets/jquery-3.2.1.slim.min.js"></script>

		<!-- Popper JS -->

		<script src="assets/popper.min.js"></script>

		<!-- Bootstrap JS -->

		<script src="assets/bootstrap-4.0.0/js/bootstrap.min.js"></script>
		
		 <link rel="icon" type="image/gif" href="ico.png" />
		<title>S P G</title>
	
	<style>
	* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
	</style>
	
	</head>

	<body style="background-color:lightblue;">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<div class="container">

				<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">

					<span class="navbar-toggler-icon"></span>

				</button>

				<div class="collapse navbar-collapse" id="menu">

					<ul class="nav nav-pills">
					<?php //if($m != 'log in'){
							if(isset($_SESSION['username'])){	?>
						<li class="nav-item">
							<a href="spg.php?" class="nav-link <?php if($m == null) echo ' active'; ?>">Beranda</a>
						</li>
						<li class="nav-item">
							<a href="spg.php?m=lihat data" class="nav-link<?php if(isset($m) && $m == 'lihat data') echo ' active'; ?>">Lihat Data</a>
						</li>
						<li class="nav-item">
							<a href="spg.php?m=tentang" class="nav-link<?php if(isset($m) && $m == 'tentang') echo ' active'; ?>">Tentang</a>
						</li>
					<?php } ?>
					</ul>
					<?php if(isset($_SESSION['username'])){	?>
					<ul class="navbar-nav" style="float:right;">
						<li class="dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><?php echo $_SESSION['username']; ?> </a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="spg.php?m=user">Info</a>
								<a class="dropdown-item" href="spg.php?m=logout">Logout</a>
							</div>
						</li>
					</ul>
					<?php } else if(!isset($_SESSION['username'])){
								if(isset($m) != 'log in'){ ?>
				<form class="form-inline" style="float:right;" action="spg.php?m=welcome" method="post">
					<input type="text" class="form-control mr-sm-2" placeholder="Username" name="username" required>
					<input type="password" class="form-control mr-sm-2" placeholder="Password" name="password" required>
					<input type="submit" class="btn btn-outline-primary mr-sm-2" value="Login">
				</form>
					<?php }} ?>
				</div>

			</div>

		</nav>

		<div class="container" style="min-height:100%;">

			<div class="jumbotron" style="background-image:url('assets/bg1.jpg')">

				<h1 class="display-3">S P G</h1>

				<p class="lead">Sistem Pendeteksi Gempa</p>

			</div>

			

			<h2 class="float-left"><?php if(isset($m)) echo ucwords($m); ?></h2>

