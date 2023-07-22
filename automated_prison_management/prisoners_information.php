<html>
<head>
<title>Prison Management System</title>
<link rel="stylesheet" type="text/css" href="includes/mystyle.css">
</head>
<body>
<div> <?php include("includes/header.php"); ?></div>
<div> <?php include("includes/nav.php"); ?></div>

<div id = "section">
<?php
include("includes/connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else { 

if(isset($_GET['id'])){
	$page_id = $_GET[$post_id];
$select_query = "SELECT * FROM prisoners_profile WHERE post_id = '$page_id' ";
$run_query = $conn->query($select_query);

while($row = $run_query->fetch_assoc()) {
	
	$post_id = $row["post_id"];
	$post_title = $row["post_title"];
	$post_date = $row["post_date"];
	$post_author = $row["post_author"];
	$post_image = $row["post_image"];
	//$post_keywords = $row['post_keywords'];
	$post_content = $row["post_content"];


?>

<h2> <a href = "pages.php?id=<?php echo $post_id; ?>"> <?php echo $post_title; ?> </a> </h2>
<p align = "left"> Published on:<b> <?php echo $post_date; ?> </b> </p>
<p align = "right"> Posted by:<b> <?php echo $post_author; ?> </b> </p>
<center> <img src="images/<?php echo $post_image; ?>" width = "250" height = "150" ?> </center>
<p align = "justify"> <?php echo $post_content; ?> </p> 
<?php } }else{ echo "sorry, something went wrong";} } ?>

</div>

<div> <?php include("includes/side.php"); ?></div>
<div> <?php include("includes/footer.php"); ?></div>

<body>
</html>