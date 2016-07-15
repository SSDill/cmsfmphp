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

	$watchdceid = (isset($_POST["watchDCEID"])) ? $_POST["watchDCEID"] : "";
	$watchmacadd = (isset($_POST["MACAddress"])) ? $_POST["MACAddress"] : "";	
	$watchdevname = (isset($_POST["DeviceName"])) ? $_POST["DeviceName"] : "";	
	$watchnumber = (isset($_POST["WANumber"])) ? $_POST["WANumber"] : "";


if (($watchdceid != "") && ($watchmacadd != "") && ($watchdevname != "") && ($watchnumber != "")){
	// Database Connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Connection check
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		else
			$sql = "INSERT INTO Watch (ID, DCE_ID, MAC_Address, Device_Name, WA_Number) VALUES (null, '$watchdceid', '$watchmacadd', '$watchdevname', '$watchnumber')";
			if ($conn->query($sql) === TRUE) {
		   		echo nl2br ("New record created successfully \n Title: $watchdceid Author: $watchmacadd Location: $watchdevname Link: $watchnumber");
		
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
