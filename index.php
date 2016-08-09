<?php
session_start();
session_destroy();
$_SESSION = array();
?>
<!DOCTYPE html>
<html>
<p>
<p>
<p>
	<style type ="text/css">
	.container{
		width: 500px;
		clear:both;
	}
	.container input{
		width: 100%
		clear: both;
	}

	.boxed {
		border: 1px solid black;
		width: 250px;
		height: 100px;
		box-sizing: border-box;
	}
	</style>

	<div class="boxed">
	<div class="container">
	<form action='login.php' method='POST'>
	<p>
		<label>Username</label>
		<input type='text' name='username'><br>
		<label>Password</label>
		<input type='password' name='password'><br>
		<input align:"center" type='submit' value='Login'><br>
	</div>
	</div>
	</form>
	

</html>
