<div id="content">
  <div class="latestcars">
    <h1 class="text-center">&bullet; AJOUTER PHOTO &bullet;</h1>
  </div>


<?php if(isset($message)) { echo $message; }?>

<form action="<?php echo base_url('index.php/Upload_CI/do_upload') ?>" enctype="multipart/form-data" method="post">

<input type="file" name="userfile" size="20" />
<input type="hidden" name="idObjet" value="<?php echo $objet ?> " multiple />

<br /><br />

<input type="submit" value="upload" />

</form>

<p> <a href="<?php echo base_url('index.php/page') ?>"> TERMINER </a>  </p>