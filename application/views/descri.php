<div class="content">
  <div class="latestcars">
    <h1 class="text-center">&bullet; <?php echo $objet['objet']; ?> &bullet;</h1>
  </div>
  <div class="row">
    <?php for ($i=0; $i < count($photo); $i++) { ?>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <div class="txthover">
        <img src="<?php echo base_url('assets/image/'.$photo[$i]['img'])?>" alt="<?php echo $photo[$i]['img']; ?>">
      </div>
    </div>
    <?php } ?>
    <button id="swap"><a href="<?php echo base_url('index.php/listObjet/mesObjetEchange/'.$_SESSION['id']."/".$objet['idObjet']); ?>">ECHANGER</a></button>
  </div>
</div>