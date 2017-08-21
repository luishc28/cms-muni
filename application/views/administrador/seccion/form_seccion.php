<div class="content-wrapper">
  <section class="content">
          <!-- Formulario -->
          <div class="box">
          <?php if(!isset($record)){
            echo form_open('Admin/Aseccion/guardar', ['class' => 'form-horizontal']);
            echo '<div class="box-header with-border">';
            echo '<h3 class="box-title">Agregar Sección</h3>';
            echo '</div>';
          }else{
            echo form_open("Admin/Aseccion/actualizar/$record->id_seccion", ['class' => 'form-horizontal']);
            echo '<div class="box-header with-border">';
            echo '<h3 class="box-title">Actualizar Sección</h3>';
            echo '</div>';            
          }
          ?>
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="hidden" name="id" value ="<?php if (isset($record)) { echo $record->id_seccion; } else { echo "0";}?>">
                    <?php echo form_label('Nombre', 'txtNomSec',['class'=>'control-label col-lg-4']); ?>
                    <div class="col-lg-8">
                    <?php echo form_input(['class'=>'form-control','name'=>'txtNomSec','id'=>'txtNomSec','placeholder'=>'Ingrese un nombre para su sección','value'=>set_value('txtNomSec',isset($record)?$record->nombre_seccion : null)]);?>                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                <?php echo form_error('txtNomSec'); ?>
                </div>
              </div>
              <div class="box-footer" align="center">
                <?php echo form_submit(['value'=>"AGREGAR",'class'=>'btn btn-success']); ?>
                <?php echo anchor("Admin/Aseccion", "CANCELAR", ['class'=>'btn btn-default']); ?>
              </div>
          <?php echo form_close(); ?>
          </div>
          <!--  /.Formulario -->
  </section>
</div>