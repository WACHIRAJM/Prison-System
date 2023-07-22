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
$select_posts = "select * from visitors order by rand() LIMIT 0,2";
$run_posts = $conn->query($select_posts);

while($row = $run_posts->fetch_assoc()) {
	
	$id = $row['national_id'];
	$name = $row['name'];
	$adress = $row['adress'];
	$phone = $row['phone_no'];
	$visitedperson = $row['visited_person'];
	$gifts = $row['gifts'];
	$frequency = $row['frequency'];


?>
<table width="50%"border="10"align ="center"bgcolor="white">
<tr><td>visitor's name:</td> <td><?php echo $name; ?></td> </tr>
<tr><td> Visitor's adress:</td> <td> <?php echo $adress; ?> </td> </tr>
<tr> <td>Visitor's phone number:</td> <td><?php echo $phone; ?> </td> </tr> 
<tr><td> Gifts offered:</td> <td> <?php echo $gifts; ?>"</td> </tr>
<tr> <td> Frequency: </td> <td> <?php echo $frequency; ?> </td></tr> 

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