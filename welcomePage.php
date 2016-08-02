<?php
include 'session.php';
?>
</style>
<!DOCTYPE html>
<html>

	
	<head>
	<style>
	ul{
		list-style-type:none;
		margin:0;
		padding:0;
		overflow: hidden;
		background-color: #C2ACA7;
	}
	li{
		float:left;
	}
	li a, .dropbtn{
		display: inline-block;
		color: black;
		text-align: center;
		padding: 14px 16px;
		textdecoration: none;
	}
	li a:hover, .dropdown:hover .dropbtn{

		background-color: #C2ACA7;
	}
	li.dropdown{
		display:inline-block;
	}
	.dropdown-content{
		display:none;
		position:absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.2);
	}
	.dropdown-content a{
		color:black;
		padding:12px 16px;
		text-decoration:none;
		display:block;
		text-align:left;
	}
	.dropdown-content a:hover {background-color: #f1f1f1 }

	.dropdown:hover .dropdown-content {
		display:block;
	}
	</style>
	

		<title>Add2</title>
		<img margin:auto src="C:\wamp64\www\cmsfmphp-master\CareEcosystemLogo_web_0.png"/>
		</p>

	</head>
<body>
<ul>
	<li><a class="active" href="add.php">Search</a></li>
	<li><a class="active" href="index.php">Log Out</a></li>
<div class="dropdown">
	<button class="dropbtn">Search</button>
	<div class="dropdown-content">
		<a href="#">phone</a>
		<a href="#">watch</a>
		<a href="#">literature</a>
		<a href="#">Document</a>
	</div>
</div>



</p>
<?php
?>
</body>
</html>
