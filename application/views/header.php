<div class="header">
      <ul class="socialicon">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
      </ul>
      <ul class="givusacall">
        <li>Give us a call : +66666666 </li>
      </ul>
      <ul class="logreg">
        <li><a href="#">Login </a> </li>
        <li><a href="#"><span class="register">Register</span></a></li>
      </ul>
  </div>
  <!-- Navbar Up -->
  <nav class="topnavbar navbar-default topnav">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
          <span class="sr-only"> Toggle navigaion</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand logo" href="#"><img src="<?php echo base_url('assets/image/logo .png') ?>" alt="logo"></a>
      </div>   
    </div>
    <div class="collapse navbar-collapse" id="upmenu">
      <ul class="nav navbar-nav" id="navbarontop">
        <li class="active"><a href="<?php echo base_url('index.php/page') ?>"> ACCUEIL</a> </li>
        <li class="active"><a href="<?php echo base_url('index.php/listObjet/mesObjet') ?>"> MES OBJETS </a> </li>
        <li class="active"><a href="<?php echo base_url('index.php/echange/list_demande') ?>">DEMANDE </a> </li>
        <li>
          <a href="<?php echo base_url('index.php/listObjet/form_ajout_objet') ?>">AJOUTER OBJET</a>
        </li>
        
          <button> <a href="<?php echo base_url('index.php/login/deco') ?>">DECONECTION </a></button>
        
      </ul>
    </div>
  </nav>
