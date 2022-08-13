<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>

    <link  href="<?php echo base_url(); ?>assets/css/login_style.css"  rel="stylesheet"/>
  </head>
  <body>
    <div class="center">
      <h1>Inscription</h1>
      <form method="post" action="<?php echo base_url(); ?>LoginUtilisateur/inscriptionValidation" method="post" >
        <div class="txt_field">
          <input type="text" required name="nom">
          <span></span>
          <label>nom</label>
        </div>
        <div class="txt_field">
          <input type="text" required name="pseudo">
          <span></span>
          <label>pseudo</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password">
          <span></span>
          <label>Password</label>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
