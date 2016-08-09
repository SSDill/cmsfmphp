<?php
include 'session.php';
?>
</style>
<!DOCTYPE html>
<html>

	
	<head>
	<style type="text/css">
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

		<title>CareEcosystem</title>
		<header>
		<img margin:auto src="C:\wamp64\www\cmsfmphp-master\CareEcosystemLogo_web_0.png"/>
		</header>
		</p>

	</head>
<body>
<ul>
  <li><a class="active" href="welcomePage.php">Home</a></li>
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

</body>
</html>


