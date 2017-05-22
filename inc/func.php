<?php 
function prodPortada($oferta){
	$salida="";
	$salida=$salida.'<div class="col-md-4 col-lg-4 col-sm-4 producto">';
	$salida=$salida.' <h2>'. $oferta['nombre'].'</h2>';
    $salida=$salida.'<p>'. $oferta['descripcion'].'</p>';
    $salida=$salida.'<img width="400" width="400" class="img-rounded" src="'. $oferta['imagen']. '">';
    $salida=$salida.'<div><a class="w3-btn w3-white w3-border" href="oferta.php?id='.$oferta['id'].'" role="button" >Consultar Precios &raquo;</a></div>
          </div>';


 return $salida;
}
 ?>