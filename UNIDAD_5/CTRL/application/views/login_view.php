<!DOCTYPE html>
<html>
 <head><style type="text/css">

body {
  
  background: url(https://raw.githubusercontent.com/LeslieEsp/IngenieriaSoftware/master/imagenes/sheep-690198_1920.jpg) no-repeat;
  background-size: cover;

}

</style>
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url("Login/estilo.css");?>"> 
   <title>Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- vinculo a bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Temas-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url("");?>"> 
 </head>
 <body>

     <?php
        if (isset($error_message)) {
        echo "<div class='message'>";
        echo $error_message;
        echo "</div>";
        }
        ?>
   <?php echo validation_errors(); ?>
   <?php 
    // Va al controlador y busca el método user_login_process

    $route=base_url()."index.php/Inicio1/user_login_process";
    $attributes = array('id' => 'mylogin');
    echo form_open($route, $attributes);

 ?>
 <center>
  <div class="login-box">
      <img src="https://raw.githubusercontent.com/LeslieEsp/IngenieriaSoftware/master/imagenes/logovic2.png" class="avatar" alt="Avatar Image">
      <h1>Inicia sesion</h1>
      <form>
        <!-- USERNAME INPUT -->
        <label style="color:#FFFFFF" for="username">Username</label>
        <input type="text" name="username"placeholder="Enter Username">
        <!-- PASSWORD INPUT -->
        <label style="color:#FFFFFF"  for="password">Password</label>
        <input type="password" name="password" placeholder="Enter Password">
        <input type="submit" value="Entrar">
      
      </form>
    </div>
  </center>
</form> 
</body> 
<!-- vinculando a libreria Jquery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>