<?php
//including the database connection file
include_once("Crud.php");

$crud = new Crud();

//getting id of the data from url
$id = $crud->escape_string($_GET['slno']);

//deleting the row from table
//$result = $crud->execute("DELETE FROM users WHERE id=$id");
$result = $crud->delete($id, 'iddata');

if ($result) {
    //redirecting to the display page (index.php in our case)
    echo "<br/><a href='javascript:self.history.back();'>Go Back</a> <br>"; 
    echo "<font color='green'>Data Deleted successfully.";
    echo "<br/><a href='iddata.php'>View Result</a>";
}
?>