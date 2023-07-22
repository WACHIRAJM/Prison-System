<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header ("location:login.php");
}else {
?>
<html>
<head>
<!--<title>register form </title>-->
<title>Prison Management System</title>
<link rel="stylesheet" href = "admistyle.css"/>
</head>

<body>

 <div id="header" class="header">

<div id = "logo"><img src = "../images/img.jpeg"> </div>
<h1> <a href="index.php">Welcome to admin panel</a> </h1>
<!--<div id = "banner"><img src = "images/img.jpeg"> <div>-->
 </div>
 
 <!--<div id="nav" class="nav">
   <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="#">Prison Section <img src="images/dropdown.png"> </a>
  <ul>
  <li><a href="#">Day wardens on duty</a></li>
   <li><a href="#">night wardens on duty</a></li>
    <li><a href="complain.php">complain</a></li>
	<li><a href="#">visitors record </a></li>
	 <li><a href="admin/index.php">Admin login</a></li>
	<!-- <li><a href="#">booking appointment</a></li>-->
	<!--  <li><a href="#">news</a></li>
  </ul>
  </li><!-- kutakua na dropdown menu hapa -->
<!--<li><a href="#">Prisoners Section <img src="images/dropdown.png"> </a>
  <ul>
  <li><a href="#">prisoners family information</a></li>
   <li><a href="prisoners_profile.php">prisoners profile</a></li>
    <li><a href="inmatecourtinfo.php">inmate court information</a></li>
	 <li><a href="#">prisoners information</a></li>
	  <li><a href="#">prisoners criminal record</a></li>
  </ul>
  </li><!-- kutakua na dropdown menu hapa -->
 <!-- <li><a href="missing.php">Report Missing persons</a></li>
  <li><a href="about.php">About Us</a></li>
  <li><a href="contact.php">Contact Us</a></li>
</ul> 

</div>-->
 
<div id = "sidebar">
Welcome : <h2> <?php echo $_SESSION['user_name']; ?> </h2>
<h3><a href = "../index.php">Home </a></h3>
<h3><a href = "logout.php">Logout </a></h3>
<h3><a href = "viewprisonersprofile.php">View prisoners records </a></h3>
<h3><a href = "add_prisoner_profile.php">add new prisoners profile </a></h3>
<h3><a href = "add_courtinfo.php"> add inmate court info </a> </h3>
<h3><a href = "addvisitors.php"> keep visitors record </a> </h3>
</div>

 <div id="reg">
 
<form method="post" action = "addvisitors.php" enctype = "multipart/form-data">



<table width = "400" border="10" align="center" bgcolor="lime">
<tr>
<td colspan = "4" align = "center"><h1> Register form </h1></td>
</tr>
<tr>
<td align = "right">National ID:</td>
<td><input type = "text" name = "id"size="40"></td>
</tr>
<tr>
<td align = "right">Name:</td>
<td><input type = "text" name = "name"size="40"></td>
</tr>
<tr>
<td align = "right">Adress:</td>
<td><input type = "text" name = "adress"size="40"></td>
</tr>
<tr>
<td align = "right">Phone Number:</td>
<td><input type = "text" name = "phone"size="40"></td>
</tr>
<tr>
<td align = "right">who was visited:</td>
<td><input type = "text" name = "visitedperson"size="40"></td>
</tr>
<tr>
<td align = "right">gifts offered:</td>
<td><input type="text" name="gifts" size="40"></td>
</tr>
<tr>
<td align="right">Frequency: </td>
<td><input type="text" name="frequency"> </td>
</tr>
<tr>
<td colspan = "4" align = "center"><input type = "submit" name = "submit" value = "submit"> </td>
</tr>
<table>
</form>

</div>

<?php //include "includes/Footer.php";?>


</body>
</html>

<?php 

include("includes/connect.php");

if(isset($_POST['submit']))
{
	$post_id = $_POST['id'];
	$post_name = $_POST['name'];
	$post_adress = $_POST['adress'];
	$post_phone = $_POST['phone'];
	$post_visitedperson = $_POST['visitedperson'];
	$post_gifts = $_POST['gifts'];
	$post_frequency = $_POST['frequency'];
	
	if($post_id == '' or $post_name == '' or $post_adress == '' or $post_phone == ''or $post_visitedperson == '' or $post_gifts == ''or $post_frequency == '')
{
	echo "<script>alert('any of the field is empty')</script>";
	exit();
}else{
	
	$insert_querry ="INSERT INTO visitors(national_id,name,adress,phone_no,visited_person,gifts,frequency)
	                           VALUES('$post_id','$post_name','$post_adress','$post_phone','$post_visitedperson','$post_gifts','$post_frequency')";
							   
	//if(mysqli_query($insert_querry,)){
		if ($conn->query($insert_querry) === TRUE) {
		echo "<script>alert('visitors information added successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
}

} ?>