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

	$doctitle = (isset($_POST["docTitle"])) ? $_POST["docTitle"] : "";
	$docauthor = (isset($_POST["docAuthor"])) ? $_POST["docAuthor"] : "";
	$docloc = (isset($_POST["docLocation"])) ? $_POST["docLocation"] : "";	
	$doclink = (isset($_POST["docLink"])) ? $_POST["docLink"] : "";


if (($doctitle != "") && ($docauthor != "") && ($docloc != "") && ($doclink != "")){
	// Database Connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Connection check
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		else {
			$sql = "INSERT INTO Document (ID, Title, Author, Location, Link) VALUES (null, '$doctitle', '$docauthor', '$docloc', '$doclink')";
			if ($conn->query($sql) === TRUE) {
		   		echo nl2br ("New record created successfully \n Title: $doctitle  Author: $docauthor  Location: $docloc  Link: $doclink");
		
			} 
				else {
    				echo "Error: " . $sql . "<br>" . $conn->error;
				}
		}
	}
	else {
		echo "Please check that you have entries in each text box.";
		Include "add.php";
		}
?>

</html>
