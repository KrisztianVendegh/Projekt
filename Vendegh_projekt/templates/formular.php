<?php
  include('partials/header.php');
  require_once('../_inc/functions.php');
  $user_object = new User();

  // Spracovanie údajov z formulára po odoslaní
  if(isset($_POST['user_register'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];

      // Kontrola, či sa zadané heslá zhodujú
      if($password === $confirm_password) {
          // Volanie metódy register() na vytvorenie používateľa
          if($user_object->register($email, $password)) {
              // Registrácia bola úspešná
              echo "<p>Registrácia bola úspešná. Teraz sa môžete prihlásiť.</p>";
          } else {
              // Registrácia zlyhala
              echo "<p>Registrácia zlyhala. Skúste to prosím znova.</p>";
          }
      } else {
          // Heslá sa nezhodujú
          echo "<p>Heslá sa nezhodujú. Skúste to prosím znova.</p>";
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

        <label for="password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
       
        

        <input name="user_register" type="submit" value="Odoslať">
    </form>
    

</body>
</html>
