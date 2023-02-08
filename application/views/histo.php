<div id="content">
  <div class="latestcars">
    <h1 class="text-center">&bullet; HISTORIQUE D'ECHANGE &bullet;</h1>
  </div>
  <?php for ($i=0; $i <count($liste_histo); $i++) { ?>
    <div id="container">
      <div id="pseudo"><p>Pseudo:<?php echo $liste_histo[$i]['pseudo']; ?></p></div>
      <div id="date"><P>Date d'échange:<?php echo $liste_histo[$i]['daty']; ?></P></div>
    </div>
  <?php } ?>
</div>