<?php

require 'Personne.php';

$nicolas = new Personne("Nicolas", "Tesla", "Smiljan", "10-07-1856");

$nicolas->setAdresse("34, St-Penn Station");

echo $nicolas->getInfo();
echo "<br/>";
echo $nicolas->getAge();
