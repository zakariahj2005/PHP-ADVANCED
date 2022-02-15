<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_POST['kleur'];?></title>
    
</head>
<body>
    <body style="background-color:<?php echo $_POST['kleur']; ?>"></body>
    
    <?php
echo $_POST["voornaam"];
echo "<br>";
echo $_POST["achternaam"];
echo "<br>";
echo $_POST["klas"];
echo "<br>";
echo $_POST["leeftijd"];
echo "<br>";
echo $_POST["adres"];
echo "<br>";
echo $_POST["plaatsnaam"];
echo "<br>";
echo $_POST["favoriete_muziekband"];
echo "<br>";
echo $_POST["geslacht"];
?>

</body>
</html>


