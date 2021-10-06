<?php
  // Définir une variable pour indiquer l'identifiant de la page
  $page = 'menu';

  // Inclure le haut de page commun ici
  include('inclusions/entete.php');

  //inclure la librarie de gestion des citations 
  include('lib/citations.lib.php');
  //Faire appel < la fonction citationAleatoire

  $citationAlea = citationAleatoire($page, $langueChoisie);

  /*
  Gestion de l'affichage dynamique du menu
  */
  // Lire le fichier JSON contenant le menu dans la langue courante
  //utiliser file_exists() si une langue non-traduite est choisie
  $menuTexte = file_get_contents("data/menu-$langueChoisie.json");
  // Décoder le code JSON en tableau PHP
  $menuTableau = json_decode($menuTexte, true);
  
?>
    <div class="contenu-principal">
      <div class="citation">
        <img src="images/menu-citation.jpg" alt="">
        <blockquote>
         <?= $citationAlea['texte']; ?>
          <cite>- <?= $citationAlea['auteur']; ?></cite>
        </blockquote>
      </div>
      <div class="carte">
      <?php  foreach($menuTableau as $TitreSection => $PlatsSection){?>

        <section>
          <h2><?= $TitreSection; ?></h2>
          <ul>
           <?php foreach($PlatsSection as $plat){ ?>

            <li>
              <span><?= $plat['nom']; ?><br><i><?= $plat['desc']; ?></i></span>
              <span class="prix"><i class="article-menu-portion"><?= $mnu_portions; ?><?= $plat['portion']; ?></i><?= $plat['prix']; ?></span>
            </li>

            <?php } ?>
          </ul>
        </section>

      <?php } ?>
        
      </div>
    </div>
<?php
  // Inclure le pied de page commun ici
  include('inclusions/pied2page.php');
?>