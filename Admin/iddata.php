

<?php
//including the database connection file
include_once("Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM iddata ORDER BY user_id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\bootstrap.min.css">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="CSS\bootstrap-icons.css">
  <script src="JS\jquery.min.js"></script>
  <script src="JS\bootstrap.min.js"></script>
  <script src="JS\bootstrap.bundle.min.js"></script>
  <script src="JS\Script.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Admin</title>
</head>
<body>
<style>
    td a{
      
        color:white;
        text-decoration: none;
        background-color:red;
        padding:10px;
        border-radius:10px;
    }
</style>
    <table width='80%' border=0 class=" table text-center mt-3" cellpadding=2 >
    <tr bgcolor='#CCCCCC'>
    <td>UserId</td>
    <td>Sl.No</td>
    <td>CampusLogoImg</td>
        <td>CampusName</td>
        <td>CampusAddress</td>
        <td>CampusPho.No</td>
        <td>PersonImg</td>
        <td>Name</td>
        <td>Dep/Standard</td>
        <td>DOB</td>
        <td>RollNo</td>
        <td>BloodGroup</td>
        <td>PhoneNo</td>
        <td>Address</td>
        <td>Edit</td>
        <td>Delete</td>

    </tr>
    <?php 
    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {       
        echo "<tr>";
        echo "<td>".$res['user_id']."</td>";
        echo "<td>".$res['slno']."</td>";
        echo "<td>
        <img src='/ID CARD/".$res['orglogo']."' height=50 width=50>
        </td>";
        echo "<td>".$res['orgName']."</td>";
        echo "<td>".$res['orgAddress']."</td>";
        echo "<td>".$res['orgPhone']."</td>"; 
        echo "<td>
        <img src='/ID CARD/".$res['pphoto']."' height=80 width=80></td>";
        echo "<td>".$res['pname']."</td>";
        echo "<td>".$res['pposition']."</td>";
        echo "<td>".$res['dob']."</td>";
        echo "<td>".$res['prollno']."</td>";
        echo "<td>".$res['pblood']."</td>";
        echo "<td>".$res['pphone']."</td>";
        echo "<td>".$res['paddress']."</td>";
        echo "<td><a href=\"edit.php?slno=$res[slno]\">Edit</a></td>";
        echo "<td><a href=\"delete.php?slno=$res[slno]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";       
    }
    ?>
    </table>
</body>
</html>