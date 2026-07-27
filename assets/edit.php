<!doctype html>
<html>
<head>
<meta charset="utf-8">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>

<title>TESTING</title>
</head>

<body>

<div class="intro text-center" style="padding:90px 0px 0px 0px;">
  <div class="container">
    <div class="section-title center">
      <h2>Edit Data</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2" align="center">
      
      <form id="Form1" method="post" enctype="multipart/form-data" action="">
      <table>
        <tr>
        	<td width="30%">Name</td>
            <td width="5%">:</td>
            <td width="60%"><input type="text" name="name" class="input-sm" style="width: 200px;" required></td>
        </tr>
      </table>
      <br>
      <a href="index.php"><input name="back" type="button" class="btn btn-default btn-lg" value="Back"></a>&nbsp;&nbsp;&nbsp;<input name="search" type="submit" class="btn btn-default btn-lg" value="Search">
      </form>
      
    </div>
  </div>
</div>

</body>
</html>

<?php
include "connect.php"; 

if($_POST)
{
	$error=array();
	$name=$_POST['name'];
	
	$query1 = $db->prepare("SELECT * FROM users WHERE name='$name'");
	$query1->execute();
	$data1=$query1->fetch(PDO::FETCH_BOTH);
	
	if($data1['name']!=$name)
	{
		echo "<script>alert('Unknown name!')</script>";	
		echo "<script>location.assign('edit.php')</script>";	
	}
	else
	{
		echo "<script>location.assign('edit_user.php?id=$name')</script>";	
	}
}
?>