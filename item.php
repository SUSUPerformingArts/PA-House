<?php

include 'header.php';

$id = $_GET['id'];
$query="SELECT * FROM `house_objects` WHERE id='$id'";
include "database_connect.php";

	$id=mysql_result($result,$i,"id");
	$name=mysql_result($result,$i,"name");
	$description=mysql_result($result,$i,"description");
	$status=mysql_result($result,$i,"status");
	$added_by=mysql_result($result,$i,"added_by");
	$container_id=mysql_result($result,$i,"container_id");
	$imageURL=mysql_result($result,$i,"imageURL");
	echo 'test';
	$item = new HouseItem($id,$name,$description,$status,$added_by,$container_id,$imageURL);
	echo 'test';
	$item->displayName("h2");
	echo 'Added By: ';
	$item->displayAddedBy();
	echo '<div class="row">';
		echo '<div class="span4">';
			$item->displayThumbnail();
		echo '</div>';//span4
		echo '<div class="span8">';
			$item->displayDescription();
		echo '</div>';//span8
	echo '</div>';//row
?>

<?php include 'footer.php'; ?>