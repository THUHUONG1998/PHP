<?php
//print_r($_POST); in ra mang 
$password= $_POST["password"];
$repassword= $_POST['confirm_password'];
if($password==$repassword){
    die("Loi");
}
echo $_POST["name"];
?>