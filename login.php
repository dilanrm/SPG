<?php session_start(); ?>

<html>

	<head>

		<!-- Bootstrap CSS -->

		<link rel="stylesheet" 

			href="assets/bootstrap-4.0.0/css/bootstrap.min.css">

		<!-- jQuery JS -->

		<script src="assets/jquery-3.2.1.slim.min.js"></script>

		<!-- Popper JS -->

		<script src="assets/popper.min.js"></script>

		<!-- Bootstrap JS -->

		<script src="assets/bootstrap-4.0.0/js/bootstrap.min.js"></script>

		<title>L O G I N</title>



	</head>

<body background="bg1.jpg">

	<div class="jumbotron" style="background-image:url('assets/bg3.jpg');background-repeat: no-repeat;;">

		<h1 class="display-3" style="margin:100px 0 10px 50px">S P G</h1>



<br><br><br>

<form action="spg.php?m=welcome" method="post" >

	<div class="form-group">

		<table>

			<tr>

				<td><label style="color:white;">Username </label></td>

				<td><input  class="form-control" type='text' name='un' placeholder='Username' required></td>

			</tr>

			<tr>

				<td><label style="color:white;">Password </label></td>

				<td><input  class="form-control" type='password' name='pass' placeholder='Password' required></td>

			</tr>

			<tr>

				<td><input type="reset" value="Reset" class="btn btn-primary btn-block"></td>

				<td><input type="submit" value="Login" class="btn btn-primary btn-block"></td>

			</tr>

		</table>

	</div>

</form>



<?php include 'footer.php'; ?>