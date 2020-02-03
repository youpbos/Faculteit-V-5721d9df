<?php
echo "Van welk getal wil je de faculteit weten?" . PHP_EOL;
$a = readline("");
$i = 1;
$ant = 1;

while($i <= $a){
    $ant = $i * $ant;
    $i++;
}

echo $ant;
?>