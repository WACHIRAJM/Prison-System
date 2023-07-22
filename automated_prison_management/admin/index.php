<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header ("location:login.php");
}else {
?>

<html>
<head>
<title>admin page </title>
<link rel="stylesheet" href = "admistyle.css" />
</head>
<body>

<div id="header" class="header">

<div id = "logo"><img src = "../images/img.jpeg"> </div>
<h1 a href="index.php">Welcome to admin panel </h1>
<!--<div id = "banner"><img src = "images/img.jpeg"> <div>-->
 </div>
 
 <!--<div id="nav" class="nav">
   <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="#">Prison Section <img src="../images/dropdown.png"> </a>
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
<!--<li><a href="#">Prisoners Section <img src="../images/dropdown.png"> </a>
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
<div id = "control">
<p>This is where the admin takes control and record the changes that are made </p>
<img src = "../images/admin.jpg">
</div>
</body>
</html>
<?php } ?>