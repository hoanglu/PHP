<?php
session_start();

if(isset($_POST['login'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
}
    
if(isset($_SESSION['username']) && isset($_SESSION['password']) )
{
    if($_SESSION['username'] == 'Hoang' && $_SESSION['password'] == '123'){
        
        $user = ' Hello   Username : '.$_SESSION['username'] ;
        unset($_SESSION['error']);
    } else {
        $_SESSION['error'] = 'Sai thông tin đăng nhập';
        header('Location:login.php');
    }

}  else {
    header('Location:login.php');
}
    


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng xuất</title>
        <meta charset="UTF-8">
        <link  href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div class="col-md-10"><?=$user?></div>
        <div class="col-md-2"><a href="">Logout</a></div>   
    </div>
    </body>
</html>