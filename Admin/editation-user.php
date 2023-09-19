<?php
// including the database connection file
include_once("Crud.php");

$crud = new Crud();

if(isset($_POST['update']))
{   
    $id = $crud->escape_string($_POST['id']);
    $uname = $crud->escape_string($_POST['uname']);
    $uemail = $crud->escape_string($_POST['uemail']);
    $upass = $crud->escape_string($_POST['upass']);
    $uphone = $crud->escape_string($_POST['uphone']);
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a> <br>"; 
        //updating the table
        $result = $crud->execute("UPDATE users SET uname='$uname',uemail='$uemail',upass='$upass',uphone='$uphone' WHERE uid=$id");
        //redirectig to the display page. In our case, it is index.php
        echo "<font color='green'>Data Updated successfully.";
        echo "<br/><a href='users.php'>View Result</a>";
    }
?>