<?php
$nimi = 'Pekka';
$salasana = 'ki55a';

if(isset($_POST['submit'])){
  if (isset($_POST['nimi']) && isset($_POST['salasana'])) {
    if (($_POST['nimi'] == $nimi) && ($_POST['salasana'] == $salasana)) {
      setcookie("nimi", $_POST['nimi'], time()+60*60*24);
      setcookie("salasana", ($_POST['salasana']), time()+60*60*24);
    }
  } else {
    echo "No nyt meni jotain mönkään. Yritä uudestaan.";
  }
} else {
  header('location: index.php');
}
?>

<!DOCTYPE HTML>
<html lang="en">
   <head>
     <meta charset="UTF-8">
     <title></title>

     <style>
     body {
       background-image: url("kissa.jpg");
     }
     </style>
   </head>
   <body>
   </body>
</html>
