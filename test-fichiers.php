<?php
    // exemples d'accès au système de fichier avec Php
    $contenuDossier = scandir('textes');

    print_r($contenuDossier);

    // Écrire une boucle et afficher uniquement les codes de langues
    /*
    for($i = 2; $i < count($contenuDossier); $i ++){
        if($contenuDossier[$i] != '.' && $contenuDossier[$i]; != '..'){
            echo $contenuDossier[$i];
            echo '<br>';
        }
      
    }
    */

    //Alternative : boucle 'foreach'
    foreach($contenuDossier as $nombreDossier){
        if($nombreDossier != '.' && $nombreDossier != '..'){
            echo '<br>';
            echo $nombreDossier;
            
        }
    }
?>