<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADMIN || Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS\bootstrap.min.css">
    <link rel="stylesheet" href="CSS\Style.css\">
    <link rel="stylesheet" href="CSS\bootstrap-icons.css">
  <script src="JS\jquery.min.js"></script>
  <script src="JS\bootstrap.min.js"></script>
  <script src="JS\bootstrap.bundle.min.js"></script>
  <script src="JS\Script.js"></script>
  <style>
  .container{
	  color: black;
  }
  </style>
</head>
<body>
<style>
  body
  {
    color:white;
  }
  label
  {
    font-family:verdana;
  }
</style>
<div class="container mt-4">
<div class="img-reg text-center">
  <img src="../IMAGES/comment-2.png" alt="" width="100" height="100">
  <h2>Login Admin</h2>  
</div>    
  <form class="form-horizontal" action="admin.php" method="post">
  
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
    <div class="form-group mt-3">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default bg-success text-light">Login</button>
    <button type="reset" class="btn btn-default bg-success text-light">Reset</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>



