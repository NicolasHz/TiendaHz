<?php 
$tituloPagina= "Inicio Hz";
$pagina = "inicio";
$page = "index.php";
require('inc/header.php');
include('inc/func.php');?>
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenido a HzDev</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>


    <div class="container">
      <!-- Example row of columns -->
     
      <div class="row">
        <?php 
        $x=1;
        $re=mysqli_query($mysqli,"SELECT * FROM productos")or die(mysqli_error());
        while ($f=mysqli_fetch_array($re) ) {
          if($x<=3){
          echo prodPortada($f);
          $x++;
          }
         } ?>
      </div>
      <hr>
    </div> <!-- /container --> 
<?php include('inc/footer.php');?>