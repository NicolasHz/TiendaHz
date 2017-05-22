<?php 
$tituloPagina= "Registro";
$pagina = "registro";
$page = "index.php";
include('products/prod.php');
include('inc/func.php');
require('inc/header.php');?>
    <div class="jumbotron">
      <div class="container">
        <form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre completo</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Nombre/Apellido" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu email</b></label>
      <input type="text" name="email" class="form-control"  required placeholder="E-mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repite contraseña" />
    </div>
      
    </div>
   
    <input style='margin-left: 45%' class="w3-btn w3-white w3-border w3-border-green w3-round-large " type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
    if(isset($_POST['submit'])){
      require("registrar.php");
    }
  ?>
      </div>
    </div>

<?php include('inc/footer.php');?>