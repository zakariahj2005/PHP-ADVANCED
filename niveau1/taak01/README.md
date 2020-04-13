# MODULENAAM-TAAK-NR

> Bijvoorbeeld:  
> PHP-Advanced-Niveau1-Taak1

## Titel

Geef de taak een pakkende titel.
> Bijvoorbeeld:  
>
> ## Associative Arrays

## Uitleg

In PHP-Basic hebben we al kennis gemaakt met numerieke array's. Dit zijn array's waarbij elke waarde van de array is aan te roepen met een getal. Bijvoorbeeld

$studenten = array("Piet", "Mohammed", "Els"); 

Als we de naam Mohammed willen tonen op het scherm zouden we dat als volgt kunnen doen (let op: een numerieke array begint bij het getal 0):

echo $studenten[1];


Een associative array gebruikt geen getallen maar relevante woorden. Bijvoorbeeld:

$lengte['Piet'] = 187;
$lengte['Mohammed'] = 184;
$lengte['Els'] = 168;

Als we de lengte van Els zouden willen tonen in een zin, zouden we dit als volgt kunnen doen:

echo “De lengte van Els is ”. $lengte['Els'] . “ centimeter”;

Een andere manier om dezelfde array te vullen is als volgt:

$lengte = array("Piet"=>187, "Mohammed"=>184, "Els"=>168);

## Leerdoelen

1. Ik weet het verschil tussen een numerieke- en een associative array
2. Ik kan een associative array aanmaken en vullen
3. Ik kan een associative array gebruiken om iets op een scherm te tonen

## Opdracht

Duidelijke tekst die uitlegd wat de student moet precies moet doen. Eventueel onderverdeelt.
> Voorbeeld:  
>  
> 1. Schrijf code in `index.php` die de functie genaamd `mijnEerstefunctie` aanroept.
> 2. Pas de functie `mijnEersteFunctie` zo aan dat aan de tekst die getoond wordt in je browser een uitroepteken wordt toegevoegd.

## Eindresultaat

Duidelijk maken hoe het succesvol maken van de taak eruit ziet. Dit kan tekstueel of liever als mogelijk met gebruik van screenshots / filmpjes  
> Voorbeeld:  
> Als je de functie goed uitvoert wordt de volgende tekst getoond in je browser: "functie uitgevoerd"  

## Bronnen

Een lijstje van links naar externe bronnen
> Bijvoorbeeld:  
>[W3 Schools - PHP Functions](https://www.w3schools.com/php/php_functions.asp)  
>[Jaap van der Veen - PHP Basiscursus Les3: Functies](https://phpbasis.jaapvdveen.nl/basiscursus-php/les-3-inleiding-functies/)  
