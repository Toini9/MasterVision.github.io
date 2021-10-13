
  <!-- Vue pour lister les fleurs
    ================================================== -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>MasterVision - Lister</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <header class="navbar navbar-expand-lg navbar-light bg-light">
    
    <a href="#" class="navbar-brand ml-auto-auto">
         <img src="images/logo.png" alt="Logo" />
     </a>
     <button class="navbar-toggler" data-toggle="collapse" data-target="#barrenav">
     <span class="navbar-toggler-icon "></span>
     </button>
     <div class="collapse navbar-collapse text-purple" id="barrenav">
     <span class="navbar-text navbar text mr-auto">Un Regard qui vous ressemble</span>
     <nav>
         <ul class="navbar-nav ">
           <li class="nav-item">
               <a href="#" class="nav-link ">Accueil</a>
           </li>
           <li class="nav-item">
               <a href="#" class="nav-link">Contact</a>
           </li>
           <li class="nav-item">
               <a href="#" class="nav-link">Formulaire</a>
           </li>
           <li class="nav-item">
               <a href="tel:+33140316747" class="nav-link active"> 01 40 31 67 47</a>
           </li>
       </ul>
      </nav>
    </div>      
  </header><br><br>
<div class="container">

    <table class="table table-bordered table-striped table-condensed">
      <br>
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Adresse</th>
          <th>Cd_postal</th>
          <th>Tel</th>
          <th>Mail</th>
          <th>dossier complet </th>
          <th>mutuelle</th>
          <th>ordonnance lunette</th>
          <th>ordonnance lentille</th>


        </tr>
      </thead>
      <tbody>  
<?php
    $i = 0;
    while($i < count($client))
    { 
 ?>     
        <tr class="text-secondary">
            <td class="text-dark"><?php echo $client[$i]["nom"]?></td>
            <td class="text-dark"><?php echo $client[$i]["prenom"]?></td>
            <td class="text-dark"><?php echo $client[$i]["adresse"]?></td>
            <td class="text-dark"><?php echo $client[$i]["cd_postal"]?></td>
            <td><a href="tel:<?php echo $client[$i]["tel"]?>" class="text-dark"><?php echo $client[$i]["tel"]?></a></td>
            <td><a href="mailto:<?php echo $client[$i]["mail"]?>" class="text-dark"><?php echo $client[$i]["mail"]?></a></td>
            <td><a href="https://mastervision.fr/files/Dossier_<?php echo $client[$i]["nom"]?>_<?php echo $client[$i]["prenom"]?>" >Dossier</a></td>
            <td><a href="https://mastervision.fr/files/Dossier_<?php echo $client[$i]["nom"]?>_<?php echo $client[$i]["prenom"]?>/mutuelle/" >mutuelle</a></td>
            <td><a href="https://mastervision.fr/files/Dossier_<?php echo $client[$i]["nom"]?>_<?php echo $client[$i]["prenom"]?>/ordonnance%20lentille/" >ordonnance lentille</a></td>
            <td><a href="https://mastervision.fr/files/Dossier_<?php echo $client[$i]["nom"]?>_<?php echo $client[$i]["prenom"]?>/ordonnance%20lunette/" >ordonnance lunette</a></td>
        </tr>
<?php
        $i = $i + 1;
     }
?>       
       </tbody>       
     </table>    
  </div><br><br>
  <a href="/files" class="text-center"><h3 class="col-md">Les ordonnances</h3></a>
  <br><br>
<footer class="page-footer  pt-4 bg-dark" >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left ">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">
    <a href="#">
         <img src="images/logo_white.png" alt="Logo" />
    </a>
        <!-- Content -->
        <a href="https://maps.google.com/maps?ll=48.876648,2.40619&z=14&t=m&hl=fr&gl=FR&mapclient=embed&cid=8945821518226450152"><h5 class="text-uppercase"><br>257 Avenue Gambetta<br>75020 Paris.</h5></a>
        <br>
        <p><a href="tel:+33140316747"> 01 40 31 67 47</a></p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Menu</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#">Acceuil</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
          <li>
            <a href="#">Formulaire</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href=""></a>
  </div>
</footer>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
	</body>
</html>
 
