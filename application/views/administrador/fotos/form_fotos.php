<div class="content-wrapper">
  <section class="content">
          <!-- Formulario -->
          <div class="box">
          <?php if(!isset($record)){
            echo form_open_multipart('Admin/Afotos/guardar', ['class' => 'form-horizontal', 'method' =>'POST', 'enctype' => 'multipart/form-data']);
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
                  <div class="form-group">
                    <input type="hidden" name="id" value ="<?php if (isset($record)) { echo $record->id_fotos; } else { echo "0";}?>">
                    <?php echo form_label('Foto', 'txtNomFot',['class'=>'control-label col-lg-4']); ?>
                    <div class="col-lg-8">
                    <?php echo form_input(['class'=>'form-control','name'=>'txtNomFot', 'type' => 'file','id'=>'txtNomFot','value'=>set_value('txtNomFot',isset($record)?$record->nombre_fotos : null)]);?>  
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                <?php echo form_error('txtNomFot'); ?>
                </div>                
              </div>

              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <?php echo form_label('Url', 'txtUrlFot',['class'=>'control-label col-lg-4']); ?>
                    <div class="col-lg-8">
                    <?php echo form_input(['class'=>'form-control','name'=>'txtUrlFot','id'=>'txtUrlFot','placeholder'=>'Ingrese un url para su foto','value'=>set_value('txtUrlFot',isset($record)?$record->url_fotos : null)]);?>                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                <?php echo form_error('txtUrlFot'); ?>
                </div>
              </div>

              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <?php echo form_label('Tipo', 'txtTipFot',['class'=>'control-label col-lg-4']); ?>
                    <div class="col-lg-8">
                    <?php echo form_dropdown('txtTipFot',$tipo_fotos, set_value('txtTipFot',isset($record)?$record->id_tipo : null),['class' => 'form-control']);  ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                <?php echo form_error('txtTipFot'); ?>
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