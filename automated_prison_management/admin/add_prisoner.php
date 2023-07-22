<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header ("location:login.php");
}else {
?>


<html>
<head>
<title>Add New Prisoners </title>
</head>
<body>
<form method="post" action="insert_post.php" enctype="multipart/form-data">
<table width="70%" align="center" border="10">
<tr>
<td align="center" colspan="6"><h1>Add New Prisoners</h1></td>
</tr>
<tr>
<td align="right">POST TITLE: </td>
<td><input type="text" name="title" size="40"> </td>
</tr>
<tr>
<td align="right">POST AUTHOR: </td>
<td><input type="text" name="author" size="40"> </td>
</tr>

<tr>
<td align="right">POST KEYWORDS: </td>
<td><input type="text" name="keywords" size="40"> </td>
</tr>
<tr>
<td align="right">POST IMAGE: </td>
<td><input type="file" name="image"> </td>
</tr>
<tr>
<td align="right">POST CONTENT: </td>
<td><textarea name="content" cols="40" rows="20"></textarea> </td>
</tr>
<tr>
<td align="center" colspan="6"><input type="submit" name="submit"value="PUBLISH NOW"> </td>
</tr>
</table>
</form>
</body>
</html>



<?php 

include("includes/connect.php");

if(isset($_POST['submit']))
{
	$post_title = $_POST['title'];
	$post_date = date('d-m-y');
	$post_author = $_POST['author'];
	$post_keywords = $_POST['keywords'];
	$post_content = $_POST['content'];
	$post_image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image'] ['tmp_name'];//temperal name for images
	
	if($post_title == '' or $post_date == '' or $post_author == '' or $post_keywords == '' or $post_content == '' or $post_image =='')
{
	echo "<script>alert('any of the field is empty')</script>";
	exit();
}else{
	
	move_uploaded_file($image_tmp,"../images/$post_image");
	
	$insert_querry ="INSERT INTO post(post_title,post_date,post_author,post_image,post_keywords,post_content)
	                           VALUES('$post_title','$post_date','$post_author','$post_image','$post_keywords','$post_content')";
							   
	//if(mysqli_query($insert_querry,)){
		if ($conn->query($insert_querry) === TRUE) {
		echo "<script>alert('prisoner details added successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
}

?>

<?php } ?>