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
<h1> <a href="index.php">Welcome to admin panel</a> </h1>
<!-- removed coment from line 20 -->
<div id = "banner"><img src = "images/img.jpeg"> <div>
 </div>
 <!-- removed coment from line 23 to line 51 -->
 <div id="nav" class="nav">
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
<li><a href="#">Prisoners Section <img src="images/dropdown.png"> </a>
  <ul>
  <li><a href="#">prisoners family information</a></li>
   <li><a href="prisoners_profile.php">prisoners profile</a></li>
    <li><a href="inmatecourtinfo.php">inmate court information</a></li>
	 <li><a href="#">prisoners information</a></li>
	  <li><a href="#">prisoners criminal record</a></li>
  </ul>
  </li><!-- kutakua na dropdown menu hapa -->
  <li><a href="missing.php">Report Missing persons</a></li>
  <li><a href="about.php">About Us</a></li>
  <li><a href="contact.php">Contact Us</a></li>
</ul> 

</div>
 
<div id = "sidebar">
Welcome : <h2> <?php echo $_SESSION['user_name']; ?> </h2>
<h3><a href = "../index.php">Home </a></h3>
<h3><a href = "logout.php">Logout </a></h3>
<h3><a href = "viewprisonersprofile.php">View prisoners records </a></h3>
<h3><a href = "add_prisoner_profile.php">add new prisoners profile </a></h3>
<h3><a href = "add_courtinfo.php"> add inmate court info </a> </h3>
<h3><a href = "addvisitors.php"> keep visitors record </a> </h3>
</div>
<div id = "table">
<table width = "100%" border = "5px" align = "center" bgcolor = "purple">
<tr>
<td colspan = "10" bgcolor = "blue"><h1> view all posts </h1> </td>
</tr>
<tr>

<th> Post No: </th>
<th> Post Date: </th>
<th> Post name: </th>
<th> Post image: </th>
<th> Post Content: </th>
<th> Delete Post: </th>
<th> Edit Post: </th>
</div>
<!--<h3><a href = "logout.php">Logout </a></h3>-->
<?php
include("includes/connect.php");
$query = "select * from prisoners_profile";
$run = $conn->query($query);
	while($row = $run->fetch_assoc()) {
		
	$post_name = $row['post_name'];
	$post_date = $row['post_date'];
	$post_id = $row['post_id'];
	$post_image = $row['post_image'];
	$post_content = substr($row['post_description'],0,5);
?>
</tr>

<tr align = "center">

<td><?php echo $post_id; ?> </td>
<td><?php echo $post_date; ?> </td>
<td><?php echo $post_name; ?> </td>
<td><img src = "../images/<?php echo $post_image; ?>"width = "100px" height = "100px"> </td>
<td><?php echo $post_content; ?> </td>
<td><a href = "delete.php?del=<?php echo $post_id; ?>">Delete</a></td>
<td><a href = "edit.php?edit=<?php echo $post_id; ?>"> Edit </td>
	<?php } ?>
<tr>
</table>
</body>
</html>

<?php } ?>