<?php session_start();
require ('connect_db.php');?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $tituloPagina ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="icon.png"/>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"  style="padding-top: 5px"><img src="img/logo.png"  width="40" height="40"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li <?php if($pagina=="inicio") echo "class='active'" ; ?>><a href="index.php">Inicio</a></li>
            <li <?php if($pagina=="ofertas") echo "class='active'" ; ?>><a href="ofertas.php">Ofertas</a></li>
            <li <?php if($pagina=="nosotros") echo "class='active'" ; ?>><a href="nosotros.php">Nosotros</a></li>
            <li <?php if($pagina=="contacto") echo "class='active'" ; ?>><a href="contacto.php">Contacto</a></li>
            <li <?php if($pagina=="carrito") echo "class='active'" ; ?>><a style="padding-top: 10px;" href="carrito.php"><img src="img/cart.png" width="30px"></a></li>
            <?php 
                $active="";
                if($pagina=='administrar'){
                    $active="class='active'";
                }
             if(isset($_SESSION['user'])&&$_SESSION['rol']==1){

               echo "<li ".$active."><a href='indexadmin.php'>Administrar</a></li>";
             }
                ?>
        </ul>

    <?php 
    $registrobtn="";
    if($pagina!="registro"){
    $registrobtn="<a class='btn btn-info btn-sm' value='Registrar' href='registro.php'> Registrarte </a>";
    }
    if(isset($_SESSION)&&isset($_SESSION['user'])){
       echo "<div class='nav navbar-form navbar-right saludo'>
                <h4>Bienvenido ".$_SESSION['user']."</h4>
                <a class='btn btn-info btn-sm'  href='desconectar.php'> Cerrar Sesión </a> 
        </div> ";
        }   

    else if (!isset($_SESSION['user'])) {
      echo  " <form class='nav navbar-form navbar-right' role='form'
              action='validar.php' method='post'>
                <div class='form-group'>
                  <input type='text' placeholder='Email' class='form-control has-success input-sm' type='text' name='mail'>
                </div>
                <div class='form-group'>
                  <input type='password' placeholder='Password' class='form-control input-sm' name='pass'>
                </div>
                <button type='submit' class='btn btn-success btn-sm' value='Aceptar'>Iniciar Sesión</button>
                ".$registrobtn."
                <input type='hidden' name='page' value='".$page."'>
              </form>
            ";  
        }

        ?>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>
