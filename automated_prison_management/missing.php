
<?php
//session_start();
//if(!isset($_SESSION['national_id'])){
//	header ("location:register.php");
//}else {
?>

<html>
<head>
<title>Prison Management System</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
  <div> <?php include "includes/Header.php"; ?></div>
 <div> <?php include "includes/nav.php"; ?></div>
   
   
    <div id="sec">
	
    	<div class="sec">
           <form><br><br>
		   <input type="button" name="button" value="click here to report" onclick="alert('you are about to report someone that is missing');window.open('register.php','_self');">
		   <br><br>
		   </form>
        </div> <!-- end of section -->
    
    </div> <!-- end of section -->
   <?php include "includes/Footer.php"; ?>

</body>
</html>
<?php// } ?>