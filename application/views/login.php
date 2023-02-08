<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url('assets/style/other.css'); ?>">
  <link rel="stylesheet"  href="<?php echo base_url('assets/fontawesome-5/css/all.css'); ?>">
  <title>Website Shopping</title>
</head>
<body>
    <div class="container">
      <div class="header">
        <h2>Login</h2>
      </div>
      <form action="<?php echo base_url('index.php/login/check_login') ?>" method="post" id="form" class="form">
            <div class="form-control">
              <label>Email</label>
              <input type="email" placeholder="email" id="email" name="email" value="admin@gmail.com">
            </div>
            <div class="form-control">
              <label>Password</label>
              <input type="password" placeholder="password" id="password" name="mdp" value="admin">
            </div>
            <button id="submit">Se connecter</button>
            <input type="hidden" name="trait" value="1">
      </form> 
      <a href="<?php echo base_url('index.php/login/page_insrciption'); ?>"><button id="submit-inscription">Inscription</button></a>
  </div>
</body>
</html>