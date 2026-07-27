<?php
include "connect.php"; 
$id=$_GET['id'];
	
	$query1 = $db->prepare("DELETE FROM users WHERE id='$id'");
	$query1->execute();
	
    echo "<script>alert('Data Deleted Successfully!')</script>";	
	echo "<script>window.location.href='report.php'</script>";
?>