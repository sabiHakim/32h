<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
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
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/add_product.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome-5/css/all.css') ?>">

</head>
	<body>
<?php 
  // echo $_SESSION['user'];
	$this->load->view('header');
	$this->load->view($content);
	$this->load->view('footer');
?>
  	<!-- Bootstrap core JavaScript -->
  	<script src="<?php echo base_url('bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/source/bootstrap-3.3.6-dist/js/jquery.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/source/js/isotope.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/source/js/myscript.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('assets/source/bootstrap-3.3.6-dist/js/jquery.1.11.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/source/bootstrap-3.3.6-dist/js/bootstrap.js') ?>"></script>
	</body>
</html>