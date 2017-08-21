<div class="content-wrapper">
  <section class="content">
          <!-- Formulario -->
          <div class="box">
          <?php if(!isset($record)){
            echo form_open('Admin/Asociales/guardar', ['class' => 'form-horizontal']);
            echo '<div class="box-header with-border">';
            echo '<h3 class="box-title">Agregar Redes Sociales</h3>';
            echo '</div>';
          }else{
            echo form_open("Admin/Asociales/actualizar/$record->id_social", ['class' => 'form-horizontal']);
            echo '<div class="box-header with-border">';
            echo '<h3 class="box-title">Actualizar Redes Sociales</h3>';
            echo '</div>';            
          }
          ?>
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="hidden" name="id" value ="<?php if (isset($record)) { echo $record->id_social; } else { echo "0";}?>">
                    <?php echo form_label('Nombre', 'txtNomSoc',['class'=>'control-label col-lg-4']); ?>
                    <div class="col-lg-8">
                    <?php echo form_input(['class'=>'form-control','name'=>'txtNomSoc','id'=>'txtNomSoc','placeholder'=>'Ingrese un nombre para su red social','value'=>set_value('txtNomSoc',isset($record)?$record->nombre_social : null)]);?>                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                <?php echo form_error('txtNomSoc'); ?>
                </div>
              </div>
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <?php echo form_label('Direccion', 'txtNomDir',['class'=>'control-label col-lg-4']); ?>
                    <div class="col-lg-8">
                    <?php echo form_input(['class'=>'form-control','name'=>'txtNomDir','id'=>'txtNomDir','placeholder'=>'Ingrese una direccion para su red social','value'=>set_value('txtNomDir',isset($record)?$record->direc_social : null)]);?>                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                <?php echo form_error('txtNomDir'); ?>
                </div>
              </div>              
              <div class="box-footer" align="center">
                <?php echo form_submit(['value'=>"AGREGAR",'class'=>'btn btn-success']); ?>
                <?php echo anchor("Admin/Asociales", "CANCELAR", ['class'=>'btn btn-default']); ?>
              </div>
          <?php echo form_close(); ?>
          </div>
          <!--  /.Formulario -->
  </section>
</div>