<?php
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');
include ('../../layout/admin/sesion.php');
include ('../../layout/admin/datos_sesion_user.php');
?>
<?php include ('../../layout/admin/parte1.php');
$id_get = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM tb_libros WHERE id_libros = '$id_get' ");
$query->execute();
$libros = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($libros as $libro){
    $id_libros = $libro['id_libros'];
    $codigo = $libro['codigo'];
    $titulo = $libro['titulo'];
    $autor = $libro['autor'];
    $area = $libro['area'];
    $modulo = $libro['modulo'];
    $letra = $libro['letra'];
    $editorial = $libro['editorial'];
    $libreria = $libro['librerias'];
    $stock = $libro['stock'];
    $observaciones = $libro['observaciones'];
    $estado = $libro['estado'];
}
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detalles del libro</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="card">
  <div class="card-header">
    
    <?php 
    if(isset($_SESSION['message'])){
      echo "<h4 class='alert alert-success'>".$_SESSION['message']."</h4>";
      unset($_SESSION['message']); 
    }
    ?>
    Datos del libro:
  </div>
  <div class="card-body">
       

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Código</label>
                        <input type="text" class="form-control" value="<?php echo $codigo; ?>" disabled >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label for="">Área</label>
                    <input type="text" class="form-control" value="<?php echo $area; ?>" disabled >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Módulo</label>
                        <input type="text" class="form-control" value="<?php echo $modulo; ?>" disabled >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label for="">Letra</label>
                    <input type="text" class="form-control" value="<?php echo $letra; ?>" disabled >
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Autor</label>
                        <input type="text" class="form-control" value="<?php echo $autor; ?>" disabled >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Título</label>
                        <input type="text" class="form-control" value="<?php echo $titulo; ?>" disabled >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Editorial</label>
                        <input type="text" class="form-control" value="<?php echo $editorial; ?>" disabled >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label for="">Librería</label>
                    <input type="text" class="form-control" value="<?php echo $libreria; ?>" disabled >
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Observaciones</label>
                        <input type="text" class="form-control" value="<?php echo $observaciones; ?>" disabled >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Stock</label>
                        <input type="text" class="form-control" value="<?php echo $stock; ?>" disabled >
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <a href="<?php echo $URL."/admin/";?>" class="btn btn-default">Volver</a>

              </div>
            </div>
          </form>
  </div>
</div>
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <?php include ('../../layout/admin/parte2.php')?>

<!-- Modal area -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de área</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controlador_area.php" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Nombre del área:</label>
                <input type="text" class="form-control" name="area">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="save_area" class="btn btn-primary">Registrar área</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal modulo -->
<div class="modal fade" id="exampleModal_modulo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de Módulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controlador_modulo.php" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Nombre del Módulo:</label>
                <input type="text" class="form-control" name="modulo">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="save_modulo" class="btn btn-primary">Registrar Módulo</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- Modal liberias -->
<div class="modal fade" id="exampleModal_libreria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de libería</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controlador_libreria.php" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Número de librería:</label>
                <input type="text" class="form-control" name="libreria">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="save_libreria" class="btn btn-primary">Registrar librería</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal editorial -->
<div class="modal fade" id="exampleModal_editorial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de editorial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controlador_editorial.php" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Número de editorial:</label>
                <input type="text" class="form-control" name="editorial">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="save_editorial" class="btn btn-primary">Registrar editorial</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModal_letra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro de letra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controlador_letra.php" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="">Número de letra:</label>
                <input type="text" class="form-control" name="letra">
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" name="save_letra" class="btn btn-primary">Registrar letra</button>
      </div>
      </form>
    </div>
  </div>
</div>