<div class="content-wrapper">
  <section class="content">
          <!-- Formulario -->
          <div class="box">
          <?php if(!isset($record)){
            echo form_open('Admin/Acategoria/guardar', ['class' => 'form-horizontal']);
            echo '<div class="box-header with-border">';
            echo '<h3 class="box-title">Agregar Categoria</h3>';
            echo '</div>';
          }else{
            echo form_open("Admin/Acategoria/actualizar/$record->id_categoria", ['class' => 'form-horizontal']);
            echo '<div class="box-header with-border">';
            echo '<h3 class="box-title">Actualizar Categoria</h3>';
            echo '</div>';
          }
          ?>
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="hidden" name="id" value ="<?php if (isset($record)) { echo $record->id_categoria; } else { echo "0";}?>">
                    <?php echo form_label('Categoria', 'txtNomCat',['class'=>'control-label col-lg-4']); ?>
                    <div class="col-lg-8">
                    <?php echo form_input(['class'=>'form-control','name'=>'txtNomCat','id'=>'txtNomCat','placeholder'=>'Ingrese un nombre para su Categoria','value'=>set_value('txtNomCat',isset($record)?$record->nombre_categoria : null)]);?>                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                <?php echo form_error('txtNomCat'); ?>
                </div>
              </div>
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                    <?php echo form_label('Seccion', 'txtNomSec',['class'=>'control-label col-lg-4']); ?>
                    <div class="col-lg-8">
                    <?php echo form_dropdown('txtNomSec',$seccion, set_value('txtNomSec',isset($record)?$record->id_seccion : null),['class' => 'form-control']);  ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                <?php echo form_error('txtNomSec'); ?>
                </div>                
              </div>
              <div class="box-footer" align="center">
                <?php echo form_submit(['value'=>"AGREGAR",'class'=>'btn btn-success']); ?>
                <?php echo anchor("Admin/Acategoria", "CANCELAR", ['class'=>'btn btn-default']); ?>
              </div>
          <?php echo form_close(); ?>
          </div>
          <!--  /.Formulario -->
  </section>
</div>