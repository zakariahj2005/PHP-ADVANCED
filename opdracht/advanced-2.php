<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:<?php echo $_POST['achtergrondkleur']; ?>; color:<?php echo $_POST['tesktkleur'];  ?>; border-radius: <?php echo $_POST ['border']; ?>">
<style>
    table, th, td{
        border: 1px solid white;
    }
</style>
<table>
<?php 
$info = array("naam" => "Zakaria ", "leeftijd"=> "16 ", "muzieksmaak"=> "rap ", "woonplaats"=> "Amsterdam ", "sport"=> "waterpolo");
foreach ($info as $key => $value) {
    echo "<tr>";
    echo "<th>" . $key . "</th>" . "<th>" . $value . "</th>";
}
?>

</table>
    </body>
</html>
