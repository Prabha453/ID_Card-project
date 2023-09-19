<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file

include_once("Crud.php");

$crud = new Crud();

if(isset($_POST['Submit'])) {   
    $orgname = $_POST['orgname'];
    $orgAddr = $_POST['orgAddr'];
    $scnum = $_POST['scnum'];
    $prolno = $_POST['prolno'];
    $pname = $_POST['pname'];
    $pstand = $_POST['pstand'];
    $dob = $_POST['dob'];
    $pphone = $_POST['pphone'];
    $paddress= $_POST['paddress'];
    $pblood = $_POST['pblood'];
    $temp1 = $_FILES['logoimg']['tmp_name'];
    $pimg1 = 'uploads/'.$_FILES['logoimg']['name'];
    move_uploaded_file($temp1, '../uploads/' .$_FILES['logoimg']['name']);
    $temp = $_FILES['img']['tmp_name'];
    $pimg = 'uploads/'.$_FILES['img']['name'];
    move_uploaded_file($temp, '../uploads/' .$_FILES['img']['name']);

        //insert data to database   
        $result = $crud->execute("INSERT INTO iddata(orgName,orgAddress,orgPhone,prollno,pname,pposition,dob,pphone,paddress,pblood,orglogo,pphoto) VALUES 
        ('$orgname','$orgAddr','$scnum','$prolno','$pname','$pstand','$dob','$pphone','$paddress','$pblood','$pimg1','$pimg')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
    else{
        echo "Please Enter Valid Values.";
    }
    ?>
</body>
</html>