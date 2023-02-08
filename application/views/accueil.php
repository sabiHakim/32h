<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
  <div id="carousel-up" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner " role="listbox">
      <div class="item active">
        <img src="<?php echo base_url('assets/image/ordi2.jpg') ?>" alt="ordi2">
        <div class="carousel-caption">
          <h2>Mac</h2>
          <p>Lorem ipsum dolor sit amet, consectetur ,<br>
            sed do eiusmod tempor incididunt ut labore </p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo base_url('assets/image/moc.jpg') ?>" alt="moc">
        <div class="carousel-caption">
          <h2>Mocassin</h2>
            <p>Lorem ipsum dolor sit amet, consectetur ,<br>
            sed do eiusmod tempor incididunt ut labore </p>
        </div>
      </div>
      <div class="item">
        <img src="<?php echo base_url('assets/image/porche.jpg') ?>" alt="porche">
        <div class="carousel-caption">
          <h2>Porche</h2>
          <p>Lorem ipsum dolor sit amet, consectetur ,<br>
            sed do eiusmod tempor incididunt ut labore </p>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default midle-nav">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
            <h1>SEARCH TEXT</h1>
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarmidle">
        <div class="searchtxt">
          <h1>SEARCH TEXT</h1>
        </div>
        <form method="post" action="<?php echo base_url('index.php/listObjet/find') ?>" class="navbar-form navbar-left searchformmargin" role="search">
          <div class="form-group">
            <input name="texte" type="text" class="form-control searchform" placeholder="Enter Keyword">
          </div>
          <div class="form-group">
          <ul class="nav navbar-nav navbarborder">
          <li class="li-category">
            <!-- <a  >Category<span class="glyphicon glyphicon-chevron-down downicon"></span></a> -->
            <a href="#">
            <select name="categorie" class="btn  dropdown-toggle btn-costume" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" id="dropdownMenu1" style="color: black;">
              <option value="-1"> TOUT  </option>
              <?php for ($i=0; $i < count($list_categorie); $i++) { ?>
              <option value="<?php  echo $list_categorie[$i]['idCategorie'] ?>"> <?php echo $list_categorie[$i]['nom']; ?>  </option>
            <?php } ?>
            </select></a>
          </li>
          <li class="li-search"> <button class="searchbutton"><span class="glyphicon glyphicon-search "></span></button></li>
        </ul>  
          </div>
          
        </form>
 
      </div>
    </nav>
  </div>
</div>

<!-- ________________________LATEST CARS SECTION _______________________-->
<div class="latestcars">
  <h1 class="text-center">&bullet; CATEGORIE &bullet;</h1>

  <ul class="nav nav-tabs navbar-left latest-navleft">
    <?php for ($i=0; $i < count($list_categorie); $i++) { ?>
    <li data-filter=".RECENT" role="presentation"><a href="<?php echo base_url('index.php/listObjet/listObjetByCategorie/'.$list_categorie[$i]['idCategorie']); ?>" class="li-sortby"> <?php echo $list_categorie[$i]['nom']; ?>  </a></li>
    <li id="hideonmobile">
    <?php } ?>
  </ul>
</div>
<br>
<br>