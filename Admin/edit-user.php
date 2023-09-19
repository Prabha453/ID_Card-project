<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS\bootstrap.min.css">
    <link rel="stylesheet" href="CSS\Style.css\">
    <link rel="stylesheet" href="CSS\bootstrap-icons.css">
  <script src="JS\jquery.min.js"></script>
  <script src="JS\bootstrap.min.js"></script>
  <script src="JS\bootstrap.bundle.min.js"></script>
  <script src="JS\Script.js"></script>
    <title>EDIT USER</title>
</head>
<body>
<style>
  body
  {
    color:black;
    
  }
  label
  {
    font-family:verdana;
  }
</style>
<?php
// including the database connection file
include_once("Crud.php");

$crud = new Crud();

//getting id from url
$id = $crud->escape_string($_GET['uid']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM users WHERE uid=$id");

foreach ($result as $res) {
    $uname = $res['uname'];
    $uemail = $res['uemail'];
    $upass = $res['upass'];
    $uphone = $res['uphone'];
}
?>
<div class="container mt-4">
<div class="img-reg text-center">
  <h2>Edit User Data</h2>
  <p>You can Edit here.</p> 
</div>
             
  <form class="form-horizontal" action="editation-user.php" method="post">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="uname">User Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uname" value="<?php echo $uname ?>" placeholder="Enter name" name="uname" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="uemail">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="uemail" value="<?php echo $uemail ?>" placeholder="Enter mail" name="uemail" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="upass">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="upass" value="<?php echo $upass ?>" placeholder="Enter password" name="upass" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="uphone">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uphone" value="<?php echo $uphone ?>" placeholder="Enter phone" name="uphone" required>
      </div>
    </div>
    <div class="form-group mt-3">        
      <div class="col-sm-offset-2 col-sm-10">
      <td><input type="hidden" name="id" value=<?php echo $_GET['uid'];?>></td>
        <button type="submit" class="btn btn-default bg-success text-light" name="update">Update</button>
        <a href="users.php" class="btn btn-default bg-danger text-light">Cancel</a>
      </div>
    </div>
  </form>
</div>
</body>
</html>



