<?php

//     // Le PHP est langage faiblement typé
//    $uneVariable = 'Joachim';
//    var_dump($uneVariable);
//
//    $uneVariable = true;
//    var_dump($uneVariable);

    require_once 'classes/Compte.php';
    require_once 'classes/Personne.php';

    // Je cree une instance de Compte avec le mot clé new, ou je crée un nouvel objet de type Compte
    $cptKim = new Compte();

    //Je defini les valeurs des attributs de l'objet compte
    $cptKim->numero = "N°001";
    $cptKim->solde = 1000.5;
    var_dump($cptKim);

    echo '<br/>';

    $cptIlan = new Compte();
    $cptIlan->numero = "N°002";
    $cptIlan->solde = 2000;
    var_dump($cptIlan);

    echo '<br/>';

    $cptBilal = new Compte();
    $cptBilal->numero = "N°003";
    $cptBilal->solde = 6005;
    var_dump($cptBilal);

    echo '<br/>';

    $cptNikolic = $cptIlan;
    var_dump($cptNikolic);

    echo '<br/>';

    $cptNikolic->solde = 10000;
    var_dump($cptIlan);

    $a = 25;
    $b = $a;

    echo '<br/>';
    var_dump($a);

    echo '<br/>';
    var_dump($b);

    $a = "joachim";

    echo '<br/>';
    var_dump($a);

    echo '<br/>';
    var_dump($b);