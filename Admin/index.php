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
<style>
   .container a
    {
        font-family:Roboto;
        margin-top:30px;
    }
</style>
<body >
<?php include "admin-header.php" ?>
<div class="container text-center mt-5">
    <a href="userframe.php" class="btn w-50 text-white bg-dark p-4"><b>Users Details</b></a>
    <a href="iddataframe.php" class="btn w-50 text-white bg-dark p-4"><b>Identy Card Data's</b></a>
    <a href="add-user.php" class="btn w-50 text-white bg-dark p-4"><b>ADD Users</b></a>
    <a href="add1.php" class="btn w-50 text-white bg-dark p-4 "><b>ADD Identity Data</b></a>
    <a href="select-design-admin.php" class="btn w-50 text-white bg-dark p-4 mb-5"><b>Designs</b></a>
</div>
<?php  include "admin-footer.php" ?>
</body>
</html>