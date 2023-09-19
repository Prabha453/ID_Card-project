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
    <title>ADD || USERS</title>
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
<?php include "admin-header.php"; ?>
<div class="img-reg text-center bg-secondary text-light p-3">
  <h2>ADD USERS</h2>
</div>
<div class="container mt-4">      
  <form class="form-horizontal" action="add-user-det.php" method="post">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="uname">User Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uname" placeholder="Enter name" name="uname" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="uemail">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="uemail" placeholder="Enter mail" name="uemail" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="upass">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="upass" placeholder="Enter password" name="upass" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="uphone">Phone:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="uphone" placeholder="Enter phone" name="uphone" required>
      </div>
    </div>
    <div class="form-group mt-3">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default bg-success text-light">Submit</button>
        <button type="reset" class="btn btn-default bg-success text-light">Reset</button>
        <a href="index.php" class="btn btn-default bg-danger text-light">Cancel</a>
      </div>
    </div>
  </form>
</div>
<?php include "admin-footer.php"; ?>
</body>
</html>



