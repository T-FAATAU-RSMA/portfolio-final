<?php
include ('class/classImage.php');
include ('class/link.class.php');

// FUNCTION IMPORTATION D'IMAGE

// instance object img
$classImg = new Image();

// Si $_FILES n'est pas vide
if (!empty($_FILES)) {
// alors ça va dedans
// Je récupére mon input 'img'
$img = $_FILES['img'];
// Je récupére mon input 'p_description'
$p_description = $_POST['p_description'];

//On alimente img_description = propriété de la class Description 
$classImg->img_description = $p_description;
//On alimente img_name = propriété de la class Image
$classImg->img_name = $img['name'];

// strtolower met en minuscule une chaine de caractère 
// substr permet sert à nettoyer une chaine de caractère 
    // -3 = permet de récupérer les 3 dernier caractére 
$ext = strtolower(substr($img['name'],-3));
// récupère ce qui est dans le array ('jpg','png',etc...)
$allow_ext = array('jpg', 'png','gif');

// $ext = mot ou chaine de caractere
// $allow_ext = tableau 
// in array = CHERCHER DANS LE TABLEAU si $ext existe dans le tableau $allow_ext
// Si c'est positif sa éxécute ce qu'il y a à l'intérieur
if (in_array($ext,$allow_ext)){
    // 1er param :Sa ne change pas
    //  2eme param : Le lieux ou en veut stocker l'image
    move_uploaded_file($img['tmp_name'],"img/".$img['name']);
// Sinon 
}else{
    $erreur = "Votre fichier n'est pas pris en charge";
}

// éxécute la fonction classImg
$classImg->createImg();
}
// éxécute la  fonction list_img
$list_img = $classImg->getImg();

// =========================
// gestion des boutons
// =========================


// FUNCTION FORMULAIRE DE CREATION DE PROJETS  


// instancier OU appeler une class (object)
$dblink = new dblink();

// =========================
// gestion des boutons
// =========================
if (isset($_POST['btn'])) {

// si bouton == supprimer
if ($_POST['btn'] == "Supprimer") {
    $etat = "fermer";

    // je récupère mon formulaire supprimer
    $id = $_POST['id_link'];

    // j"execute ma requête supprimer
    // dans ma fonction deleteDblink
    $dblink->deleteDblink($id);
}

if ($_POST['btn'] == "Modifier") {
    $etat = "ouvrir";
    $id_click = $_POST['id_link'];
}

if ($_POST['btn'] == "Confirmer") {
    $etat = "fermer";
    $new_nom = $_POST['new_nom'];
    $new_git = $_POST['new_git'];
    $new_site = $_POST['new_site'];
    $id_link = $_POST['id_link'];

    $dblink->updateDblink($new_nom, $new_git, $new_site, $id_link);
}


if ($_POST['btn'] == "Valider") {

    $etat = "fermer";

    // récupérer les valeurs 
    $nom = $_POST['nom']; //Variable $nom contient les données de l'input 'nom'

    $git = $_POST['git']; //Variable $git contient les données de l'input 'git'

    $site = $_POST['site']; //Variable $site contient les données de l'input 'site'

    $dblink->createDblink($nom, $git, $site);
}
} else {

    $etat = "fermer";
}

// j'affiche ma liste
$res_listlink = $dblink->getDblink();

?>

