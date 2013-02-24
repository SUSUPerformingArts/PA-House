<?php include 'header.php'; 
?>

<div class="fluid-row">
	<h3>Items in Database</h3>
</div>
<div class="fluid-row">
	<ul class="nav nav-tabs">
  <li class="active">
    <a href="#">As Table</a>
  </li>
  <li><a href="listitemthumbs.php">As Thumbnails</a></li>
</ul>



<?php
$order = $_GET['order'];
/*if($order=='')
{
	$order="id";
}*/
$query="SELECT * FROM house_objects ORDER BY $order DESC";
include "database_connect.php";

$num=mysql_numrows($result);
$i=0;

//Print out table header
echo '<table class="table">';
echo '<thead>';
echo '<tr>';
echo $query;
echo '<td><a href="'.$_SERVER['PHP_SELF'].'?order=\'id\'">ID#</a></td>';
echo '<td><a href="'.$_SERVER['PHP_SELF'].'?order=\'name\'">Item Name</a></td>';
echo '<td><a href="'.$_SERVER['PHP_SELF'].'?order=\'description\'">Item Description</a></td>';
echo '<td><a href="'.$_SERVER['PHP_SELF'].'?order=\'status\'">Item Status</a></td>';
echo '<td><a href="'.$_SERVER['PHP_SELF'].'?order=\'added_by\'">Added by</a></td>';
echo '<td><a href="'.$_SERVER['PHP_SELF'].'?order=\'container_id\'">Container ID</a></td>';
echo '<td>Action</td>';
echo '</tr></thead>';

while($i < $num)
{
	$id=mysql_result($result,$i,"id");
	$name=mysql_result($result,$i,"name");
	$description=mysql_result($result,$i,"description");
	$status=mysql_result($result,$i,"status");
	$added_by=mysql_result($result,$i,"added_by");
	$container_id=mysql_result($result,$i,"container_id");

	$class='';

	if($status=="Checked Out")
	{
		$class="warning";
	}
	elseif($status=="Missing")
	{
		$class="error";
	}

	echo '<tr class="'.$class.'">';
		echo '<td>'.$id.'</td>';
		echo '<td>'.$name.'</td>';
		echo '<td>'.$description.'</td>';
		echo '<td>'.$status.'</td>';
		echo '<td>'.$added_by.'</td>';
		echo '<td>'.$container_id.'</td>';
		echo '<td>
    <div class="btn-group">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    Action
    <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">';

    if($status=="In House")
    {
    	echo '<li><a href="checkoutitem.php?id='.$id.'">Checkout</a></li>';
    }
    elseif($status=="Checked Out")
    {
    	echo '<li><a href="checkinitem.php?id='.$id.'">Checkin</a></li>';
    }
    if($container_id==0)
    {
    	echo '<li><a href="setcontainer.php?itemid='.$id.'">Add To Container</a></li>';
    }
    else
    {
    	echo '<li><a href="setcontainer.php?itemid='.$id.'">Change Container</a></li>';

    }	
    	echo '<li><a class="alert-error" href="deleteitemconfirm.php?id='.$id.'">Delete Item</a></li>
    </ul>
    </div>




		</td>';
	echo '</tr>';
	$i++;
}
?>   
    </table>

</div>
<?php include 'footer.php'; ?>