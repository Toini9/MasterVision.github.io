<?php  
error_reporting  =  E_ALL
display_errors = On
?>
<div class="container">

<form name="formDossierUpload" action="" method="post" onSubmit="return valider()">
  <fieldset>
    <legend>Entrez vos informations </legend>

    <label> fichier :</label> <input type="file" "name="file"/><br />   
  </fieldset>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
  <button type="reset" class="btn">Annuler</button>
  <p />
</form>
</div>