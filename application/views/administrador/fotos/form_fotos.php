<div class="content-wrapper">
  <section class="content">
          <!-- Formulario -->
          <div class="box">
          <?php if(!isset($record)){
            echo form_open_multipart('Admin/Afotos/upload', ['class' => 'form-horizontal', 'method' =>'POST'] );
            echo '<div class="box-header with-border">';
            echo '<h3 class="box-title">Agregar Fotos</h3>';
            echo '</div>';
          }else{
            echo form_open_multipart("Admin/Afotos/actualizar/$record->id_fotos", ['class' => 'form-horizontal']);
            echo '<div class="box-header with-border">';
            echo '<h3 class="box-title">Actualizar Fotos</h3>';
            echo '</div>';
          }
          ?>
              <div class="box-body">
                <div class="col-lg-6">
               <input type="hidden" name="id" value ="<?php if (isset($record)) { echo $record->id_fotos; } else { echo "0";}?>">
                  <div class="form-group">
                    <?php echo form_label('Tipo Foto', 'txtNomTipo',['class'=>'control-label col-lg-4']); ?>
                    <div class="col-lg-8">
                    <?php $fotos = array('' => 'Seleccione Tipo Foto', 'Principal' => 'Seccion Principal',
                        'Vertical' => 'Seccion Vertical', 'Horizontal' => 'Seccion Horizontal', 
                        'Alcalde' => 'Seccion Alcalde', 'Iconos-Superior' => 'Seccion Iconos Superiores'); ?>
                    <?php echo form_dropdown('txtNomTipo',$fotos, set_value('txtNomTipo',isset($record)?$record->tipo_foto : null),['class' => 'form-control']);  ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                <?php echo form_error('txtNomTipo'); ?>
                </div>                
              </div>
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <?php echo form_label('Cargar Foto', 'txtNomFoto',['class'=>'control-label col-lg-4']); ?>
                    <div class="col-lg-8">
                      <?php echo form_upload("txtNomFoto"); ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                <?php echo $error_image; ?>
                </div>                
              </div>              
              <div class="box-footer" align="center">
                <?php echo form_submit(['value'=>"AGREGAR",'class'=>'btn btn-success']); ?>
                <?php echo anchor("Admin/Afotos", "CANCELAR", ['class'=>'btn btn-default']); ?>
              </div>
          <?php echo form_close(); ?>
          </div>
          <!--  /.Formulario -->
  </section>
</div>