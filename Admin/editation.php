<?php
// including the database connection file
include_once("Crud.php");

$crud = new Crud();

if(isset($_POST['Update']))
{   
    $id = $crud->escape_string($_POST['id']);
    $orgname =$crud->escape_string($_POST['orgname']);
    $orgAddr = $crud->escape_string($_POST['orgAddr']);
    $scnum =$crud->escape_string($_POST['scnum']);
    $prolno = $crud->escape_string($_POST['prolno']);
    $pname =$crud->escape_string($_POST['pname']);
    $pstand = $crud->escape_string($_POST['pstand']);
    $dob =$crud->escape_string ($_POST['dob']);
    $pphone = $crud->escape_string($_POST['pphone']);
    $paddress= $crud->escape_string($_POST['paddress']);
    $pblood = $crud->escape_string($_POST['pblood']);
    $temp1 = $_FILES['logoimg']['tmp_name'];
    $pimg1 = 'uploads/'.$_FILES['logoimg']['name'];
    move_uploaded_file($temp1, '../uploads/' .$_FILES['logoimg']['name']);
    $temp =$_FILES['img']['tmp_name'];
    $pimg = 'uploads/'.$_FILES['img']['name'];
    move_uploaded_file($temp, '../uploads/' .$_FILES['img']['name']);
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a> <br>"; 
        //updating the table
        $result = $crud->execute("UPDATE iddata SET orgName='$orgname',orgAddress='$orgAddr',orgPhone='$scnum',prollno='$prolno',pname='$pname',pposition='$pstand',dob='$dob',pphone='$pphone', paddress='$paddress', pblood='$pblood',orglogo='$pimg1', pphoto='$pimg' WHERE uid=$id");
        //redirectig to the display page. In our case, it is index.php
        echo "<font color='green'>Data Updated successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
?>