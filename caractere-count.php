<?php

function numero(string $a): array {
    
    if ($a === '') {
    echo "Aucun argument reçu";
    return [];
    }
    $longueur = mb_strlen($a);
    $resultat = [];
    for ($i = 0; $i < $longueur; $i++) {
        $caractere = mb_substr($a, $i, 1);
        $resultat[] = $caractere;
        }
        return $resultat; 
    }