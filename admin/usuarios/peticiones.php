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
            <div class="col-md-6">
                  <div class="form-group">
                  <label for="">Libro a prestar</label>
                      <select name="cargo" id="" class="form-control">
                          <option value="administrador">Libro 1</option>
                          <option value="sub_admin">Libro 2</option>
                          <option value="usuario">Libro 3</option>
                          <option value="publico">Libro 4</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="">Usuario a prestar libro</label>
                      <select name="cargo" id="" class="form-control">
                          <option value="administrador">Usuario 1</option>
                          <option value="sub_admin">Usuario 2</option>
                          <option value="usuario">Usuario 3</option>
                          <option value="publico">Usuario 4</option>
                      </select>
                  </div>
                </div>
            </div>

            <div class="row">
            <div class="col-md-4">
                  <div class="form-group">
                  <label for="">Stock</label>
                      <select name="cargo" id="" class="form-control">
                          <option value="administrador"> 1</option>
                          <option value="sub_admin"> 2</option>
                          <option value="usuario"> 3</option>
                          <option value="publico"> 4</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Editorial</label>
                    <input type="email" name="" class="form-control" placeholder="Nombre editorial" REQUIRED>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Cargo usuario</label>
                    <input type="email" name="" class="form-control" placeholder="Cargo usuario" REQUIRED>
                  </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Grupo</label>
                    <input type="email" name="" class="form-control" placeholder="A-B-C-D" REQUIRED>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Área</label>
                    <input type="text" name="" class="form-control" placeholder="Lenguaje-Historia-Matemáticas" REQUIRED>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="">Código</label>
                    <input type="text" name="" class="form-control" placeholder="#391281" REQUIRED>
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
