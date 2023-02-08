<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
// echo $objetEchange;
?>
<!-- ________________________Latest Cars Image Thumbnail________________-->
<div id="content">
  <div class="latestcars">
    <h1 class="text-center">&bullet; MES OBJETS &bullet;</h1>
  </div>
  <div class="row">
    <?php for ($i=0; $i < count($list_objet); $i++) { ?>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <div class="txthover2">
        <img src="<?php echo base_url('assets/image/'.$photo[$i][0]['img']) ?>" alt="car5">
        <p id="categ">Categorie: <?php echo $list_objet[$i]['categorie']; ?> </p>
        <p id="nom">Nom: <?php echo $list_objet[$i]['objet']; ?></p>
        <a href="<?php echo base_url('index.php/echange/echange_objet/'.$_SESSION['id']."/".$list_objet[$i]['idObjet']."/".$objetEchange['idProprietaire']."/".$objetEchange['idObjet']); ?>"><button>ECHANGER </button></a>
      </div>
    </div>
    <?php } ?>
  </div>
</div>