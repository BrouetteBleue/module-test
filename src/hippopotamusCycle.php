<?php

require_once 'hippopotamus.php';


$hippo = new Hippopotamus("Jules", 1500, 50);
$days = 21; // 3 semaines

for ($day = 0; $day < $days; $day++) {
    echo "Jour: " . ($day + 1) . "<br>";
    echo "Hippopotame: " . $hippo . "<br>";

    for ($i = 0; $i < 15; $i++) {
        $hippo->eat();
        $hippo->eat();
        
        for ($j = 0; $j < 3; $j++) {
            $hippo->swim();
        }

        // Attendre une heure (3600 secondes) avant de recommencer
       // sleep(1);
    }

    // Attendre 24 heures (86400 secondes) avant de passer au jour suivant
    //sleep(1);
}