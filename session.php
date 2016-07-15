<?php
session_start();
//CHECK LOGGED IN SESSION VARIABLE TO SEE IF THE PERSON IS LOGGED IN
//CHECK IF SET, CHECK IF EMPTY, CHECK IF NOT EQUAL TO '1'
if(!isset($_SESSION['isLoggedIn']) || empty($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != 1) 
{
	//SEND TO LOGIN SCREEN.
	header( 'Location: index.php' ) ;
}

?>