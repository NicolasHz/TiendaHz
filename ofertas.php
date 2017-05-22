<?php 
$tituloPagina= "Ofertas Hz";
$pagina = "ofertas";
$page = "ofertas.php";
include('inc/func.php');
require('inc/header.php');
?>
    <div class="container">
      <div class="row">
        <?php 
        $x=1;
        $re=mysqli_query($mysqli,"SELECT * FROM productos")or die(mysqli_error());
        while ($f=mysqli_fetch_array($re) ) {
          
          echo prodPortada($f);
          
         } ?>
      </div>
    </div>
<?php include('inc/footer.php');?>