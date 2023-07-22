<div id ="section"> 

<?php
include("includes/connect.php");
$select_posts = "select * from prisoners_profile order by rand() LIMIT 0,2";
$run_posts = $conn->query($select_posts);

while($row = $run_posts->fetch_assoc()) {
	
	$id = $row['id'];
	$post_name = $row['post_name'];
	$post_date = $row['post_date'];
	$post_id = $row['post_id'];
	$post_image = $row['post_image'];
	$post_description = substr($row['post_description'],0,100);


?>

<h3> <!--a href = "prisoners_information.php ? id = <?php echo $id; ?>"> <?php echo $post_name; ?> </a--> </h3>
<p align = "left"> Arrested on:<b> <?php echo $post_date; ?> </b> </p>
<!-- <p align = "right"> Posted by:<b> <?php //echo $post_id; ?> </b> </p> -->
<center> <img src="images/<?php echo $post_image; ?>" width = "230" height = "230" ?> </center>
<p align = "justify"> <?php echo $post_description; ?> </p> 
<!--<p align = "right"> <a href = "page.php ? id = <?php// echo $post_id; ?>">read more </a> </p>-->
<?php } ?>

</div>