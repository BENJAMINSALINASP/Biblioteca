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
          <div class="col-sm-35">
            <h1 class="m-0">Listado de Usuarios</h1>
              <br>
            <div class="card card-cyan">
             <div class="card-header">
              Usuario
             </div>
              <div class="card-body">

              <script type="text/javascript">
$(document).ready(function() {
$('#tabla-1').DataTable({
"language": {
"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
}
});
});
</script>





              <table id= "tabla-1" class="table table-hover table-bordered table-sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Rut</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Cargo</th>
                    <th>FNAC</th>
                    <th>Correo</th>
                    <th>Estado</th>
                    <th><center>Acción</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $contador=0;
                  $query=$pdo->prepare('SELECT * FROM tb_usuarios WHERE estado = "1"');
                  $query->execute();
                  $usuarios=$query->fetchAll(PDO::FETCH_ASSOC);
                  foreach($usuarios as $usuario){
                    $id = $usuario['id_usuario'];
                    $rut = $usuario['rut'];
                    $nombres = $usuario['nombres'];
                    $apellidos = $usuario['apellidos'];
                    $telefono = $usuario['telefono'];
                    $cargo = $usuario['cargo'];
                    $fnac = $usuario['fnac'];
                    $correo = $usuario['correo'];
                    $estado = $usuario['estado'];
                    $contador = $contador +1;
                  
                  ?>
                <tr>
                  <td><?php echo $contador; ?></td>
                  <td><?php echo $rut; ?></td>
                  <td><?php echo $nombres; ?></td>
                  <td><?php echo $apellidos; ?></td>
                  <td><?php echo $telefono; ?></td>
                  <td><?php echo $cargo; ?></td>
                  <td><?php echo $fnac; ?></td>
                  <td><?php echo $correo; ?></td>
                  <td><?php echo $estado; ?></td>
                  <center>
                  <td>
                    <a href="edit.php?id=<?php echo $id;?>" class="btn btn-success btn-sm">Editar<i class="fas fa-pen"></i></a>
                    <a href="delete.php?id=<?php echo $id;?>" class="btn btn-danger btn-sm">Borrar<i class="fas fa-trash"></i></a>
                  </td>
                  </center>
                </tr>

                <?php 
                  }
                  ?>

                </tbody>
                </table>
                </div>
              </div>
              

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
  </div>
  <?php include ('../../layout/admin/parte2.php')?>
