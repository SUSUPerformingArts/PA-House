<?php include 'header.php'; ?>

<?php
$id = $_GET['id'];
$query="DELETE FROM `house_objects` WHERE id=$id";
include 'database_connect.php';

if($result)
{
	echo '
<div class="row-fluid">
    <div class="alert alert-success">
    	<h1> Confirmed:</h1><h4> Item '.$id.' has been removed from the data base.</h4>
    </div>
</div>
';
}
else{
		echo '
<div class="row-fluid">
    <div class="alert alert-error">
    	<h1> Failure:</h1><h4> Something went wrong.</h4>
    </div>
</div>
';
}