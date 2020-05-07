# PHP-Advanced-Functions-Taak-01


## Functions


## Uitleg

In de module PHP Basic is er een introductie geweest over het gebruik van functies in PHP. Dit waren functies die konden worden aangeroepen met de functienaam en twee haakjes. 

Een voorbeeld hiervan is:

~~~javascript
<?php

function schrijfNaam() {

  echo "Mijn naam is Bert";

}


// de functie uit laten voeren:

schrijfNaam();

?>
~~~


Iedere keer dat je deze functie aanroept, gebeurt er hetzelfde. Er wordt naar het scherm geschreven “Mijn naam is Bert”;

Je kunt functies ook ‘slimmer’ maken, door ze extra informatie mee te geven. Zogenaamde parameters. Dit is te zien als een variabele, die binnen de functie kan worden gebruikt.

Voorbeeld:

~~~php
<?php

function schrijfNaam( $naam ) {

  echo "Mijn naam is $naam";

}


// de functie uit laten voeren:

schrijfNaam(“Bert”);
‘

?>
~~~
Op deze manier kun je de functie schrijfNaam dus gebruiken voor vele namen. Als je een andere naam wilt tonen op het scherm, roep je dezelfde functie aan met een andere naam:



~~~php
<?php

schrijfNaam(“Bert”);

schrijfNaam(“Mohammed”);

schrijfNaam(“Lisa”);

?>
~~~


## Leerdoelen

. [ ] 
. [ ] 
. [ ] 
. [ ] 


## Opdracht


. [ ] 
. [ ] 
. [ ] 
. [ ] 


## Eindresultaat

![Eindresultaat](https://github.com/ROC-van-Amsterdam-College-Amstelland/PHP-ADVANCED/blob/master/3-Forms/taak02/images/reslutaat.png)

## Bronnen

> [W3 Schools - PHP Functions](https://www.w3schools.com/php/php_functions.asp)

