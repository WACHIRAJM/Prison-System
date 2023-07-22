
<div id="side" class="side">

<div id = "searchbox">
<form action ="search.php" method = "get" enctype = "multpart/form-data" >
<input type = "text" name = "value" placeholder = "search this site" size = "30" >
<input type = "submit" name = "search" value = "search">
</form>
</div>

<div>
<?php
include("includes/connect.php");
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

<?php } ?>
</div>
</div>




