<?php

include 'header.php';

if ($_SERVER['REQUEST_METHOD'] == "POST")
{

$name=$_POST['name'];
$description=$_POST['description'];
$added_by=$_POST['added_by'];

$query = "INSERT INTO `house_objects` (`id`, `name`, `description`, `status`, `added_by`, `container_id`) VALUES ('','$name','$description','In House','$added_by',0)";
include './database_connect.php';

if($result){
print("
    <div class='alert alert-success'>
        Success! Your item has been added to the database! Add another if ya fancy.
    </div>


    ");
} else {
print("
    <div class='alert alert-error'>
        Failure! Something went very wrong! Try again?
    </div>


    ");
}

}?>


    <div class="row-fluid">
        <div class="span4">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <fieldset>
            <legend>Add Item To Database</legend>
            <label>Name of Item</label>
            <input type="text" name="name" class="span12" placeholder="Type name of item...">
            <label>Description</label>
            <textarea name="description" class="span12" rows="5"></textarea>
            <label>Your Name</label>
            <input type="text" name="added_by"  class="span12" placeholder="Type your name here...">
            <p><input type="submit" class="btn span12"></p>
            </fieldset>
        </form>
    </div>
    </div>
<?php include 'footer.php'; ?>