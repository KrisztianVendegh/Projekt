<?php
include_once('partials/header.php');
if(isset($_POST['user_login'])){
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $user_object = new User();

    $login_success = $user_object->login($email,$password);
    //ak metóda vráti TRUE
    if($login_success == true){
        header('Location: info.php');
        die;
    }else{
        echo 'Nesprávne meno alebo heslo';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>formular</title>
</head>
<body>
    
    <form id="contactForm" action="" method="POST">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required> 
        

        <input name="user_login" type="submit" value="Odoslať">
    </form>
    
</body>
</html>