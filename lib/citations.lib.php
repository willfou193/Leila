<?php
//Fonctions reliées aux ciations

function citationAleatoire($section, $langue){
  //Étape 1 : lire le fichier JSON dans un chaine de caractères.
  $citationChaineJson = file_get_contents('data/citations-'.$section.'.json');
  //Étape 2 : transformer la chaine json en tableau PHP
  $citationsToutes = json_decode($citationChaineJson, true);
  //Étape 3 : sélectionner les citations dans la langue choisie;
  //Attention : corriger le code pour utiliser les citations 
  //en français s'il n'y en a pas dans la langue sélectionnée
  $citationsLangueChoisie = isset($citationsToutes[$langue]) 
                        ? $citationsToutes[$langue] : $citationsToutes ['fr'];
  //Étape 4 : choisir une position au hasard
  $posCitationAleatoire = array_rand($citationsLangueChoisie);
  //echo position aleatoire;
  return $citationsLangueChoisie[$posCitationAleatoire];
  //Retourner la valeur de la citation choisie
  
}
?>