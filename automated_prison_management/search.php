<html>
<head>
<title>Prison Management System</title>
<link rel="stylesheet" type="text/css" href="includes/mystyle.css">
</head>
<body>
<div> <?php include("includes/header.php"); ?></div>
<div> <?php include("includes/nav.php"); ?></div>

<h2> your search result is here </h2>
<div id = "section">
<?php
include("includes/connect.php");
if(isset($_GET['search'])){
	$search=$_GET['value'];
	$search_query="select * from prisoners_profile where post_keywords like '%$search%' " ;
	$run = $conn->query($search_query);
	while($row = $run->fetch_assoc()) {
		
	$post_id = $row['post_id'];
	$post_name = $row['post_name'];
	$post_image = $row['post_image'];
	$post_description = substr($row['post_description'],0,1000);
	
	

?>
<center>
<h3>
<a href="prisoners_information.php?id=<?php echo $post_id; ?>" >
<?php echo $post_name; ?></a></h3>
<img src="images/<?php echo $post_image; ?>" width="250" height = "250">
<p><?php echo $post_description; ?> </p>
<?php } } ?>
</div>
<div> <?php include("includes/side.php"); ?></div>
<div> <?php include("includes/footer.php"); ?></div>
</center>


<body>
</html>