<?php
include 'session.php'
?>
<!DOCTYPE html>
<html>

<!---Buttons-->
<div id="my_buttons"><a href="index.php">Log Out</a></div>
<div id="my_buttons"><a href="result.php">Search Database</a></div> 
<div id="my_buttons"><a href="add.php">Add more Data</a></div></p>

<?php

//DATABASE CREDENTIALS
$servername = "localhost";
$username = "root";
$password = ""; 

// database
$dbname = "cmsfm";

	$littitle = (isset($_POST["litTitle"])) ? $_POST["litTitle"] : "";
	$litauthor = (isset($_POST["litAuthor"])) ? $_POST["litAuthor"] : "";	
	$litpubyear = (isset($_POST["litPublicationYear"])) ? $_POST["litPublicationYear"] : "";	
	$litlink = (isset($_POST["litLink"])) ? $_POST["litLink"] : "";


if (($littitle != "") && ($litauthor != "") && ($litpubyear != "") && ($litlink != "")){
	// Database Connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Connection check
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		else
			$sql = "INSERT INTO literature (ID, Title, Author, Publication_Year, Link) VALUES (null, '$littitle', '$litauthor', '$litpubyear', '$litlink')";
			if ($conn->query($sql) === TRUE) {
		   		echo nl2br ("New record created successfully \n Title: $littitle   Author: $litauthor   Publication Year: $litpubyear   Link: $litlink");
		
			} 
				else {
    				echo "Error: " . $sql . "<br>" . $conn->error;
				}
	}
	else {
		echo "Please check that you have entries in each text box.";
		Include "add.php";
		}
?>

</html>
