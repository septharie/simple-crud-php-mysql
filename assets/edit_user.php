<?php
include "connect.php"; 
$id=$_GET['id'];
	
	$query1 = $db->prepare("SELECT * FROM users WHERE name='$id'");
	$query1->execute();
	$data1=$query1->fetch(PDO::FETCH_BOTH);

?>

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
    </div>
    <div class="col-md-8 col-md-offset-2" align="center">
      
      <form id="Form1" method="post" enctype="multipart/form-data" action="">
      <table>
        <tr>
        	<td width="30%">Name</td>
            <td width="5%">:</td>
            <td width="60%"><?php echo $data1['name']; ?></td>
        </tr>
        <tr>
        	<td width="20%">Email</td>
            <td width="5%">:</td>
            <td width="35%"><input type="text" name="email" value="<?php echo $data1['email']; ?>" class="input-sm"  style="width: 240px;" required></td>
        </tr>
        <tr>
        	<td width="20%">ID Number</td>
            <td width="5%">:</td>
            <td width="35%"><input type="text" name="id_number" value="<?php echo $data1['id_number']; ?>" class="input-sm"  style="width: 240px;" required></td>
        </tr>
      </table>
      <br>
      <a href="edit.php"><input name="back" type="button" class="btn btn-default btn-lg" value="Back"></a>&nbsp;&nbsp;&nbsp;<input name="edit" type="submit" class="btn btn-default btn-lg" value="Edit">&nbsp;&nbsp;&nbsp;<input name="delete" type="submit" class="btn btn-default btn-lg" value="Delete">
      </form>
      
    </div>
  </div>
</div>

</body>
</html>

<?php
if (isset($_POST['edit']))
{
	$error=array();
	$name=$_GET['id'];
	$email=$_POST['email'];
	$id_number=$_POST['id_number'];

	$query2 = $db->prepare("UPDATE `users` SET `email` = '$email', `id_number` = '$id_number'  WHERE `users`.`name` = '$name';");
	$query2->execute();
	
	echo "<script>alert('Data Has Been Updated!')</script>";	
	echo "<script>location.assign('edit_user.php?id=$name')</script>";		
	exit();
}
elseif (isset($_POST['delete']))
{
	$error=array();
	$name=$_GET['id'];
	
	$query3 = $db->prepare("DELETE FROM users WHERE `users`.`name` = '$name'");
	$query3->execute();
	
	echo "<script>alert('Data Deleted Successfully!')</script>";	
	echo "<script>window.location.href='report.php'</script>";
	exit();
}

?>

