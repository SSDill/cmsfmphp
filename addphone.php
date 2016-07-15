<?php
include 'session.php'
?>
<!DOCTYPE html>
<html>

<!---Buttons-->
<div id="my_buttons"><a href="index.php">Log Out</a></div>
<div id="my_buttons"><a href="result.php">Search Database</a></div> 
<div id="my_buttons"><a href="add.php">Add More Data</a></div></p>

<?php

//DATABASE CREDENTIALS
$servername = "localhost";
$username = "root";
$password = ""; 

// database
$dbname = "cmsfm";

	$phonedceid = (isset($_POST["phoneDCEID"])) ? $_POST["phoneDCEID"] : "";	
	$phonenumber = (isset($_POST["phonePhoneNumber"])) ? $_POST["phonePhoneNumber"] : "";	
	$phoneimeID = (isset($_POST["phoneIMEIDNumber"])) ? $_POST["phoneIMEIDNumber"] : "";	
	$phonegoogleacct = (isset($_POST["phoneGoogleAccount"])) ? $_POST["phoneGoogleAccount"] : "";	
	$phonegooglepass = (isset($_POST["phoneGooglePassword"])) ? $_POST["phoneGooglePassword"] : "";	
	$phoneSD = (isset($_POST["phoneSD"])) ? $_POST["phoneSD"] : "";


if (($phonedceid != "") && ($phonenumber != "") && ($phoneimeID != "") && ($phonegoogleacct != "") && ($phonegooglepass != "") && ($phoneSD != "")){
	// Database Connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Connection check
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		else
			$sql = "INSERT INTO phone (ID, DCE_ID, Phone_Number, IME_ID_Number, Google_Account, Google_Password, SD_Card) VALUES (null, '$phonedceid', '$phonenumber', '$phoneimeID', '$phonegoogleacct', '$phonegooglepass', '$phoneSD')";
			if ($conn->query($sql) === TRUE) {
		   		echo nl2br ("New record created successfully \n DCE ID: $phonedceid  Phone Number: $phonenumber  IME ID Number: $phoneimeID  Google Account: $phonegoogleacct  Google Password: $phonegooglepass  SD?: $phoneSD");
		
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

