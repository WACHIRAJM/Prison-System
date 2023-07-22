<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header ("location:login.php");
}else {
?>


<html>
<head>
<title>Add Inmate court information </title>
<link rel="stylesheet" href = "admistyle.css" />
</head>
<body>

<div id="header" class="header">

<div id = "logo"><img src = "../images/img.jpeg"> </div>
<h1> <a href="index.php">Welcome to admin panel</a> </h1>
<!--<div id = "banner"><img src = "images/img.jpeg"> <div>-->
 </div>

<div id = "sidebar">
Welcome : <h2> <?php echo $_SESSION['user_name']; ?> </h2>
<h3><a href = "../index.php"> Home</a> </h3>
<h3><a href = "logout.php">Logout </a></h3>
<h3><a href = "viewprisonersprofile.php">View prisoners records </a></h3>
<h3><a href = "add_prisoner_profile.php">add new prisoners profile </a></h3>
<h3><a href = "add_courtinfo.php"> add inmate court info </a> </h3>
<h3><a href = "addvisitors.php"> keep visitors record </a> </h3>
</div>

<form method="post" action="add_courtinfo.php" enctype="multipart/form-data">
<table width="50%"border="10"><!-- align="center"-->
<tr>
<td align="center" colspan="6"><h1>Add inmate court Information</h1></td>
</tr>
<tr>
<td align="right">CASE NUMBER: </td>
<td><input type="text" name="case_no" size="40"> </td>
</tr>
<tr>
<td align="right">COURT LOCATION: </td>
<td><input type="text" name="location" size="40"> </td>
</tr>

<tr>
<td align="right">POST KEYWORDS: </td>
<td><input type="text" name="keywords" size="40"> </td>
</tr>

<tr>
<td align="right">NAME OF HONORABLE JUDGE: </td>
<td><input type="text" name="name" size="40"> </td>
</tr>
<tr>
<td align="right">TYPE OF PUNISHMENT: </td>
<td><input type ="text" name ="punishment" size = "40"> </td>
</tr>
<tr>
<td align="right">PERIOD OF PUNISHMENT: </td>
<td><input type="text" name="period" size="40"> </td>
</tr>
<tr>
<td align="center" colspan="6"><input type="submit" name="submit"value="submit"> </td>
</tr>
</table>
</form>
</body>
</html>



<?php 
include("includes/connect.php");

if(isset($_POST['submit']))
{
	$case_no = $_POST['case_no'];
	$location = $_POST['location'];
	$post_keywords = $_POST['keywords'];
	$post_name = $_POST['name'];
	$punishment = $_POST['punishment'];
	$period = $_POST['period'];
	
	if($case_no == '' or $location == '' or $post_keywords == '' or $post_name == '' or $punishment == '' or $period =='')
{
	echo "<script>alert('any of the field is empty')</script>";
	exit();
}else{
	
	$insert_querry ="INSERT INTO courtinfo(case_no,court_location,post_keywords,judge_name,punishment,periodofpunishment)
	                           VALUES('$case_no','$location','$post_keywords','$post_name','$punishment','$period')";
							   
	//if(mysqli_query($insert_querry,)){
		if ($conn->query($insert_querry) === TRUE) {
		echo "<script>alert('information added successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
}

?>

<?php } ?>