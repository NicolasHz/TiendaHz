<?php 
$tituloPagina= "Carrito";
$pagina = "carrito";
$page = "carrito.php";
require('inc/carro.php');
include('inc/func.php');
require('inc/header.php');
$carrito = new Carrito();
if(isset($_GET['id'])){
      $nombre="";
      $precio=0;
      $imagen="";
      $re=mysqli_query($mysqli,"SELECT * FROM productos WHERE id=".$_GET['id']);

      while ($f=mysqli_fetch_array($re)) {
        $nombre=$f['nombre'];
        $precio=$f['precio'];
        $imagen=$f['imagen'];
      }
      $arreglo=array('id'=>$_GET['id'],
              'nombre'=>$nombre,
              'precio'=>$precio,
              'imagen'=>$imagen,
              'cantidad'=>1);

      
      $carrito->add($arreglo);
    }
?>


        <?php 
          $carro = $carrito->get_content();
          if($carro)
          {
            echo "
            <div class='container'>
        <div class='row item_cart' style='border-bottom: 2px solid lightslategray;'>
            <div class='col-md-2 col-sm-2 col-xs-3'></div>
            <div class='col-md-6 col-sm-6 col-xs-4'>
                <h3 class='nombre_cart'>Producto</h3></div>
            <div class='col-md-2 col-sm-2 col-xs-2'>
                <h3 class='cantidad_cart'>Cant</h3>
            </div>
            <div class='col-md-2 col-sm-2 col-xs-2'>
                <h3 class='precio_cart'>Precio</h3>
            </div>
        </div>
    </div>
    <div class='container' style='margin-bottom: 100px'>
            ";
            foreach($carro as $producto)
            {
              echo
              "
              <div class='row item_cart'>
                <div class='col-md-2 col-sm-2 col-xs-3 wrap_img' style='height: 103px;'>
                <img class='imagen_cart'  src='".$producto["imagen"]. "'>
                </div>
                <div class='col-md-6 col-sm-6 col-xs-4'>
                  <h3 class='nombre_cart'><a href=oferta.php?id=".$producto['id'].">".$producto["nombre"]."</a></h3></div>
                  <div class='col-md-2 col-sm-2 col-xs-2'>
                    <p class='cantidad_cart'>".$producto["cantidad"]."</p>
                  </div>
                  <div class='col-md-2 col-sm-2 col-xs-2'>
                    <p class='precio_cart'>$".$producto["precio"]."</p>
                  </div>
                </div>
            ";

            }
           echo "
        <div class='row'>
            <div class='col-lg-3 col-md-3 col-md-push-9 col-sm-3 col-sm-push-8 col-xs-3 col-xs-push-8'>
                <h3 style='float: right;'>Total: $".$carrito->precio_total()."</h3></div>
        </div>
        ";
          }
          else{
            echo "
            <center style='font-size: 5vw; width: 70%; margin:20px auto'>SU CARRO DE COMPRAS ESTÁ VACIO! <br> <br> <a href='ofertas.php' style='font-size: 3vw' class='w3-btn w3-blue w3-border w3-border-green w3-round-medium'>comenzar a comprar!</a></center>
            ";
          }

        ?>


    </div>
<?php include('inc/footer.php');?>