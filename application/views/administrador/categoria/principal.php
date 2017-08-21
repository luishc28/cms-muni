    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Menú - Categoría</h1>
          <ol class="breadcrumb">
              <li> <a href="#"><i class="fa fa-dashboard"></i> Home</a> </li>
              <li> <a href="#">Examples</a> </li>
              <li class="active">User profile </li>
          </ol>
        </section>


        <!-- Main content -->
        <section class="content">
          <!-- Formulario -->
          <div class="box">
            <div class="box-header with-border">
                      <?php echo anchor("Admin/Acategoria/nuevo", "<img style='max-height:20px;' src=".base_url()."addons/img/icon-page/add.ico>&nbsp;NUEVO", ['class'=>'btn btn-sm btn-success']); ?>                               
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                      <?php if( $error = $this->session->flashdata('response') ): ?>  
                        <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $error;?>
                        </div>
                      <?php endif; ?> 
              <table class="table table-bordered" id="categoria">
                <thead>
                  <th style="width: 10px">ID</th>
                  <th>Nombre Categoria</th>
                  <th>Nombre Sección</th>
                  <th>Estado</th>
                  <th>Operación</th>
                </thead>
                <tbody>
                  <?php foreach ($categoria as $value) {
                    if($value->estado_categoria == '1'){
                      $nomEstado = "<img style='max-height:20px;' src=".base_url()."addons/img/icon-page/check.ico>&nbsp;ACTIVADO";
                      $asd = 'desactivar';
                    }else if($value->estado_categoria == '0'){
                      $asd = 'activar';
                      $nomEstado = "<img style='max-height:20px;' src=".base_url()."addons/img/icon-page/cancel.ico>&nbsp;DESACTIVADO";
                    }
                   ?>
                    <tr>
                      <td> <?php echo $value->id_categoria ?> </td>
                      <td> <?php echo $value->nombre_categoria ?> </td>
                      <td> <?php echo $value->nombre_seccion ?></td>
                      <td> 
                     <?php echo anchor("Admin/Acategoria/".$asd."/".$value->id_categoria,"$nomEstado", ['class'=>'btn btn-sm btn-primary']); ?>                      
                      </td>
                      <td>
                      <?php echo anchor("Admin/Acategoria/editar/{$value->id_categoria}", "<img style='max-height:20px;' src=".base_url()."addons/img/icon-page/edit.ico>&nbsp;EDITAR", ['class'=>'btn btn-sm btn-info']); ?>
                      </td>                      
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

        </section>
        <!-- /.content -->
      </div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#categoria').DataTable();
} );
</script>