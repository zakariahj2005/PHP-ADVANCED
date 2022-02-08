<?php 
echo "<ul>";
    for($beginwaarde = 0; $beginwaarde <= 18; $beginwaarde++){
        
        if($beginwaarde == 18){
            echo "<li> ik ben 18 jaar oud dus ik heb stemrecht! </li>";
        }
        else{
            echo " <li> ik ben $beginwaarde jaar, dus ik mag nog niet stemmen </li>";
        }
        
    }
echo "</ul>";
?>