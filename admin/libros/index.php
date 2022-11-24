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
            <h1 class="m-0">Listado de libros</h1>
              <br>
            <div class="card card-cyan">
             <div class="card-header">
              Libros
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
                    <th>Código</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Área</th>
                    <th>Módulo</th>
                    <th>Letra</th>
                    <th>Editorial</th>
                    <th>Librería</th>
                    <th>Stock</th>
                    <!--<th>Observaciones</th>-->
                    <th>Estado</th>
                    <th><center>Acción</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $contador=0;
                  $query=$pdo->prepare('SELECT * FROM tb_libros WHERE estado = "1"');
                  $query->execute();
                  $libros=$query->fetchAll(PDO::FETCH_ASSOC);
                  foreach($libros as $libro){
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

                    $contador = $contador +1;
                  
                  ?>
                <tr>
                  <td><?php echo $contador; ?></td>
                  <td><?php echo $codigo; ?></td>
                  <td><?php echo $titulo; ?></td>
                  <td><?php echo $autor; ?></td>
                  <td><?php echo $area; ?></td>
                  <td><?php echo $modulo; ?></td>
                  <td><?php echo $letra; ?></td>
                  <td><?php echo $editorial; ?></td>
                  <td><?php echo $libreria; ?></td>
                  <td><?php echo $stock; ?></td>
                  <!-- <td><?php //echo $observaciones; ?></td>-->
                  <td><?php echo $estado; ?></td>
                  <center>
                  <td>
                    <a href="show.php?id=<?php echo $id_libros;?>" class="btn btn-info btn-sm">Ver<i class="fas fa-eye"></i></a>
                    <a href="edit.php?id=<?php echo $id_libros;?>" class="btn btn-success btn-sm">Editar<i class="fas fa-pen"></i></a>
                    <a href="delete.php?id=<?php echo $id_libros;?>" class="btn btn-danger btn-sm">Borrar<i class="fas fa-trash"></i></a>
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
