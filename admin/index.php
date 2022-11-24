<?php
include ('../app/config/config.php');
include ('../app/config/conexion.php');
include ('../layout/admin/sesion.php');
include ('../layout/admin/datos_sesion_user.php');

?>
<a href="../login/controlador_cerrar_sesion.php">Cerrar sesión</a>-->
<?php include ('../layout/admin/parte1.php')?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bienvenido</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->

<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
  <table class="table table-hover" style="background-color: #ffffff">
  <thead>
    <tr>
      <th scope="col">Rut</th>
      <td scope="col"> <?php echo $sesion_rut;?> </th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nombres</th>
      <td> <?php echo $sesion_nombres;?> </td>
    </tr>
    <tr>
      <th scope="row">Apellidos</th>
      <td><?php echo$sesion_apellidos; ?> </td>
    </tr>
    <tr>
      <th scope="row">Teléfono</th>
      <td colspan="2"> <?php echo $sesion_telefono; ?> </td>
    </tr>
    <tr>
      <th scope="row">Cargo</th>
      <td colspan="2"> <?php echo $sesion_cargo; ?> </td>
    </tr>
    <tr>
      <th scope="row">FNAC</th>
      <td colspan="2"> <?php echo $sesion_fnac; ?> </td>
    </tr>
    <tr>
      <th scope="row">Correo</th>
      <td colspan="2"> <?php echo $correo_sesion; ?> </td>
    </tr>
  </tbody>
</table>
  </div>
  <div class="col-md-4"></div>
</div>

      </div><!-- /.container-fluid -->
    </div>
  </div>
  <?php include ('../layout/admin/parte2.php')?>
