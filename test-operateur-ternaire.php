<?php
    //Écrire une instruction conditionnelle simple en une courte expression à l'aide de l'opérateur ternaire de php
    $province = 'qc';
    $montant = 100;

    //conditionnelle traditionnelle
    /*
    if ($province == 'qc'){
        $montant = 1.15*$montant;
    }else {
        $montant = 1.05*$montant;
    }
    */

    //expression conditionnelle avec opérateur ternaire (si X alors ? sinon :)
    $montant = $province == 'qc'? 1.15*$montant : 1.05*$montant;

    echo "$montant $";
?>