<?php include 'header.php'; 
include 'house_functions.php'; ?>

<div class="fluid-row">
	<h3>Items in House</h3>
</div>
<div class="fluid-row">
	<ul class="nav nav-tabs">
  <li>
    <a href="listitem.php">As Table</a>
  </li>
  <li class="active"><a href="#">As Thumbnails</a></li>
</ul>



<?php
$query="SELECT * FROM `house_objects`";
include "database_connect.php";

$num=mysql_numrows($result);
$i=0;

while($i < $num)
{
	$id=mysql_result($result,$i,"id");
	$name=mysql_result($result,$i,"name");
	$description=mysql_result($result,$i,"description");
	$status=mysql_result($result,$i,"status");
	$added_by=mysql_result($result,$i,"added_by");
	$container_id=mysql_result($result,$i,"container_id");
	$imageURL=mysql_result($result,$i,"imageURL");
	echo "<div class='span3'>";
    echoItem($id, $name, $description, $status, $added_by, $container_id, $imageURL);
    echo '</div>';

	$i++;
}
?>   
    </table>

</div>
<?php include 'footer.php'; ?>