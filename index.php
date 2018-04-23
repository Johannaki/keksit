<!DOCTYPE HTML>
<html lang="en">
   <head>
     <meta charset="UTF-8">
     <title></title>

     <?php
     /*
     $nimi = 'Pekka';
     $salasana = 'ki55a';

     if(isset($_POST['submit'])){
       if (isset($_POST['nimi']) && isset($_POST['salasana')) {
         if (($_POST['nimi'] == $nimi) && ($_POST['salasana'] == $salasana))
       } else {
         echo "No nyt meni jotain mönkään. Yritä uudestaan.";
       }
     }
     */
     ?>

     <style>
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
