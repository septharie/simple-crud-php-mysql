<?php
	define("ROW_PER_PAGE",10);
	include "connect.php";

$query1 = $db->prepare("SELECT * FROM users ORDER BY id ASC");
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

<style type="text/css">
table {
    width: 80%; border-collapse: collapse;
}
th, td {
    border: 1px solid #ddd;
    padding: 5px;
}
th {
	background-color: #796051;
    color: #333;
}
tr:nth-child(odd){background-color: #dfd6cf;}
</style>

<title>TESTING</title>
</head>

<body>

<div class="intro text-center" style="padding:30px 0px 90px 0px;">
  <div class="container">
    <div class="section-title center">
      <h2>Report List</h2>
	  <hr>
    </div>
    <div class="col-md-8 col-md-offset-2" align="center">
      
     <!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
        
        <!--  start table-content  -->
			<div id="table-content">
            
        <?php	
								
			$sql = "SELECT * FROM users ORDER BY id ASC";
				
			$pdo_statement = $db->prepare($sql);
			$pdo_statement->execute();
			$result = $pdo_statement->fetchAll();
			$num=1;
		?>
		
		<!-- start id-form -->
        <form name="form1" enctype="multipart/form-data" method="post">
        
        <table width="70%" border="1">
			<tr>
				<th width="3%">No</th>
				<th width="20%">Name</th>
                <th width="30%">Email</th>
				<th width="15%">ID Number</th>
				<th width="3%">Delete</th>
			</tr>
			</tr>
            <?php
				if(!empty($result)) 
				{ 
					foreach($result as $row) 
					{
						
						
			?>
			<tr class='table-row'>
            	<td align="center"	><?php echo $num; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['email']; ?></td> 
				<td><?php echo $row['id_number']; ?></td>
				<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
			</tr>
		    <?php
					$num++;
					}
				}
			?>
        </table>
        
       <br>
      <a href="index.php"><input name="back" type="button" class="btn btn-default btn-lg" value="Back">
        
        </form>
		<!-- end id-form  -->
        	</div>		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	</table>
</div>
<!--  end content -->
</div>
<!--  end content-outer........................................................END -->
      
    </div>
  </div>
</div>

</body>
</html>