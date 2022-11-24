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
}?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Actualización del libro</h1>
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
    Registre el libro:
  </div>
  <div class="card-body">
        <form action="controlador_delete.php" method="post">        

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Código</label>
                        <input type="text" class="form-control" value="<?php echo $codigo; ?>" disabled>
                        <input type="text" name="codigo"class="form-control" value="<?php echo $codigo; ?>" hidden>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label for="">Área</label>
                        <table>
                          <tr>

                            <td>
                                <select name="area" id="" class="form-control" disabled>
                                <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
                                  <?php
                                    $query_area=$pdo->prepare('SELECT * FROM tb_areas WHERE estado = "1" ORDER BY area ASC');
                                    $query_area->execute();
                                    $areas=$query_area->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($areas as $area){
                                  
                                    $id_areas = $area['id_areas'];
                                    $area = $area['area'];
                                    ?>
                                    <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
                                  <?php
                                    }
                                  ?>
                                  
                                </select>
                          </td>
                        
                            <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                 +
                              </button>
                            </td>
                          </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Módulo</label>
                        <table>
                          <tr>

                            <td>
                                <select name="modulo" id="" class="form-control" disabled>
                                <option value="<?php echo $modulo; ?>"><?php echo $modulo; ?></option>
                                  <?php
                                    $query_modulo=$pdo->prepare('SELECT * FROM tb_modulos WHERE estado = "1"');
                                    $query_modulo->execute();
                                    $modulos=$query_modulo->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($modulos as $modulo){
                                  
                                    $id_modulos = $modulo['id_modulos'];
                                    $modulo = $modulo['modulo'];
                                    ?>
                                    <option value="<?php echo $modulo; ?>"><?php echo $modulo; ?></option>
                                  <?php
                                    }
                                  ?>
                                  
                                </select>
                          </td>
                        
                            <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_modulo">
                                 +
                              </button>
                            </td>
                          </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label for="">Letra</label>
                    <table>
                          <tr>

                            <td>
                            <select name="letra" id="" class="form-control" disabled>
                            <option value="<?php echo $letra; ?>"><?php echo $letra; ?></option>
                                  <?php
                                    $query_letra=$pdo->prepare('SELECT * FROM tb_letra WHERE estado = "1"');
                                    $query_letra->execute();
                                    $letras=$query_letra->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($letras as $letra){
                                  
                                    $id_letra = $letra['id_letra'];
                                    $letra = $letra['letra'];
                                    ?>
                                    <option value="<?php echo $letra; ?>"><?php echo $letra; ?></option>
                                  <?php
                                    }
                                  ?>
                                  
                                </select>
                          </td>
                        
                            <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_letra">
                                 +
                              </button>
                            </td>
                          </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
            <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Autor</label>
                        <input type="text" class="form-control" name="autor" value="<?php echo $autor; ?>" disabled>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Título</label>
                        <input type="text" class="form-control" name="titulo" value="<?php echo $titulo; ?>" disabled>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Editorial</label>
                        <table>
                          <tr>

                            <td>
                            <select name="editorial" id="" class="form-control" disabled>
                            <option value="<?php echo $editorial; ?>"><?php echo $editorial; ?></option>
                                  <?php
                                    $query_editorial=$pdo->prepare('SELECT * FROM tb_editorial WHERE estado = "1" ORDER BY editorial ASC');
                                    $query_editorial->execute();
                                    $editoriales=$query_editorial->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($editoriales as $editorial){
                                  
                                    $id_editorial = $editorial['id_editorial'];
                                    $editorial = $editorial['editorial'];
                                    ?>
                                    <option value="<?php echo $editorial; ?>"><?php echo $editorial; ?></option>
                                  <?php
                                    }
                                  ?>
                                  
                                </select>
                          </td>
                        
                            <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_editorial">
                                 +
                              </button>
                            </td>
                          </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label for="">Librería</label>
                    <table>
                          <tr>

                            <td>
                            <select name="librerias" id="" class="form-control" disabled>
                            <option value="<?php echo $libreria; ?>"><?php echo $libreria; ?></option>
                                  <?php
                                    $query_libreria=$pdo->prepare('SELECT * FROM tb_librerias WHERE estado = "1"');
                                    $query_libreria->execute();
                                    $librerias=$query_libreria->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($librerias as $libreria){
                                  
                                    $id_librerias = $libreria['id_librerias'];
                                    $libreria = $libreria['librerias'];
                                    ?>
                                    <option value="<?php echo $libreria; ?>"><?php echo $libreria; ?></option>
                                  <?php
                                    }
                                  ?>
                                  
                                </select>
                          </td>
                        
                            <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_libreria">
                                 +
                              </button>
                            </td>
                          </tr>
                        </table>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Observaciones</label>
                        <input type="text" class="form-control" name="observaciones" value="<?php echo $observaciones; ?>" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Stock</label>
                        <input type="text" class="form-control" name="stock" value="<?php echo $stock; ?>" disabled>
                        <input type="text" name="id_libros" value="<?php echo $id_get; ?>" hidden>
                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <a href="<?php echo $URL."/admin/";?>" class="btn btn-default">Cancelar</a>

              </div>
              <div class="col-md-6">
                <button type="submit" name="save_libro" onclick="return confirm('Confirme si quiere enviar los datos')" class="btn btn-danger">Eliminar libro</button>
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