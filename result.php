<?php
include 'session.php';
?>
<!DOCTYPE html>
<html>

<body>
<?php
	//TEST THE INCOMING SEARH STRING
	//IF IT'S SET, SET SEARCHSTRING VARIABLE TO IT
	
	$searchstring = (isset($_POST["query"])) ? $_POST["query"] : "";

	$table = (isset($_POST["tables"])) ? $_POST["tables"] : "";

?>

<div id="my_buttons"><a href="index.php">Log Out</a></div>
<div id="my_buttons"><a href="add.php">Add Data</a></div>
<form method="post" action="result.php">
<p>Select a database and enter a search term:</p>
<select name='tables' value="<?=$table?>">
	<option value="">Select...</option>
	<option value="document">Documents</option>
	<option value="literature">Literature</option>
	<option value="patient">Patient</option>
	<option value="phone">Equipment-Phones</option>
	<option value="watch">Equipment-Watches</option>
	<option value="estimote">Equipment-Estimotes</option>
</select>
<br/><input name="query" type="text" value="<?=$searchstring?>"/><input type="submit" value="search" />
</form><br/><br/>
<?php 
	
	
//Columns
$document_columns = array("Title", "Author", "Location", "Link");
$literature_columns = array("Title", "Author", "Publication_Year", "Link");
$patient_columns = array("DCE_ID", "Estimote_Range");
$phone_columns = array("DCE_ID", "Phone_Number", "IME_ID_Number", "Google_Account", "Google_Password", "SD_Card");
$watch_columns = array("DCE_ID", "MAC_Address", "Device_Name", "WA_Number");
$estimote_columns = array("DCE_ID", "MAC_Address", "Major_ID", "Minor_ID");

	//DATABASE CREDENTIALS
	$servername = "localhost";
	$username = "root";
	$password = ""; 
	// database
	$dbname = "cmsfm";

//echo $_POST["tables"] . "|" . $table;

if ($searchstring != "") 
	{
	//DATABASE CONNECTION
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Connection check
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		elseif ($table == "document"){
			foreach ($document_columns as $value) {
			//	Query string
			$sql = "SELECT * FROM ".$_POST["tables"]." WHERE ".$value." like '%".$searchstring."%'";
			$result = $conn->query($sql);
				
				if ($result->num_rows !== 0)
				{ 	echo("<h2>From the Documents Database: where $value matches search</h2>");
				//PRINT THE OPENING TABLE HTML
					echo("<table cellpadding='10' cellspacing='0' border='0'>");
				//PUT A TITLE ROW IN THE TABLE
					echo("<tr><td>ID</td><td>Title</td><td>Author</td><td>Location</td><td>Link</td></tr>");
					while($row = $result->fetch_assoc()) 
					{  
				 //CREATING AN HTML TABLE ROW FOR EACH 
				 	?>
						<tr><td><?=$row["ID"]?></td><td><?=$row["Title"]?></td><td><?=$row["Author"]?></td><td><?=$row["Location"]?></td><td> <?=$row["Link"]?></td></tr> 
				 	<?PHP 
					}
				//PRINT THE CLOSING TABLE HTML
					echo("</table>");
				// LOOP THROUGH ROWS FROM THE DATABASE IN THE FORM $row["row_name"] -ASSOCIATIVE ARRAY WITH THE COLUMN NAMES AS THE KEYS
			//Other table formatting and result input code
				}
					else 
					{
						echo "There were no results in Documents where $value matches search.";
					}				
				}
				}
			
		elseif ($table == "literature"){
			foreach ($literature_columns as $value) {
			//	Query string
			$sql = "SELECT * FROM ".$_POST["tables"]." WHERE ".$value." like '%".$searchstring."%'";
			$result = $conn->query($sql);
				
				if ($result->num_rows !== 0)
				{ 	echo("<h2>From the Literature Database: where $value matches search</h2>");
				//PRINT THE OPENING TABLE HTML
					echo("<table cellpadding='10' cellspacing='0' border='0'>");
				//PUT A TITLE ROW IN THE TABLE
					echo("<tr><td>ID</td><td>Title</td><td>Author</td><td>Publication Year</td><td>Link</td></tr>");
					while($row = $result->fetch_assoc()) 
					{  
				 //CREATING AN HTML TABLE ROW FOR EACH 
				 	?>
						<tr><td><?=$row["ID"]?></td><td><?=$row["Title"]?></td><td><?=$row["Author"]?></td><td><?=$row["Publication_Year"]?></td><td> <?=$row["Link"]?></td></tr> 
				 	<?PHP 
					}
				//PRINT THE CLOSING TABLE HTML
					echo("</table>");
				// LOOP THROUGH ROWS FROM THE DATABASE IN THE FORM $row["row_name"] -ASSOCIATIVE ARRAY WITH THE COLUMN NAMES AS THE KEYS
			//Other table formatting and result input code
				}
					else 
					{
						echo "There were no results in Literature where $value matches search.";
					}				
				}
				}
					
		elseif ($table == "patient"){
			foreach ($patient_columns as $value) {
			//	Query string
			$sql = "SELECT * FROM ".$_POST["tables"]." WHERE ".$value." like '%".$searchstring."%'";
			$result = $conn->query($sql);
				
				if ($result->num_rows !== 0)
				{ 	echo("<h2>From the Patient Database: where $value matches search</h2>");
				//PRINT THE OPENING TABLE HTML
					echo("<table cellpadding='10' cellspacing='0' border='0'>");
				//PUT A TITLE ROW IN THE TABLE
					echo("<tr><td>ID</td><td>DCE ID</td><td>Estimote Range</td></tr>");
					while($row = $result->fetch_assoc()) 
					{  
				 //CREATING AN HTML TABLE ROW FOR EACH 
				 	?>
						<tr><td><?=$row["ID"]?></td><td><?=$row["DCE_ID"]?></td><td><?=$row["Estimote_Range"]?></td></tr> 
				 	<?PHP 
					}
				//PRINT THE CLOSING TABLE HTML 
					echo("</table>");
				// LOOP THROUGH ROWS FROM THE DATABASE IN THE FORM $row["row_name"] -ASSOCIATIVE ARRAY WITH THE COLUMN NAMES AS THE KEYS
			//Other table formatting and result input code
				}
					else 
					{
						echo "There were no results in Patients where $value matches search.";
					}				
				}
				}
		elseif ($table == "phone"){
			foreach ($phone_columns as $value) {
			//	Query string
			$sql = "SELECT * FROM ".$_POST["tables"]." WHERE ".$value." like '%".$searchstring."%'";
			$result = $conn->query($sql);
				
				if ($result->num_rows !== 0)
				{ 	echo("<h2>From the Phone Database: where $value matches search</h2>");
				//PRINT THE OPENING TABLE HTML
					echo("<table cellpadding='10' cellspacing='0' border='0'>");
				//PUT A TITLE ROW IN THE TABLE
					echo("<tr><td>ID</td><td>DCE ID</td><td>Phone Number</td><td>IMEI Number</td><td>Google Account</td><td>Google Password</td><td>SD?</td></tr>");
					while($row = $result->fetch_assoc()) 
					{  
				 //CREATING AN HTML TABLE ROW FOR EACH 
				 	?>
						<tr><td><?=$row["ID"]?></td><td><?=$row["DCE_ID"]?></td><td><?=$row["Phone_Number"]?></td><td> <?=$row["IME_ID_Number"]?></td><td><?=$row["Google_Account"]?></td><td><?=$row["Google_Password"]?></td><td><?=$row["SD_Card"]?></td></tr> 
				 	<?PHP 
					}
				//PRINT THE CLOSING TABLE HTML
					echo("</table>");
				// LOOP THROUGH ROWS FROM THE DATABASE IN THE FORM $row["row_name"] -ASSOCIATIVE ARRAY WITH THE COLUMN NAMES AS THE KEYS
			//Other table formatting and result input code
				}
					else 
					{
						echo "There were no results in Phones where $value matches search.";
					}				
				}
				}
		elseif ($table == "watch"){
			foreach ($watch_columns as $value) {
			//	Query string
			$sql = "SELECT * FROM ".$_POST["tables"]." WHERE ".$value." like '%".$searchstring."%'";
			$result = $conn->query($sql);
				
				if ($result->num_rows !== 0)
				{ 	echo("<h2>From the Watch Database: where $value matches search</h2>");
				//PRINT THE OPENING TABLE HTML
					echo("<table cellpadding='10' cellspacing='0' border='0'>");
				//PUT A TITLE ROW IN THE TABLE
					echo("<tr><td>ID</td><td>DCE ID</td><td>MAC Address</td><td>Device Name</td><td>WA Number</td></tr>");
					while($row = $result->fetch_assoc()) 
					{  
				 //CREATING AN HTML TABLE ROW FOR EACH 
				 	?>
						<tr><td><?=$row["ID"]?></td><td><?=$row["DCE_ID"]?></td><td><?=$row["MAC_Address"]?></td><td> <?=$row["Device_Name"]?></td><td> <?=$row["WA_Number"]?></td></tr> 
				 	<?PHP 
					}
				//PRINT THE CLOSING TABLE HTML
					echo("</table>");
				// LOOP THROUGH ROWS FROM THE DATABASE IN THE FORM $row["row_name"] -ASSOCIATIVE ARRAY WITH THE COLUMN NAMES AS THE KEYS
			//Other table formatting and result input code
				}
					else 
					{
						echo "There were no resultsin Watches where $value matches search.";
					}				
				}
				}
		elseif ($table == "estimote"){
			foreach ($estimote_columns as $value) {
			//	Query string
			$sql = "SELECT * FROM ".$_POST["tables"]." WHERE ".$value." like '%".$searchstring."%'";
			$result = $conn->query($sql);
				
				if ($result->num_rows > 0)
				{ 	echo("<h2>From the Estimote Database: where $value matches search</h2>");
				//PRINT THE OPENING TABLE HTML
					echo("<table cellpadding='10' cellspacing='0' border='0'>");
				//PUT A TITLE ROW IN THE TABLE
					echo("<tr><td>ID</td><td>DEC ID</td><td>MAC Address</td><td>Major ID</td><td>Minor ID</td></tr>");
					while($row = $result->fetch_assoc()) 
					{  
				 //CREATING AN HTML TABLE ROW FOR EACH 
				 	?>
						<tr><td><?=$row["ID"]?></td><td><?=$row["DCE_ID"]?></td><td><?=$row["MAC_Address"]?></td><td> <?=$row["Major_ID"]?></td><td> <?=$row["Minor_ID"]?></td></tr> 
				 	<?PHP 
					}
				//PRINT THE CLOSING TABLE HTML
					echo("</table>");

				}
					else 
					{
						echo "There were no results in Estimotes where $value matches search.";
					}				
				}
				}
			
	$conn->close();
	} 
	else 
	{
		echo "Please enter a search string in the field above.";
	}



?>
</body>
</html>
