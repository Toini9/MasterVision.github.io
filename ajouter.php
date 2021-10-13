<?php


/** 
 * Script de contrôle et d'affichage du cas d'utilisation "Ajouter"
 * @package default
 * @todo  RAS
 */
 
// Initialise les ressources nécessaires au fonctionnement de l'application

  $repVues = './vues/';
  require("./include/_bdGestionDonnees.lib.php");
  require("./include/_gestionSession.lib.php");
  require("./include/_utilitairesEtGestionErreurs.lib.php");
  // démarrage ou reprise de la session
  initSession();
  // initialement, aucune erreur ...
  $tabErreurs = array();
    




$file_name = $_FILES['file']['name'];
$file_name1 = $_FILES['file1']['name'];
$file_name2 = $_FILES['file2']['name'];
$file_name3 = $_FILES['file3']['name'];

$file_tmp_name = $_FILES['file']['tmp_name'];
$file_tmp_name1 = $_FILES['file1']['tmp_name'];
$file_tmp_name2 = $_FILES['file2']['tmp_name'];
$file_tmp_name3 = $_FILES['file3']['tmp_name'];

$unNomdir="Dossier_".$_POST["nom"]."_".$_POST["prenom"];

mkdir("files/$unNomdir", 0700);
mkdir("files/$unNomdir/ordonnance lunette", 0700);
mkdir("files/$unNomdir/ordonnance lentille", 0700);
mkdir("files/$unNomdir/mutuelle", 0700);

$file_dest = 'files/'.$unNomdir.'/ordonnance lunette/'.$file_name;
$file_dest1 = 'files/'.$unNomdir.'/ordonnance lentille/'.$file_name1;
$file_dest2 = 'files/'.$unNomdir.'/mutuelle/'.$file_name2;
$file_dest3 = 'files/'.$unNomdir.'/mutuelle/'.$file_name3;


$file_url = $file_dest;



move_uploaded_file($file_tmp_name,$file_dest);
move_uploaded_file($file_tmp_name1,$file_dest1);
move_uploaded_file($file_tmp_name2,$file_dest2);
move_uploaded_file($file_tmp_name3,$file_dest3);





// DEBUT du contrôleur ajouter.php

if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  $etape = 2;
  $unNom=$_POST["nom"];
  $unPrenom=$_POST["prenom"];
  $uneAdresse=$_POST["adresse"];
  $unCodepostal=$_POST["cd_postal"];
  $unTel=$_POST["tel"];
  $unMail=$_POST["mail"];
  $unUrl=$_POST["file"];

  ajouter($unNom, $unPrenom, $uneAdresse, $unCodepostal, $unTel, $unMail,$unUrl,$tabErreurs);

  
}

// Début de l'affichage (les vues)


include($repVues."erreur.php");
include($repVues."vAjouterForm.php");

?>
  
