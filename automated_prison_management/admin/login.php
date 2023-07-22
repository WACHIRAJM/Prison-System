<?php
session_start();
?>
<html>
<head>
<title>login form </title>
</head>
<body>
<form method="post" action = "login.php">
<table width = "400" border="10" align = "center">
<tr>
<td colspan = "4" align = "center"><h1> ADMIN LOGIN FORM </h1></td>
</tr>
<tr>
<td align = "right">User name:</td>
<td><input type = "text" name = "user_name"></td>
</tr>
<tr>
<td align = "right">User password:</td>
<td><input type = "password" name = "user_password"></td>
</tr>
<tr>
<td colspan = "4" align = "center"><input type = "submit" name = "login" value = "login"> </td>
</tr>
<table>
</form>
</body>
</html>

<?php
include("includes/connect.php");
if(isset($_POST['login'])){
	$user_name =mysqli_real_escape_string($conn, $_POST['user_name']);
	$user_password =mysqli_real_escape_string($conn, $_POST['user_password']);
	
	$encrypt = md5($user_password);
	
	$admin_query = "select * from admin where user_name = '$user_name' AND user_password = '$user_password' " ;
	$run = $conn->query($admin_query);
	
	if($run->num_rows>0){
		$_SESSION['user_name']=$user_name;
		echo "<script> window.open('index.php','_self') </script> " ;
}else{
	echo "<script>alert('username or password is incorrect')</script>";
}
}
?>