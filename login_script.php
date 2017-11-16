<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == 'admin')
{
    header('Location:admin.php');
    $_SESSION['failed'] = 0;
} 
else if ($username == 'user' && $password == 'user')
{
    header('Location:user.php');
    $_SESSION['failed'] = 0;
} 
else
{
    header('Location:index.php');
    $_SESSION['failed'] = 1;
}

?>
