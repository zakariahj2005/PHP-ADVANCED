<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<fieldset>
    <h3> vul in de formulier!</h3>
    <form action="advanced-2.php" method="post">
        
    <label   for="testkleur">Tesktkleur </label>   
    
    <select name="tesktkleur">
        <option value="red">Red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value="black">black</option>
        <option value="brown">brpwn</option>
    </select>
    <br>
    <label   for="achtergrondkleur">achtergrondkleur </label>   
    
    <select name="achtergrondkleur">
        <option value="red">Red</option>
        <option value="blue">blue</option>
        <option value="green">green</option>
        <option value="black">black</option>
        <option value="brown">brpwn</option>
    </select>
    <br>
    <input type="text" name="border">


        <input type="submit"></input>

    </form>

    <br>

</fieldset>

<?php
        $kleuren = array("red", "blue", "green", "black", "brown");
        foreach($kleuren as $kleur){

        } 
        ?>  
</form>
</body>
</html>



