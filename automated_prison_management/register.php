<?php
//session_start();
?>
<html>
<head>
<!--<title>register form </title>-->
<title>Prison Management System</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body>

 <div> <?php include "includes/Header.php"; ?></div>
 <div> <?php include "includes/nav.php"; ?></div>

 <div id="reg">
 
<form method="post" action = "register.php" enctype = "multipart/form-data">



<table width = "400" border="10" align="center" bgcolor="lime">
<tr>
<td colspan = "4" align = "center"><h1> Register form </h1></td>
</tr>
<tr>
<td align = "right">National ID:</td>
<td><input type = "text" name = "id"size="40"></td>
</tr>
<tr>
<td align = "right">First name:</td>
<td><input type = "text" name = "fname"size="40"></td>
</tr>
<tr>
<td align = "right">Last name:</td>
<td><input type = "text" name = "lname"size="40"></td>
</tr>
<tr>
<td align = "right">Phone Number:</td>
<td><input type = "text" name = "phone"size="40"></td>
</tr>
<tr>
<td align = "right">Residence:</td>
<td><input type = "text" name = "residence"size="40"></td>
</tr>
<tr>
<td align = "right">Missing Person Full Name:</td>
<td><input type="text" name="fullname" size="40"></td>
</tr>
<tr>
<td align="right">Missing Person Image: </td>
<td><input type="file" name="image"> </td>
</tr>
<tr>
<td align="right">Missing Person Description: </td>
<td><textarea name="description" cols="40" rows="10"></textarea> </td>
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
	$post_fname = $_POST['fname'];
	$post_lname = $_POST['lname'];
	$post_phone = $_POST['phone'];
	$post_residence = $_POST['residence'];
	$post_name = $_POST['fullname'];
	$post_description = $_POST['description'];
	$post_image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image'] ['tmp_name'];//temperal name for images
	
	if($post_id == '' or $post_fname == '' or $post_lname == '' or $post_phone == ''or $post_residence == '' or $post_name == ''or $post_description == '' or $post_image =='')
{
	echo "<script>alert('any of the field is empty')</script>";
	exit();
}else{
	
	move_uploaded_file($image_tmp,"images/$post_image");
	
	$insert_querry ="INSERT INTO register(national_id,fname,lname,phone_no,residence,full_name,image,description)
	                           VALUES('$post_id','$post_fname','$post_lname','$post_phone','$post_residence','$post_name','$post_image','$post_description')";
							   
	//if(mysqli_query($insert_querry,)){
		if ($conn->query($insert_querry) === TRUE) {
		echo "<script>alert('you have reported successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
}

?>