<?php
session_start();

$_SESSION["isLoggedIn"] = 0;

//significant work must be done to change to a multi-user database
$username = "FunctionalMonitor";
$password = "cmsfm2016";	

if ( ($_POST['username'] == '') || ($_POST['password'] == ''))
	{ echo "Please enter a username and password.";
	$_SESSION["isLoggedIn"] = 0;
	include 'index.php';
	}
	elseif (($_POST['username'] == $username) && ($_POST['password'] == $password)) 
		{ echo "Logged In.";
		$_SESSION["isLoggedIn"] = 1;  //SET LOGIN SESSION VARIABLE
		header( 'Location: result.php' );
		}
	else
		{ echo "Incorrect username or password.";
		$_SESSION["isLoggedIn"] = 0;
		include 'index.php';
		}

?>
