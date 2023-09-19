

<?php
//including the database connection file
include_once("Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users ORDER BY uid DESC";
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
        padding:3px;
        border-radius:7px;
    }
</style>
    <table width='100%' border=0 class="text-center mt-3" cellpadding=2>
    <tr bgcolor='#CCCCCC'>
    <td>uid</td>
        <td>User Name</td>
        <td>Password</td>
        <td>Email Id</td>
        <td>Phone No</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php 
    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {       
        echo "<tr>";
        echo "<td>".$res['uid']."</td>";
        echo "<td>".$res['uname']."</td>";
        echo "<td>".$res['upass']."</td>";
        echo "<td>".$res['uemail']."</td>"; 
        echo "<td>".$res['uphone']."</td>";
        echo "<td><a href=\"edit-user.php?uid=$res[uid]\">Edit</a></td>";
        echo "<td><a href=\"delete-user.php?uid=$res[uid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";       
    }
    ?>
    </table>
</body>
</html>