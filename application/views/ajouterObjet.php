<div id="content">
  <div class="latestcars">
    <h1 class="text-center">&bullet; AJOUT NOUVEAU OBJET &bullet;</h1>
  </div>
  <div id="container">
   <form action="<?php echo base_url('index.php/listObjet/trait_ajouterObjet') ?>" method="post">
     <label for="nom">Nom</label>
      <input type="text" placeholder="Nom" id="prix" name="nom"><br><br>
      <label for="desc">Description</label><br>
      <textarea name="descri" id="desc" cols="35" rows="5" placeholder="Description"></textarea><br><br>
      <label for="prix">Prix</label>
      <input type="text" placeholder="Prix" id="prix" name="estimation"><br><br>
      <label for="categ">Categorie</label>
      <select name="idCategorie" id="">
        <?php for ($i=0; $i < count($list_categorie) ; $i++) { ?>
        <option value="<?php echo $list_categorie[$i]['idCategorie']; ?>"><?php echo $list_categorie[$i]['nom']; ?></option>
        <?php } ?>
      </select><br><br>
      <button type="submit" >SUIVANT</button>
   </form>
  </div>
</div>