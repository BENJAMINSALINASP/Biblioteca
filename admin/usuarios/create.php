<?php
include ('../../app/config/config.php');
include ('../../app/config/conexion.php');
include ('../../layout/admin/sesion.php');
include ('../../layout/admin/datos_sesion_user.php');
?>
<?php include ('../../layout/admin/parte1.php')?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro de un nuevo Usuario</h1>
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
    Registre usuario:
  </div>
  <div class="card-body">
        <form action="controlador_create.php" method="post">
            <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Rut</label>
                    <input type="text" name="rut" class="form-control" placeholder="Escribe el rut..." REQUIRED>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Nombres</label>
                    <input type="text" name="nombres" class="form-control" placeholder="Escribe los nombres completos..." REQUIRED>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" placeholder="Escribe los apellidos completos..." REQUIRED>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" placeholder="Escribe el número de teléfono...">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">FNAC</label>
                    <input type="date" name="fnac" class="form-control" REQUIRED>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                  <label for="">Cargo</label>
                      <select name="cargo" id="" class="form-control">
                          <option value="administrador">ADMINISTRADOR</option>
                          <option value="sub_admin">PROFESOR</option>
                          <option value="usuario">ALUMNO</option>
                          <option value="publico">PÚBLICO</option>
                      </select>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Correo</label>
                    <input type="email" name="correo" class="form-control" placeholder="Escribe el correo..." REQUIRED>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="text" name="contraseña" class="form-control" placeholder="Escribe la contraseña..." REQUIRED>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Confirmación contraseña</label>
                    <input type="text" name="verificar_contraseña" class="form-control" placeholder="Vuelve a escribir la contraseña..." REQUIRED>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <a href="<?php echo $URL."/admin/";?>" class="btn btn-default">Cancelar</a>

              </div>
              <div class="col-md-6">
                <button type="submit" name="save_student" onclick="return confirm('Confirme si quiere enviar los datos')" class="btn btn-primary">Registrar usuario</button>
              </div>
            </div>
          </form>
  </div>
</div>
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <?php include ('../../layout/admin/parte2.php')?>
