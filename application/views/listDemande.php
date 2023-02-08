<div id="content">
<?php for ($i=0; $i < count($list_demande); $i++) { ?>
  <div id="echange">
    <div id="objet1">
      <div class="objet_img">
        <img src="<?php echo base_url('assets/image/'.$photo1[$i][0]['img']) ?>" alt="tsy">
      </div>
      <div class="objet_detail">
        <p> Pseudo : <?php echo $demandeur[$i]['pseudo']; ?> </p>
        <p> Nom obj : <?php echo $objet1[$i]['objet']; ?> </p>
        <p>Estimation : <?php echo $objet1[$i]['estimation']; ?> </p>
      </div>
    </div>
    <div id="fleche">
      <i class="fas fa-arrows-alt-h"></i>
    </div>
    <div id="objet2">
      <div class="objet_img">
        <img src="<?php echo base_url('assets/image/'.$photo2[$i][0]['img']) ?>" alt="">
      </div>
      <div class="objet_detail">
         <p> Pseudo : <?php echo $moi[$i]['pseudo']; ?> </p>
        <p> Nom obj : <?php echo $objet2[$i]['objet']; ?> </p>
        <p>Estimation : <?php echo $objet2[$i]['estimation']; ?> </p>
      </div>
    </div>

    <div id="resp">
      <button id="yes"> <a href="<?php echo base_url('index.php/echange/accepter/'.$demandeur[$i]['idUtilisateur']."/".$list_demande[$i]['idObjet1']."/".$list_demande[$i]['idObjet2']."/".$list_demande[$i]['idEchange']) ?>"> ACCEPTER </a></button>
      <button id="no">REFUSER</button>
    </div>
  </div>
  
  </div>
<?php } ?>
</div>
