<html>
<head>
<title>Prisoners profile</title>
<link rel="stylesheet" type="text/css" href="includes/mystyle.css">
</head>
<body>
<div> <?php include("includes/header.php"); ?></div>
<div> <?php include("includes/nav.php"); ?></div>

<div id ="section"> 

<?php
include("includes/connect.php");
$select_posts = "select * from courtinfo order by rand() LIMIT 0,2";
$run_posts = $conn->query($select_posts);

while($row = $run_posts->fetch_assoc()) {
	
	$id = $row['id'];
	$case_no = $row['case_no'];
	$court_location = $row['court_location'];
	$name = $row['judge_name'];
	$punishment = $row['punishment'];
	$period = $row['periodofpunishment'];
	$name = $row['judge_name'];


?>
<table width="50%"border="10"align ="center"bgcolor="white">
<tr><td>case number:</td> <td><?php echo $case_no; ?></td> </tr>
<tr><td> court location:</td> <td> <?php echo $court_location; ?> </td> </tr>
<tr> <td>Period of punishment:</td> <td><?php echo $period; ?> </td> </tr> 
<tr><td> Name of honorable judge:</td> <td> <?php echo $name; ?>"</td> </tr>
<tr> <td> Type of punishment: </td> <td> <?php echo $punishment; ?> </td></tr> 

</table>
<?php } ?>

</div>


<div id="side" class="side">

<div id = "searchbox">
<form action ="search.php" method = "get" enctype = "multpart/form-data" >
<input type = "text" name = "value" placeholder = "search this site" size = "30" >
<input type = "submit" name = "search" value = "search">
</form>
</div>

<div>
<img src="images/crime.jpg"width="240" height = "180">
<?php
/*include("includes/connect.php");
$query = "select *from prisoners_profile order by 1 DESC LIMIT 0,4";
$run = $conn->query($query);

while($row = $run->fetch_assoc()) {
	$id = $row['post_id'];
	$title = $row['post_name'];
	$image = $row['post_image'];
?>
<center>
<!--a href = "prisoners_information.php ? id = <?php echo $id; ?>"-->
<h3> <?php echo $title; ?> </h3> <!--/a-->
<!--a href = "prisoners_information.php ? id = <?php echo $id; ?>"-->
<img src = 'images/<?php echo $image ?> ' width = '100' height = '100'> <!--/a-->
</center>

<?php } */?>
</div>
</div>


<div> <?php include("includes/footer.php"); ?></div>

<body>
</html>