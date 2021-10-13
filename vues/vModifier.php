                                                                               

<div class="container">

<form name="formModif" action="" method="post">
  <fieldset>
    <legend>Entrez les données sur la fleur à modifier </legend>
    <label> Référence : </label> <input type="text" placeholder="Entrer la référence …"name="ref" size="10" /><br />
    <label>Désignation :</label> <input type="text" name="des" size="20" /><br />
    <label>Prix :</label> <input type="text" name="prix" size="10" /><br />  
    <label>Catégorie :</label>
    <select name="cat">
       <option selected value = "bul">Bulbes</option>
       <option value = "mas">Plantes à massif</option>
       <option value = "ros">Rosiers</option>
    </select> 
  </fieldset>
  <button type="submit" class="btn btn-primary">Modifier</button>
  <button type="reset" class="btn">Annuler</button>
  <p />
</form>
</div>


