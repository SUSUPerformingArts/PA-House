<?php

function echoItem($name, $description, $status, $added_by, $container_id,$imageURL)
{
    echo '<p><div class="thumbnail">';
    if($imageURL=='')
    {
    echo '<img src="http://placehold.it/300x200" alt="">';
    } else {
        echo '<img src="./uploads/'.$imageURL.'" alt "">';
    }
    echo '<h3>'.$name.'</h3>';
    if($status=="In House")
    {
    	echo '<span class="label label-success">In House</span>';
    }
    elseif($status=="Checked Out")
    {
    	echo '<span class="label label-warning">Checked Out</span>';
    }
    elseif($status=="Missing")
    {
    	echo '<span class="label label-important">Missing</span>';
    }
    echo '<p>'.$description.'</p>';
echo'     <div class="btn-group">
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
    	echo '<li><a class="alert-error" href="retireitemconfirm.php?id='.$id.'">Retire Item</a></li>
    </ul>
    </div>';
    echo '</div></p>'; //thumbnail
}

function item_image($id){
    
}

?>