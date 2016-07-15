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

	$patdceid = (isset($_POST["patientDCEID"])) ? $_POST["patientDCEID"] : "";
	$patestrange = (isset($_POST["patientEstimoteRange"])) ? $_POST["patientEstimoteRange"] : "";


if (($patdceid != "") && ($patestrange != "")){
	// Database Connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Connection check
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		else {
			$sql = "INSERT INTO patient (ID, DCE_ID, Estimote_Range) VALUES (null, $patdceid, $patestrange)";
			//echo $sql;
			//die();
			if ($conn->query($sql) === TRUE) {
		   		echo nl2br ("New record created successfully \n DCE ID: $patdceid   Estimote Range: $patestrange");
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
