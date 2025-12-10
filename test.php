<?php
function numero(string $a): array {
    // Vérification si la chaîne est vide
    if (trim($a) === '') {
        echo "Aucun argument reçu\n";
        return [];
    }

    $resultat = [];
    $longueur = mb_strlen($a, 'UTF-8');
    for ($i = 0; $i < $longueur; $i++) {
        $caractere = mb_substr($a, $i, 1, 'UTF-8');
        $resultat[] = $caractere;
    }

    return $resultat;
}
?>