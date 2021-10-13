<?php
error_reporting(E_ALL ^ E_NOTICE);
if (isset($_FILES['file']['name'])) {$file_name = $_FILES['file']['name'];
}

if (isset($_FILES['file']['tmp_name'])) {$file_tmp_name = $_FILES['file']['tmp_name'];
}

$file_dest = 'files/'.$file_name;

move_uploaded_file($file_tmp_name,$file_dest);

if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['adresse']) AND !empty($_POST['postal']) AND !empty($_POST['tel']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"Mastervision.com"<support@MasterVision.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br /><br />
					<u>Prenom de l\'expéditeur :</u>'.$_POST['prenom'].'<br /><br />
					<u>adresse de l\'expéditeur :</u>'.$_POST['adresse'].'<br /><br />
					<u>code postal :</u>'.$_POST['postal'].'<br /><br />
					<u>numero de tel :</u>'.$_POST['tel'].'<br /><br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					<u>Ordonnance de l\'expéditeur :https://master-vision.000webhostapp.com/</u>'.$file_dest.'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
				</div>
			</body>
		</html>
		';

		mail("uzankikes@gmail.com", "CONTACT - Monsite.com", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>MasterVision - Acceuil</title>
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
               <a href="#" class="nav-link ">Accueil</a>
           </li>
           <li class="nav-item">
               <a href="localisation.html" class="nav-link">Localisation</a>
           </li>
           <li class="nav-item">
               <a href="horaires.html" class="nav-link">Horaires</a>
           </li>
           <li class="nav-item">
               <a href="formulaire_de_contact.php" class="nav-link active">Rdv</a>
           </li>
           <li class="nav-item">
               <a href="tel:+33140316747" class="nav-link active"> 01 40 31 67 47</a>
           </li>
       </ul>
      </nav>
    </div>      
  </header>
		<h2>Formulaire de contact !</h2>
		<form method="POST" enctype="multipart/form-data" action="">
			<label for="nom">Nom :</label>
			<input type="text" name="nom" placeholder="Ex : Dupont " value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>" /><br /><br />
			<label for="prenom">Prenom :</label>
			<input type="text" name="prenom" placeholder="Ex : JeanPaul" value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>" /><br /><br />
			<label for="adresse">Adresse :</label>
			<input type="text" name="adresse" placeholder="Ex : 16 rue des potiers" value="<?php if(isset($_POST['adresse'])) { echo $_POST['adresse']; } ?>" /><br /><br />
			<label for="postal">Code Postal :</label>
			<input type="text" name="postal" placeholder="Ex : 75019" value="<?php if(isset($_POST['postal'])) { echo $_POST['postal']; } ?>" /><br /><br />
			<label for="tel">Tel :</label>
			<input type="text" name="tel" placeholder="Ex : 0647869087" value="<?php if(isset($_POST['tel'])) { echo $_POST['tel']; } ?>" /><br /><br />
			<label for="email">Email :</label>
			<input type="email" name="mail" placeholder="Ex : JeanPaul@gmail.com" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" /><br /><br />
			<label for="file">Votre Ordonnance :</label>
			<input type="file" name="file"><br /><br />
			<textarea name="message" placeholder="Votre message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea><br /><br />
			<input type="submit" value="Envoyer !" name="mailform"/>
		</form>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
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
            <a href="index.html">Acceuil</a>
          </li>
          <li>
            <a href="localisation.html">Localisation</a>
          </li>
          <li>
            <a href="horaires.html">Horaires</a>
          </li>
          <li>
            <a href="#!">Notre équipe</a>
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