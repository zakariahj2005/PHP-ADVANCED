<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php



function rekenUit($nummer1, $nummer2, $nummer3){
    $antwoord = $nummer1 + $nummer2 + $nummer3;

    return $antwoord;
}

echo "als ik de getallen 4, 2 en 9 is de uitkomst " . $antwoord = rekenUit(4, 2 ,9) . '<br>';

echo "als ik de getallen 1, 2 en 3 is de uitkomst " . $antwoord = rekenUit(1, 2 ,3) . '<br>';

echo "als ik de getallen 40, 28 en 91 is de uitkomst " . $antwoord = rekenUit(40, 28 ,91);


?>
</body>
</html>