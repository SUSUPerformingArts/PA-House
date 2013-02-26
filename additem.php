<?php

include 'header.php';
?>

<?php
if(!empty($_POST)){
########   Basic Settings    ########
// Your Root Directory 
    $filename = "";
$base = "./";
//The Directory Where Files Will Be Uploaded
$dir = "/uploads/";
// Your Site URL
$url = "http://perform.susu.org/house";
####################################
$allowded = array("image/bmp","image/pjpeg" , "image/jpeg" , "image/gif" , "image/png" , "image/jpg");
$name = $_POST[name];
//$type = $_POST[type];
$rand = rand( 100 , 20000);
//echo $_FILES[file][type];
//echo'<br>';
//echo $_FILES[file][tmp_name];
//echo'<br>';
        if(empty($_POST[name])){
        echo "You Forgot To Fill the required Feild Please Fix The Error";
                                        }
        elseif(!in_array($_FILES[file][type] , $allowded)){
        echo "
    <div class='alert alert-error'>
       Un Expected File Format Only Images Supported
    </div>


    ";
                                            }
                 elseif($_FILES[file][size] >= 500000){
                 echo "
    <div class='alert alert-error'>
        Failure! Too Large File!!! Maximum File Size Allowded IS 500 kb!!
    </div>


    ";
                    }
                                            
                else{
             $filename = $name."_"."$type"."_".$rand."_".$_FILES[file][name];
                $file = $base.$dir.$filename;
                //echo $file;
             $upload = move_uploaded_file($_FILES[file][tmp_name] , $file);
                chmod($file , 0755);
                //echo $_FILES[file][size];
                if($upload){                
                
                
                        }
                }
    //}
//if ($_SERVER['REQUEST_METHOD'] == "POST")
//{


//$name=$_POST['name'];
$description=$_POST['description'];
$added_by=$_POST['added_by'];
//$dateAdded = CURDATE();

$query = "INSERT INTO  `perform`.`house_objects` (
`id` ,
`name` ,
`description` ,
`status` ,
`added_by` ,
`container_id` ,
`imageURL`
)
VALUES (
'', '$name', '$description', 'In House', '$added_by', '0' ,'$filename'
);
";

include './database_connect.php';


if($result){
print("
    <div class='alert alert-success'>
        Success! Your item has been added to the database! Add another if ya fancy.
    </div>


    ");
echo "ID: ".$id;
} else {
print("
    <div class='alert alert-error'>
        Failure! Something went very wrong! Try again?
    </div>


    ");
}

}
?>


    <div class="row-fluid">
        <div class="span4">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" name="form1" id="form1">
            <fieldset>
            <legend>Add Item To Database</legend>
            <label>Name of Item</label>
            <input type="text" name="name" class="span12" placeholder="Type name of item...">
            <label>Description</label>
            <textarea name="description" class="span12" rows="5"></textarea>
            <label>Select Your File : </label>
            <input type="file" name="file" />
            <label>Your Name</label>
            <input type="text" name="added_by"  class="span12" placeholder="Type your name here...">
            <p><input type="submit" class="btn span12"></p>
            </fieldset>
        </form>
    </div>
    </div>
<?php include 'footer.php'; ?>