<!DOCTYPE html>
<?php
  $firstName = htmlspecialchars ($_POST["first-name"]);
  $lastName = htmlspecialchars ($_POST["last-name"]);
  $email = htmlspecialchars ($_POST["email"]);
  $password = htmlspecialchars ($_POST["password"]);
  $reenteredPassword = htmlspecialchars ($_POST["reentered-password"]);
  ?>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    username: <?php echo $firstName; echo $lastName; ?><br />
    e-mail: <?php echo $email ?><br />


  </body>
</html>
