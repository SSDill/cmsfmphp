<?php
include 'session.php'
?>
<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<body>
<header>
   <img margin:auto src="C:\wamp64\www\cmsfmphp-master\CareEcosystemLogo_web_0.png"/>
</header>
<title>Add: Patient Database</title>
<ul>
  <li><a class="active" href="welcomePage.php">Home</a></li>
  <li><a href="misc2.php">Misc</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Search</a>
    <div class="dropdown-content">
      <a href="phoneSearch.php">Phone Database</a>
      <a href="watchSearch.php">Watch Database</a>
      <a href="patSearch.php">Patient Database</a>
      <a href="litSearch.php">Literature Database</a>
      <a href="docSearch.php">Documentation Database</a>
    </div>
  </li>
 <li class="dropdown">
    <a href="#" class="dropbtn">Add</a>
    <div class="dropdown-content">
      <a href="phoneAdd.php">Phone Database</a>
      <a href="watchAdd.php">Watch Database</a>
      <a href="patAdd.php">Patient Database</a>
      <a href="litAdd.php">Literature Database</a>
      <a href="docAdd.php">Documentation Database</a>
    </div>
  </li>
    <li><a href="index">Log Out</a></li>
</ul>
</style>
</head>




<?php

//DATABASE CREDENTIALS
$servername = "localhost";
$username = "root";
$password = ""; 

// database
$dbname = "cmsfm";

	$patdceid = (isset($_POST["patientDCEID"])) ? $_POST["patientDCEID"] : "";
	$patestrange = (isset($_POST["patientEstimoteRange"])) ? $_POST["patientEstimoteRange"] : "";
?>

<form method="post" action="addlit.php">
</p>
<form method="post" action="addpat.php">
<b>Insert data into Patients:</b></p>
DCE ID: <input name="patientDCEID" type="text" value="<?=$patdceid?>"/>
Estimote Range: <input name="patientEstimoteRange" type="text" value="<?=$patestrange?>"/></p>
Please check your entries before clicking 'Insert'. Changes to submitted data must be made by the system administrator.<br>
<input type="submit" value="Insert"/></p>
</form>
</p>
</form>


</html>
