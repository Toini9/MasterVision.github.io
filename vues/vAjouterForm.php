
<!--Vue pour la saisie des informations dans un formulaire!-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>MasterVision - Formulaire</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <header class="navbar navbar-expand-lg navbar-light bg-light">
    
    <a href="index.html" class="navbar-brand ml-auto-auto">
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
               <a href="index.html" class="nav-link ">Accueil</a>
           </li>
           <li class="nav-item">
               <a href="contact.html" class="nav-link">Contact</a>
           </li>
           <li class="nav-item">
               <a href="ajouter.php" class="nav-link active">Formulaire</a>
           </li>
           <li class="nav-item">
               <a href="tel:+33140316747" class="nav-link active"> 01 40 31 67 47</a>
           </li>
       </ul>
      </nav>
    </div>      
  </header>
<div class="container"><br><br>

<form name="formAjout" action="" method="post" enctype="multipart/form-data">
  <fieldset>
    <legend>Deposer votre dossier mutuelle </legend>
    <label>Nom : </label> <input type="text" placeholder="Ex: Dupont" name="nom" size="10" /><br />
    <label>Prénom :</label> <input type="text" placeholder="Ex: Jean" name="prenom" size="20" /><br />
    <label>Adresse :</label> <input type="text" placeholder="Ex: 17 rue des boulets " name="adresse" size="10" /><br />
    <label>Code postal :</label> <input type="text" placeholder="Ex: 75019" name="cd_postal" size="20"/><br />
    <label>Tél :</label> <input type="text" placeholder="Ex: 0645873632" name="tel" size="20"/><br />
    <label>Mail :</label> <input type="text" placeholder="Ex: JeanDupont@Hotmail.fr"name="mail" size="20"/><br /> 
    <label>ordonnance lunette :</label><input type="file" name="file"><br /><br />
    <label>ordonnance lentille :</label><input type="file" name="file1"><br /><br />
    <label>carte mutuelle recto :</label><input type="file" name="file2"><br /><br />
    <label>carte mutuelle verso :</label><input type="file" name="file3"><br /><br />
  </fieldset>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  <button type="reset" class="btn">Annuler</button>
  <p />
</form>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="page-footer  pt-4 bg-dark" >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left ">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">
    <a href="index.html">
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
            <a href="index.html">Accueil</a>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
          <li>
            <a href="ajouter.php">Formulaire</a>
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

