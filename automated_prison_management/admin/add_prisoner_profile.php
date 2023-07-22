<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header ("location:login.php");
}else {
?>


<html>
<head>
<title>Add New Prisoners Profile </title>
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
<h3><a href = "../index.php">Home </a></h3>
<h3><a href = "logout.php">Logout </a></h3>
<h3><a href = "viewprisonersprofile.php">View prisoners records </a></h3>
<h3><a href = "add_prisoner_profile.php">add new prisoners profile </a></h3>
<h3><a href = "add_courtinfo.php"> add inmate court info </a> </h3>
<h3><a href = "addvisitors.php"> keep visitors record </a> </h3>
</div>

<form method="post" action="add_prisoner_profile.php" enctype="multipart/form-data">
<table width="50%" border="10"><!-- align="center" -->
<tr>
<td align="center" colspan="6"><h1>Add New Prisoners Profile</h1></td>
</tr>
<tr>
<td align="right">PRISONERS NAME: </td>
<td><input type="text" name="name" size="40"> </td>
</tr>
<tr>
<td align="right">PRISONERS ID: </td>
<td><input type="text" name="id" size="40"> </td>
</tr>

<tr>
<td align="right">POST KEYWORDS: </td>
<td><input type="text" name="keywords" size="40"> </td>
</tr>

<tr>
<td align="right">PRISONERS IMAGE: </td>
<td><input type="file" name="image"> </td>
</tr>
<tr>
<td align="right">PRISONES DESCRIPTION: </td>
<td><textarea name="description" cols="40" rows="20"></textarea> </td>
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
	$post_name = $_POST['name'];
	$post_date = date('d-m-y');
	$post_id = $_POST['id'];
	$post_keywords = $_POST['keywords'];
	$post_description = $_POST['description'];
	$post_image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image'] ['tmp_name'];//temperal name for images
	
	if($post_name == '' or $post_date == '' or $post_id == '' or $post_keywords == '' or $post_description == '' or $post_image =='')
{
	echo "<script>alert('any of the field is empty')</script>";
	exit();
}else{
	
	move_uploaded_file($image_tmp,"../images/$post_image");
	
	$insert_querry ="INSERT INTO prisoners_profile(post_name,post_date,post_id,post_keywords,post_image,post_description)
	                           VALUES('$post_name','$post_date','$post_id','$post_keywords','$post_image','$post_description')";
							   
	//if(mysqli_query($insert_querry,)){
		if ($conn->query($insert_querry) === TRUE) {
		echo "<script>alert('prisoner profile added successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
}

?>

<?php } ?>