  <?php 

  $tituloPagina= "Inicio Hz";
  $pagina = "administrar";
  include('inc/func.php');
  require('inc/header.php');
  if (@!$_SESSION['user']) {
    header("Location:index.php");
  }elseif ($_SESSION['rol']==2) {
    header("Location:index.php");
  }
?>

  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="caption">
          <h2> Administración de usuarios registrados</h2>  
          <div class="well well-small">
            <hr class="soft"/>
            <h4>Tabla de Usuarios</h4>
            <div class="row-fluid">
              <?php

              require("connect_db.php");
              $sql=("SELECT * FROM login");

  //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
              $query=mysqli_query($mysqli,$sql);

              echo "<table border='1'; class='table table-hover';>";
              echo "<tr class='warning'>";
              echo "<td>Id</td>";
              echo "<td>Usaurio</td>";
              echo "<td>Password</td>";
              echo "<td>Correo</td>";
              echo "<td>Password del administrador</td>";
              echo "<td>Editar</td>";
              echo "<td>Borrar</td>";
              echo "</tr>";


              ?>

              <?php 
              while($arreglo=mysqli_fetch_array($query)){
                echo "<tr class='success'>";
                echo "<td>$arreglo[0]</td>";
                echo "<td>$arreglo[1]</td>";
                echo "<td>$arreglo[2]</td>";
                echo "<td>$arreglo[3]</td>";
                echo "<td>$arreglo[4]</td>";

                echo "<td><a class='btn btn-info' href='editaruser.php?id=$arreglo[0]'><span class='glyphicon glyphicon-refresh'></span></td>";
                echo "<td><a class='btn btn-danger' href='indexadmin.php?id=$arreglo[0]&idborrar=2'><span class='glyphicon glyphicon-remove'></span></a></td>";



                echo "</tr>";
              }

              echo "</table>";

              extract($_GET);
              if(@$idborrar==2){

                $sqlborrar="DELETE FROM login WHERE id=$id";
                $resborrar=mysqli_query($mysqli,$sqlborrar);
                echo '<script>alert("REGISTRO ELIMINADO")</script> ';
              //header('Location: proyectos.php');
                echo "<script>location.href='indexadmin.php'</script>";
              }

              ?>

              <div class="span8">

              </div>  
            </div>  
            <br/>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div> <!-- /container --> 
  <?php include('inc/footer.php');?>