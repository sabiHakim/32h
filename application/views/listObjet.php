<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 


?>
<!-- ________________________Latest Cars Image Thumbnail________________-->
<div class="latestcars">
  <h1 class="text-center">&bullet; CATEGORIE &bullet;</h1>

  <ul class="nav nav-tabs navbar-left latest-navleft">
    <?php for ($i=0; $i < count($list_categorie); $i++) { ?>
    <li data-filter=".RECENT" role="presentation"><a href="<?php echo base_url('index.php/listObjet/listObjetByCategorie/'.$list_categorie[$i]['idCategorie']); ?>" class="li-sortby"> <?php echo $list_categorie[$i]['nom']; ?>  </a></li>
    <li id="hideonmobile">
    <?php } ?>
  </ul>
</div>
  <div class="container">
    <div class="row">
      <?php for ($i=0; $i < count($list_objet); $i++) { ?>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="txthover">
          <img src="<?php echo base_url('assets/image/'.$photo[$i][0]['img'])?>" alt="<?php echo $photo[$i][0]['img']; ?>">
            <div class="txtcontent">
              <div class="stars">
                <div class="glyphicon glyphicon-star"></div>
                <div class="glyphicon glyphicon-star"></div>
                <div class="glyphicon glyphicon-star"></div>
              </div>
              <div class="simpletxt">
                <h3 class="name"><?php echo $list_objet[$i]['nom']; ?> </h3>
                <p> <?php echo $list_objet[$i]['descri']; ?> </p>
                <h4 class="price"> <?php echo $list_objet[$i]['estimation']; ?> Ar </h4>
                <button><a href="<?php echo base_url('index.php/listObjet/mesObjetEchange/'.$_SESSION['id']."/".$list_objet[$i]['idObjet']); ?>">ECHANGER</a></button>
                <button><a href="<?php echo base_url('index.php/listObjet/descriObjet/'.$list_objet[$i]['idObjet']); ?>">VOIR PLUS</a></button>
                  <button><a href="<?php echo base_url('index.php/echange/list_historique/'.$list_objet[$i]['idObjet']); ?>">HISTORIQUE</a></button>
                <div class="wishtxt">
                </div>
              </div>
              <div class="stars2">
                <div class="glyphicon glyphicon-star"></div>
                <div class="glyphicon glyphicon-star"></div>
                <div class="glyphicon glyphicon-star"></div>
              </div>
            </div>
        </div>   
      </div> 
      <?php } ?>
    </div>
  </div>