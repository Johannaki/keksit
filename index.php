
<?php

$nimi = 'Pekka';
$salasana = 'ki55a';

if(isset($_POST['submit'])){
  if (isset($_POST['nimi']) && isset($_POST['salasana'])) {
    if (($_POST['nimi'] == $nimi) && ($_POST['salasana'] == $salasana)){
      header('location: jee.php')
    }
  } else {
    echo "No nyt meni jotain mönkään. Yritä uudestaan.";
  }
} else {
    echo "No nyt meni jotain mönkään. Yritä uudestaan.";
  }
?>

<!DOCTYPE HTML>
<html lang="en">
   <head>
     <meta charset="UTF-8">
     <title></title>

     <style>
     body {background-color: #fff3ef; padding: 40px;}
     input {color: #17183b;}
     </style>
   </head>
   <body>
    <h2>Kirjaudu sisään </h2>
     <form name="login" method="post" action="jee.php">
       Käyttäjänimi: <input type="text" name="nimi"><br>
       Salasana: <input type="password" name="salasana"><br>
       <input type="submit" name="submit" value="Kirjaudu">
     </form>
   </body>
</html>
