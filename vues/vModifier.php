                                                                               

<div class="container">

<form name="formModif" action="" method="post">
  <fieldset>
    <legend>Entrez les donn�es sur la fleur � modifier </legend>
    <label> R�f�rence : </label> <input type="text" placeholder="Entrer la r�f�rence �"name="ref" size="10" /><br />
    <label>D�signation :</label> <input type="text" name="des" size="20" /><br />
    <label>Prix :</label> <input type="text" name="prix" size="10" /><br />  
    <label>Cat�gorie :</label>
    <select name="cat">
       <option selected value = "bul">Bulbes</option>
       <option value = "mas">Plantes � massif</option>
       <option value = "ros">Rosiers</option>
    </select> 
  </fieldset>
  <button type="submit" class="btn btn-primary">Modifier</button>
  <button type="reset" class="btn">Annuler</button>
  <p />
</form>
</div>


