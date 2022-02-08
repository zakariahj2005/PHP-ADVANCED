<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
echo "<ul>";
  echo "<select>";
    foreach ($klassen as $klas){
        echo "<li> <option value='$klas'>$klas</option> </li>";
    }
  echo "</select>";
echo "</ul>";
?>