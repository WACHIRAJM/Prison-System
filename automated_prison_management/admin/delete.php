<?php
include("includes/connect.php");
if(isset($_GET['del'])){
	$delete_id = $_GET['del'];
	$delete_query = "delete from post where post_id = '$delete_id'";
	//echo "we have the id";
	if($conn->query($delete_query)){
		echo "<script>alert('post has been deleted')</script>";
		echo "<script>window.open('view_post.php','_self')</script>";
	}
}
?>