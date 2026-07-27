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

<title>Simple CRUD</title>
</head>

<body>

<div class="intro text-center" style="padding:90px 0px 90px 0px;">
  <div class="container">
    <div class="section-title center">
      <h2>Input Data</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2" align="center">
      
      <form id="Form1" method="post" enctype="multipart/form-data" action="">
      <table>
        <tr>
        	<td width="30%">Name</td>
            <td width="5%">:</td>
            <td width="60"><input type="text" name="name" class="input-sm"  style="width: 240px;" required></td>
        </tr>
        <tr>
        	<td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" class="input-sm"  style="width: 240px;" required></td>
        </tr>
        <tr>
        	<td>ID Number</td>
            <td>:</td>
            <td><input type="number" name="id_number" class="input-sm" style="width: 240px;" required></td>
        </tr>
      </table>
      <br>
      <a href="index.php"><input name="back" type="button" class="btn btn-default btn-lg" value="Back"></a>&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" class="btn btn-default btn-lg" value="Submit">
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
	$email=$_POST['email'];
	$id_number=$_POST['id_number'];
		
	if(empty($error))
	{
		$query1 = $db->prepare("INSERT INTO `users` (`id`, `name`, `email`, `id_number`) VALUES ('', '$name', '$email', '$id_number')");
		$query1->execute();	

		echo "<script>alert('Data Stored!')</script>";	
    echo "<script>window.location.href='report.php'</script>";

	}
}
?>