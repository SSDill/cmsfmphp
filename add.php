<?php
include 'session.php'
?>
<!DOCTYPE html>
<html>
<body>
<?php
	//TEST THE INCOMING STRING
	//IF IT'S SET, SET SEARCHSTRING VARIABLE TO IT
	
	//Set variables
	$doctitle = (isset($_POST["docTitle"])) ? $_POST["docTitle"] : "";
	$docauthor = (isset($_POST["docAuthor"])) ? $_POST["docAuthor"] : "";
	$docloc = (isset($_POST["docLocation"])) ? $_POST["docLocation"] : "";	
	$doclink = (isset($_POST["docLink"])) ? $_POST["docLink"] : "";
		
	$littitle = (isset($_POST["litTitle"])) ? $_POST["litTitle"] : "";
	$litauthor = (isset($_POST["litAuthor"])) ? $_POST["litAuthor"] : "";	
	$litpubyear = (isset($_POST["litPublicationYear"])) ? $_POST["litPublicationYear"] : "";	
	$litlink = (isset($_POST["litLink"])) ? $_POST["litLink"] : "";	
	
	$patdceid = (isset($_POST["patientDCEID"])) ? $_POST["patientDCEID"] : "";
	$patestrange = (isset($_POST["patientEstimoteRange"])) ? $_POST["patientEstimoteRange"] : "";
		
	$phonedceid = (isset($_POST["phoneDCEID"])) ? $_POST["phoneDCEID"] : "";	
	$phonenumber = (isset($_POST["phonePhoneNumber"])) ? $_POST["phonePhoneNumber"] : "";	
	$phoneimeID = (isset($_POST["phoneIMEIDNumber"])) ? $_POST["phoneIMEIDNumber"] : "";	
	$phonegoogleacct = (isset($_POST["phoneGoogleAccount"])) ? $_POST["phoneGoogleAccount"] : "";	
	$phonegooglepass = (isset($_POST["phoneGooglePassword"])) ? $_POST["phoneGooglePassword"] : "";	
	$phoneSD = (isset($_POST["phoneSD"])) ? $_POST["phoneSD"] : "";
		
	$watchdceid = (isset($_POST["watchDCEID"])) ? $_POST["watchDCEID"] : "";
	$watchmacadd = (isset($_POST["MACAddress"])) ? $_POST["MACAddress"] : "";	
	$watchdevname = (isset($_POST["DeviceName"])) ? $_POST["DeviceName"] : "";	
	$watchnumber = (isset($_POST["WANumber"])) ? $_POST["WANumber"] : "";
		
	$estdceid = (isset($_POST["EstimoteDCEID"])) ? $_POST["EstimoteDCEID"] : "";	
	$estmacadd = (isset($_POST["EstimoteMACAddress"])) ? $_POST["EstimoteMACAddress"] : "";
	$estmajid = (isset($_POST["EstimoteMajorID"])) ? $_POST["EstimoteMajorID"] : "";
	$estminid = (isset($_POST["EstimoteMinorID"])) ? $_POST["EstimoteMinorID"] : "";

 ?>
 
<div id="my_buttons"><a href="index.php">Log Out</a></div>
<div id="my_buttons"><a href="result.php">Search Database</a></div> 
</p>

<!---Form-->
<form method="post" action="adddoc.php">
</p>
<b>Insert data into Documents:</b> </p>
Title: <input name="docTitle" type="text" value="<?=$doctitle?>"/>
Author: <input name="docAuthor" type="text" value="<?=$docauthor?>"/>
Location: <input name="docLocation" type="text" value="<?=$docloc?>"/>
Link: <input name="docLink" type="text" value="<?=$doclink?>"/> </p>
Please check your entries before clicking 'Insert'. Changes to submitted data must be made by the system administrator.<br>
<input type="submit" value="Insert"/></p> </form>


<form method="post" action="addlit.php">
</p>
<b>Insert data into Literature:</b></p>
Title: <input name="litTitle" type="text" value="<?=$littitle?>"/>
Author: <input name="litAuthor" type="text" value="<?=$litauthor?>"/>
Publication Year: <input name="litPublicationYear" type="text" value="<?=$litpubyear?>"/>
Link: <input name="litLink" type="text" value="<?=$litlink?>"/></p>
Please check your entries before clicking 'Insert'. Changes to submitted data must be made by the system administrator.<br>
<input type="submit" value="Insert"/></p>
</form>
</p>
<form method="post" action="addpat.php">
<b>Insert data into Patients:</b></p>
DCE ID: <input name="patientDCEID" type="text" value="<?=$patdceid?>"/>
Estimote Range: <input name="patientEstimoteRange" type="text" value="<?=$patestrange?>"/></p>
Please check your entries before clicking 'Insert'. Changes to submitted data must be made by the system administrator.<br>
<input type="submit" value="Insert"/></p>
</form>
</p>
<form method="post" action="addphone.php">
<b>Insert data into Equipment-Phones:</b></p>
DCE ID: <input name="phoneDCEID" type="text" value="<?=$phonedceid?>"/>
Phone Number: <input name="phonePhoneNumber" type="text" value="<?=$phonenumber?>"/>
IME ID Number: <input name="phoneIMEIDNumber" type="text" value="<?=$phoneimeID?>"/>
Google Account: <input name="phoneGoogleAccount" type="text" value="<?=$phonegoogleacct?>"/><br>
Google Password: <input name="phoneGooglePassword" type="text" value="<?=$phonegooglepass?>"/>
SD?: <input name="phoneSD" type="text" value="<?=$phoneSD?>"/></p>
Please check your entries before clicking 'Insert'. Changes to submitted data must be made by the system administrator.<br>
<input type="submit" value="Insert"/></p>
</form>
</p>
<form method="post" action="addwatch.php">
<b>Insert data into Equipment-Watches:</b></p>
DCE ID: <input name="watchDCEID" type="text" value="<?=$watchdceid?>"/>
MAC Address: <input name="MACAddress" type="text" value="<?=$watchmacadd?>"/>
Device Name: <input name="DeviceName" type="text" value="<?=$watchdevname?>"/>
WA Number: <input name="WANumber" type="text" value="<?=$watchnumber?>"/></p>
Please check your entries before clicking 'Insert'. Changes to submitted data must be made by the system administrator.<br>
<input type="submit" value="Insert"/></p>
</form>
</p>
<form method="post" action="addest.php">
<b>Insert data into Equipment-Estimotes:</b></p>
DCE ID: <input name="EstimoteDCEID" type="text" value="<?=$estdceid?>"/>
MAC Address: <input name="EstimoteMACAddress" type="text" value="<?=$estmacadd?>"/>
Major ID: <input name="EstimoteMajorID" type="text" value="<?=$estmajid?>"/>
Minor ID: <input name="EstimoteMinorID" type="text" value="<?=$estminid?>"/></p>
Please check your entries before clicking 'Insert'. Changes to submitted data must be made by the system administrator.<br>
<input type="submit" value="Insert"/></p>
</p>
</form><br/><br/>


</body>
</html>
