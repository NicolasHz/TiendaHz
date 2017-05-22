<?php 
$tituloPagina= "Contactanos Hz";
$pagina = "contacto";
$page = "contacto.php";
require('inc/header.php');
?>
    <div class="jumbotron">
      <div class="container">
	<div class="row">

        <div class="well well-sm">
          <form class="form-horizontal" action="validar_mensaje.php" method="post">
          <fieldset>
            <legend class="text-center">Envie su mensaje</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="name">Nombre</label>
              <div class="col-md-9">
                <input id="name" name="first_name" type="text" placeholder="Su nombre.." class="form-control">
              </div>
            </div>
            <!-- Last Name input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="name">Apellido</label>
              <div class="col-md-9">
                <input id="name" name="last_name" type="text" placeholder="Su apellido.." class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="email">E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Su email.." class="form-control">
              </div>
            </div>
            <!-- Phone input-->
            <div class="form-group">
              <label class="col-md-2 control-label" for="email">Cel-Tel</label>
              <div class="col-md-9">
                <input id="email" name="telephone" type="text" placeholder="Su numero telefónico.." class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="message">Mensaje</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Escriba su mensaje.." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-center">
                <button type="submit" class="w3-btn w3-white w3-border w3-border-green w3-round-large">Enviar</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>

	</div>
</div>
    </div>
<?php include('inc/footer.php');?>