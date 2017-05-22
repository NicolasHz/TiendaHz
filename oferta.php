<?php 
if(isset($_GET["id"])){
$oferta_id= $_GET["id"];
}
$tituloPagina= "Ofertas Destacadas";
$pagina = "oferta";
$page = "oferta.php";
require('inc/header.php');
if(isset($oferta_id)){
  $ofer = mysqli_query($mysqli,"SELECT * FROM `productos` WHERE `id`= $oferta_id")or die(mysqli_error());
  $oferta = mysqli_fetch_array($ofer);
  }

?>
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-8">
            <p><img src="<?php  echo $oferta["imagen"]; ?>" alt="<?php  echo $oferta["nombre"]; ?>"></p>
            <h2><?php echo $oferta["nombre"] ?></h2>
            <p><?php echo $oferta["descripcion"] ?></p>
        </div>
        <div class="col-md-4">
          <p><a class="btn btn-danger" href="carrito.php?id=<?php echo $oferta['id'] ?>">Comprar $<?php echo $oferta["precio"] ?></a></p>
        </div>
    </div>
    </div>
<?php include('inc/footer.php');?>