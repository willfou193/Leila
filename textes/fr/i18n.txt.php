<?php
// Textes statiques du site du restaurant Leila

//Meta information sur la page
//Tableau associatif contenant les tirtes des pages
$titre = [
    "accueil" => "Bienvenue",
    "vins"    => "Carte des vins",
    "menu"    => "Menu"
];
//exemple d'utilisation
//Pour accder à la valeur "carte des vins", on écrit $titre ['vins']
$description = [
    "accueil" => "Bienvenue",
    "vins"    => "Carte des vins",
    "menu"    => "Menu"
];

// Entête
$ent_sousTitre = "CUISINE BISTRONOMIQUE";
$ent_heuresOuverture = "Ouvert aujourd'hui jusqu'à 23 h";
$ent_adresse = "275 rue Notre-Dame Est, Montréal, Québec";
$ent_telephone = "(514) 958-2580";

// Entête - Navigation principale
$ent_menuTitre = "Les menus";
$ent_vinsTitre = "Carte des vins";
$ent_reservationTitre = "Réservation en ligne - à venir";

// Pied de page
$pdp_info = "Info pratique";
$pdp_heuresOuverture1 = "Cuisine ouverte de 11 h à 22 h.";
$pdp_heuresOuverture2 = "Fermé le lundi.";
$pdp_etiquetteReservation = "Pour réservation : ";
$pdp_titreCarte = "Cliquez ici pour localiser le restaurant sur Google Maps";
$pdp_altCarte = "Carte";

// Accueil
$acc_titrePage = "Cuisine créative de saison";
$acc_introImgAlt = "En cuisine";
$acc_introP1 = "Cette maison feutrée située à deux pas du Centre des sciences de Montréal offre un charme indéniable. Sa déco coloniale et son cadre chic lui confèrent une atmosphère cosy et feutrée particulièrement appréciée d’une clientèle exigeante. Assisté en salle de son charmant partenaire Léandre, Clémentine Matuvu propose une cuisine très personnelle. Cheffe d’une insatiable curiosité, elle revisite ses classiques avec talent et n’hésite pas à sortir des sentiers battus tout en respectant les saisons et leurs produits avec le marché comme source d’inspiration. Très agréable jardin en saison.";
$acc_introP2 = "Un immeuble parmi les plus anciens de la ville dans... la rue Neuve, cela ne s'invente pas ! La cheffe, passionnée par son métier et le vin, joue à fond la carte de la « bistronomie », en misant sur des produits du marché de très belle qualité. Un délice... comme la terrasse estivale";

// Menu
/* 
    Le texte de cette section du site représente du *contenu dynamique* (et non pas des textes statiques), et sera géré plus tard dans le cours (une exception pour les 2 mots "pour" et "personnes" utilisés dans la description des plats, que je voudrais discuter avec vous en classe).
*/

// Carte des vins
$vin_frmEtiquette = "Recherche : ";
$vin_frmPlaceholder = "Par pays (exemples : Québec, France, Espagne)";
?>