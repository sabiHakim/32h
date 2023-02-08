<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Scarica gratis GARAGE Template html/css - Web Domus Italia - Web Agency </title>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

	  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/source/bootstrap-3.3.6-dist/css/bootstrap.css')?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome-4.5.0/css/font-awesome.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/slider.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/mystyle.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/detail.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/demande.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/objet.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/admin.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/add_product.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome-5/css/all.css') ?>">

</head>
<body>
<!-- Header -->
<div class="allcontain">
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
				<a class="navbar-brand logo" href="#"><img src="<?php echo base_url('assets/image/logo .png')?>" alt="logo"></a>
			</div>	 
		</div>
    <div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
        <button><a href="<?php echo base_url('index.php/login') ?>">DECONEXION</a></button>
			</ul>
		</div>
	</nav>
</div>
<div>
    <div class="latestcars">
      <h1 class="text-center">&bullet; LISTE CATEGORIE &bullet;</h1>
    </div>
    <div id="content">
    	<?php for ($i=0; $i < count($list_categorie); $i++) { ?>
	    	<p><?php echo $list_categorie[$i]['nom']; ?></p>
	    <!-- <div id="btn"><a href="modifierCateg.html"><button>MODIFIER</button></a></div> -->
			<?php } ?>
    </div>
    <div id="ajout">
    		<h2> AJOUTER NOUVEAU CATEGORIE </h2>

				<form method="post" action="<?php echo base_url('index.php/admin/ajouter_categorie') ?>">
					<input type="text" name="nom">  
					<input type="submit" >
				</form>
    </div>
</div>
</div>
<div id="number">
  <div id="left">
    <div class="latestcars">
      <h1 class="text-center">&bullet; UTILISATEUR INSCRIT &bullet;</h1>
    </div>
    <div id="nombre_utilisateur">
      <p> <?php echo count($list_utilisateur) ?> Utilisateurs inscrits</p>
    </div>
  </div>
  <div id="right">
    <div class="latestcars">
      <h1 class="text-center">&bullet; ECHANGE FAIT &bullet;</h1>
    </div>
    <div id="nombre_echange">
      <p><?php echo count($effectue) ?> échanges éfféctués</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/source/bootstrap-3.3.6-dist/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/source/js/isotope.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/source/js/myscript.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/source/bootstrap-3.3.6-dist/js/jquery.1.11.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/source/bootstrap-3.3.6-dist/js/bootstrap.js'); ?>"></script>
<?php 

	$this->load->view('footer');
?>