<?php include 'header.php'; 
include 'house_functions.php'; ?>
<?php

$id = $_GET['id'];
$query="SELECT * FROM `house_objects` WHERE id=$id";
include "database_connect.php";
?>
<div class="row-fluid">
    <div class="alert alert-error">
    	<h1> WARNING:</h1><h4> This will permanently delete the item from the database are you sure you want to do this?</h4>
    </div>
</div>
<div class="row-fluid">
<?php
$query="SELECT * FROM `house_objects` WHERE id=$id";
include "database_connect.php";
	$name=mysql_result($result,0,"name");
	$description=mysql_result($result,0,"description");
	$status=mysql_result($result,0,"status");
	$added_by=mysql_result($result,0,"added_by");
	$container_id=mysql_result($result,0,"container_id");

	echoItem($name, $description, $status, $added_by, $container_id);
    ?>
</div>
<div class="row-fluid">
	<hr/>
<p>
<a href="deleteitemfinal.php?id=<?php echo $id;?>" class="btn btn-large btn-danger" type="button">Yes, delete this item.</a>
</p>
</div>


<?php include 'footer.php';  ?>