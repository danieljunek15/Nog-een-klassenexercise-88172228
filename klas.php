<?php
echo "> ewa neef gabbertje van me wie zitten er alemaal in je klas.". PHP_EOL;
$finish = explode(" ", readline());
echo "> Jow je mattie's in de klas zijn deze gozers.". PHP_EOL;
foreach($finish as $naam) {
    echo "> $naam". PHP_EOL;
    $i++;
}
echo "> Zo veel mattie's heb je $i";