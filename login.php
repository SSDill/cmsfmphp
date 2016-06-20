<!DOCTYPE html>
<html>
<body>

<?php

//Getting username/password entered from webpage
$username = $_POST['username'];
$password = $_POST['password'];

// 3 ifs - did you pass credentials, does user exist, does password match

//Checking if username/password were filled out
if ($username&&$password)
{
	//Connection to MYSQL - server, username, password, db
	$connect = new mysqli("localhost","root","","cmsfm");
	
	//SQL Statement to list of all users where username matches entered username	
	$sql = "SELECT * FROM users WHERE username=$username";
	//Running the SQL Statement against the database
	$result = $connect->query($sql);
	
	echo $result;
	//If returned username
	if ($result->num_rows > 0) {
    // output data of each row
	    while($row = $result->fetch_assoc()) {
			if($row["PASSWORD"] == $password){
		 		echo "Logged in!";
				//$row["USERNAME"] == $username && 
				//Do more stuff - show files/etc, or send to new page
			}
			else{
				echo "Incorrect password";
			}
	    }
	} 
	else {
	    echo "No user found by that name";
	}
}
else
	echo "Please enter username and password.";

?>
</body>
</html>