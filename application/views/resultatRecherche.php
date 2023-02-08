

<div class="container">
  <div class="latestcars">
    <h1 class="text-center">&bullet; RESULTAT RECHERCHE &bullet;</h1>
  </div>
    <div class="row">
      <?php for ($i=0; $i < count($list_objet); $i++) { ?>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <div class="txthover">
          <img src="<?php echo base_url('assets/image/'.$photo[$i][0]['img'])?>" alt="<?php echo $list_objet[$i]['objet']; ?>">
            <div class="txtcontent">
              <div class="stars">
                <div class="glyphicon glyphicon-star"></div>
                <div class="glyphicon glyphicon-star"></div>
                <div class="glyphicon glyphicon-star"></div>
              </div>
              <div class="simpletxt">
                <h3 class="name"><?php echo $list_objet[$i]['objet']; ?> </h3>
                <p> <?php echo $list_objet[$i]['descri']; ?> </p>
                <h4 class="price"> <?php echo $list_objet[$i]['estimation']; ?> Ar </h4>
                <?php if($list_objet[$i]['idProprietaire']!=$_SESSION['id']) { ?>
                <button><a href="<?php echo base_url('index.php/listObjet/mesObjetEchange/'.$_SESSION['id']."/".$list_objet[$i]['idObjet']); ?>">ECHANGER</button><?php } ?>
                <button><a href="<?php echo base_url('index.php/listObjet/descriObjet/'.$list_objet[$i]['idObjet']); ?>">VOIR PLUS</a></button><br>
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