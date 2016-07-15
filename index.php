<?php
session_start();
session_destroy();
$_SESSION = array();
?>
<!DOCTYPE html>
<html>
	<form action='search.php' method='POST'>
		Username: <input type='text' name='username'><br>
		Password: <input type='password' name='password'><br>
		<input type='submit' value='Login'><br>
	</form>
	

</html>
