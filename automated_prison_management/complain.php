<html>
<head>
<title>COMPLAIN FORM</title>
<link rel="stylesheet" media="screen" href="includes/login.css" >
<link rel="stylesheet" type="text/css" href="includes/mystyle.css">
</head>
<body>

<div> <?php include "includes/Header.php"; ?></div>
 <div> <?php include "includes/nav.php"; ?></div>

<table width="74%" height="112" border="0" align="center" bgcolor="#FFFFFF">
<tr>
<td width="79%" height="29" align="center" bgcolor="#FF0000">
<font size="5">
<a href="index.php">Home</a> 
</font>
</td>
</tr>
<td>

<div id = "complain">

<form action="complain.php" method="post">
<table bgcolor="white" height="190" border="0" align="center" width="52%">
<td width="27%" height="46" bgcolor="#FFFFFF"><b>To:</b></td>
<td width="73%" bgcolor="#FFFFFF"><input type="text" name="too" /></td>
</tr>
<tr>
<td height="51" bgcolor="#FFFFFF"><b>Id:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="national_id" ></td>
</tr>
<tr>
<td height="51" bgcolor="#FFFFFF"><b>Name:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="name" ></td>
</tr>
<tr>
<td height="51" bgcolor="#FFFFFF"><b>Subject:</b></td>
<td bgcolor="#FFFFFF"><input type="text" name="subject" ></td>
</tr>
<td height="3"></tr>
<tr>
    <td ><strong><b>Message</b></strong></td>
     <td bgcolor="#FFFFFF"><font size="4">
     <textarea cols="17" rows="4" name="message"></textarea>
	 </tr>
     <td height="36" bgcolor="#FFFFFF" align="center"><input type="submit" name="submit" value="Save" /></td>
	  <td height="26" bgcolor="#FFFFFF" align="center"><input type="reset" value="Cancel" /></td>
 </tr>
</table>
</form>
</td>
<td width="1%" bgcolor="#FFFFFF"></tr>
<tr>
<td height="21" colspan="2" align="center" bgcolor="#FF0000">&copy; KENYA PRISONS SERVICE</td>
</tr>
</table>

</div>

<?php// include "includes/Footer.php";?>

</body>
</html>
<?php 
include("includes/connect.php");

if(isset($_POST['submit']))
{
	$too = $_POST['too'];
	$national_id = $_POST['national_id'];
	$post_name = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	if($too == '' or $national_id == '' or $post_name == '' or $subject == '' or $message =='')
{
	echo "<script>alert('any of the field is empty')</script>";
	exit();
}else{
	
	$insert_querry ="INSERT INTO complain(too,national_id,name,subject,message)
	                           VALUES('$too','$national_id','$post_name','$subject','$message')";
							   
	//if(mysqli_query($insert_querry,)){
		if ($conn->query($insert_querry) === TRUE) {
		echo "<script>alert('complain registered successfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	}
}
}

?>