<div id="sec">
<div class="container">
<h2><u> The blackshow </u></h2>
<p> This is the blackshow dancecrew where we do great dance any one all over the wolrd is welcomed.
</br>The leader of the crew is James Mwangi a very humble guy and also a good guy.</p>

<?php
include("includes/connect.php");
$select_posts = "select * from post order by rand() LIMIT 0,3";
$run_posts = $conn->query($select_posts);

while($row = $run_posts->fetch_assoc()) {
	
	$post_id = $row['post_id'];
	$post_title = $row['post_title'];
	$post_date = $row['post_date'];
	$post_author = $row['post_author'];
	$post_image = $row['post_image'];
	//$post_keywords = $row['post_keywords'];
	$post_content = substr($row['post_content'],0,200);


?>

<h2> <a href = "page.php ? id = <?php echo $post_id; ?>"> <?php echo $post_title; ?> </a> </h2>
<p align = "left"> Published on:<b> <?php echo $post_date; ?> </b> </p>
<p align = "right"> Posted by:<b> <?php echo $post_author; ?> </b> </p>
<center> <img src="images/<?php echo $post_image; ?>" width = "250" height = "250" ?> </center>
<p align = "justify"> <?php echo $post_content; ?> </p> 
<p align = "right"> <a href = "page.php ? id = <?php echo $post_id; ?>">read more </a> </p>
<?php } ?>

</div>
 </div>