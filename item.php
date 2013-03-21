<?php

include 'header.php';

	$id = $_GET['id'];
	$query="SELECT * FROM `house_objects` WHERE id='$id'";
	include "database_connect.php";
	$item = new HouseItem($result, 0);
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