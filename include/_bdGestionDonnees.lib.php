<?php

// FONCTIONs POUR L'ACCES A LA BASE DE DONNEES
// Ajouter en têtes 
// Voir : jeu de caractères à la connection

/** 
 * Se connecte au serveur de données                     
 * Se connecte au serveur de données à partir de valeurs
 * prédéfinies de connexion (hôte, compte utilisateur et mot de passe). 
 * Retourne l'identifiant de connexion si succès obtenu, le booléen false 
 * si problème de connexion.
 * @return resource identifiant de connexion
 */
function connecterServeurBD() 
{
    $PARAM_hote='localhost'; // le chemin vers le serveur
    $PARAM_port='3306';
    $PARAM_nom_bd='u104465928_mastervision'; // le nom de votre base de données
    $PARAM_utilisateur='u104465928_admin'; // nom d'utilisateur pour se connecter
    $PARAM_mot_passe='mamajana'; // mot de passe de l'utilisateur pour se connecter

    $connect = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
 
    return $connect;
}

function lister()
{
    $connexion = connecterServeurBD();
   
    $requete="select * from formulaire";
    
    $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {
        $client[$i]['nom']=$ligne['nom'];
        $client[$i]['prenom']=$ligne['prenom'];
        $client[$i]['adresse']=$ligne['adresse'];
        $client[$i]['cd_postal']=$ligne['cd_postal'];
        $client[$i]['tel']=$ligne['tel'];
        $client[$i]['mail']=$ligne['mail'];
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
    }
    $jeuResultat->closeCursor();   // fermer le jeu de résultat
  
  return $client;
}


function ajouter($nom, $prenom, $adresse, $cd_postal, $tel, $mail, $file_url, &$tabErr)
{
  // Ouvrir une connexion au serveur mysql en s'identifiant
  $connexion = connecterServeurBD();
    
    // Vérifier que la référence saisie n'existe pas déja
    $requete="select * from formulaire";
    $requete=$requete." where mail = '".$mail."';"; 
    $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
    //$jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet     
    
    $ligne = $jeuResultat->fetch();
    if($ligne)
    {
      $message="Echec de l'ajout : le formulaire existe déjà !";
      ajouterErreur($tabErr, $message);
    }
    else
    {
      // Créer la requête d'ajout 
       $requete="insert into formulaire"
       ."(nom,prenom,adresse,cd_postal,tel, mail, file_url) values ('"
       .$nom."','"
       .$prenom."','"
       .$adresse."',"
       .$cd_postal.","
       .$tel.",'"
       .$mail."','"
       .$file_url."');";
     
        // Lancer la requête d'ajout 
        $ok=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
        // Si la requête a réussi
        if ($ok)
        {
          $message = "Le dossier a été correctement ajoutée";
          ajouterErreur($tabErr, $message);
        }
        else
        {
          $message = "Attention, l'ajout du dossier a échoué !!!";
          ajouterErreur($tabErr, $message);
        } 
  
    }
}
function ajouterUrl( $file_name, $file_dest ,&$tabErr)
{
  // Ouvrir une connexion au serveur mysql en s'identifiant
  $connexion = connecterServeurBD();
    
    // Vérifier que la référence saisie n'existe pas déja
    $requete="select * from formulairefichier";
    $requete=$requete." where file_name = '".$file_name."';"; 
    $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
    //$jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet     
    
    $ligne = $jeuResultat->fetch();
    if($ligne)
    {
      $message="Echec de l'ajout : le formulaire fichier existe déjà !";
      ajouterErreur($tabErr, $message);
    }
    else
    {
      // Créer la requête d'ajout 
       $requete="insert into formulairefichier"
       ."(file_name,file_dest) values ('"
       .$file_name."','"
       .$file_dest."');";
     
        // Lancer la requête d'ajout 
        $ok=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
        // Si la requête a réussi
        if ($ok)
        {
          $message = "Le fichier a été correctement ajoutée";
          ajouterErreur($tabErr, $message);
        }
        else
        {
          $message = "Attention, l'ajout du fichier a échoué !!!";
          ajouterErreur($tabErr, $message);
        } 
  
    }
}


function supprimer($ref,&$tabErr)
{
  // Ouvrir une connexion au serveur mysql en s'identifiant
  $connexion = connecterServeurBD();
    
    // Vérifier que la référence saisie n'existe pas déja
    $requete="select * from produit";
    $requete=$requete." where pdt_ref = '".$ref."';"; 
    $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
    //$jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet     
    
    $ligne = $jeuResultat->fetch();
    if($ligne)
    {
      // Créer la requête d'ajout 
       $requete="delete from produit where pdt_ref = '".$ref."';";              
     
        // Lancer la requête d'ajout 
        $ok=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
        // Si la requête a réussi
        if ($ok)
        {
          $message = "La fleur a été supprimé";
          AjouterErreur($tabErr, $message);
        }
        else
        {
          $message = "Attention, la suppression de la fleur a échoué !!!";
          AjouterErreur($tabErr, $message);
        } 
  
    }
}

function rechercher($lib, $tabErreurs)
{
    
    $connexion = connecterServeurBD();
   
    $requete="select produit.* from produit, categorie where categorie.cat_code = produit.pdt_categorie and categorie.cat_libelle = '".$lib."';";
    
    $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
    $i = 0;
    $ligne = $jeuResultat->fetch();
    while($ligne)
    {            
        $fleur[$i]['image']=$ligne['pdt_image'];
        $fleur[$i]['ref']=$ligne['pdt_ref'];
        $fleur[$i]['designation']=$ligne['pdt_designation'];
        $fleur[$i]['prix']=$ligne['pdt_prix'];
        $ligne=$jeuResultat->fetch();
        $i = $i + 1;
        
    }
    $jeuResultat->closeCursor();   // fermer le jeu de résultat
  
  return $fleur;
}

function modifier($ref, $des, $prix, $cat,&$tabErr)
{
  // Ouvrir une connexion au serveur mysql en s'identifiant
  $connexion = connecterServeurBD();
    
    // Vérifier que la référence saisie n'existe pas déja
    $requete="select * from produit";
    $requete=$requete." where pdt_ref = '".$ref."';"; 
    $jeuResultat=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
    //$jeuResultat->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet     
    
    $ligne = $jeuResultat->fetch();
    if($ligne)
    {
      // Créer la requête d'ajout 
       $requete="update produit set pdt_designation='".$des."', pdt_prix=".$prix.", pdt_categorie='".$cat."' where pdt_ref='".$ref."';";
       echo $requete; 
      
     
        // Lancer la requête d'ajout 
        $ok=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
          
        // Si la requête a réussi
        if ($ok)
        {
          $message = "La fleur a été correctement ajoutée";
          modifierErreur($tabErr, $message);
        }
        else
        {
          $message = "Attention, l'ajout de la fleur a échoué !!!";
          modifierErreur($tabErr, $message);
        } 
  
    }
}

?>
