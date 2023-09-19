<?php 
if(isset($_POST['submit']))
{
    $admin_id="prabhakaran31072001@gmail.com";
    $admin_pass="asprabha453";
    $admin_id_input=$_POST['uemail'];
    $admin_pass_input=$_POST['upass'];
    if($admin_id == $admin_id_input && $admin_pass == $admin_pass_input)
    {
        @include "index.php";
    }
    else{
        echo"Invalid Username OR Password...";
        header('Refresh: 2; URL =login-admin.php');
    }
}
?>