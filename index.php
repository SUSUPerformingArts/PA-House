<?php include 'header.php'; ?>
    <div class="row-fluid">
        <div class="span2">
            <h3>Items:</h3>
        </div>
        <div class="span3">
            <p><a href="additem.php" class="btn btn-large btn-block btn-primary" type="button">Add Item</a></p>
        </div>
        <div class="span3">
            <p><a href="deleteitem.php" class="btn btn-large btn-block btn-danger" type="button">Delete Item</a></p>
        </div>
        <div class="span3">
            <p><a href="listitem.php" class="btn btn-large btn-block btn-primary" type="button">List All Items</a></p>
        </div>
        <div class="span3">
            <p><a href="listinhouseitem.php" class="btn btn-large btn-block btn-primary" type="button">List Items In House</a></p>
        </div>
        <div class="span3">
            <p><a href="listcheckedoutitem.php" class="btn btn-large btn-block btn-primary" type="button">List Items Checked Out</a></p>
        </div>
    </div>
    <hr/>
    <div class="row-fluid">
        <div class="span2">
            <h3>Rooms:</h3>
        </div>
        <div class="span3">
            <p><a href="roommap.php" class="btn btn-large btn-block btn-primary" type="button">View Room Map</a></p>
        </div>
        <div class="span3">
            <p><a href="listrooms.php" class="btn btn-large btn-block btn-primary" type="button">List Rooms</a></p>
        </div>
    </div>
<?php include 'footer.php'; ?>