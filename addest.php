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

	$estdceid = (isset($_POST["EstimoteDCEID"])) ? $_POST["EstimoteDCEID"] : "";	
	$estmacadd = (isset($_POST["EstimoteMACAddress"])) ? $_POST["EstimoteMACAddress"] : "";
	$estmajid = (isset($_POST["EstimoteMajorID"])) ? $_POST["EstimoteMajorID"] : "";
	$estminid = (isset($_POST["EstimoteMinorID"])) ? $_POST["EstimoteMinorID"] : "";


if (($estdceid != "") && ($estmacadd != "") && ($estmajid != "") && ($estminid != "")){
	// Database Connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Connection check
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		else
			$sql = "INSERT INTO Estimote (ID, DCE_ID, MAC_Address, Major_ID, Minor_ID) VALUES (null, '$estdceid', '$estmacadd', '$estmajid', '$estminid')";
			if ($conn->query($sql) === TRUE) {
		   		echo nl2br ("New record created successfully \n Title: $estdceid  Author: $estmacadd  Location: $estmajid  Link: $estminid");
		
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
