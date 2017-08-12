<?php include_once 'header_user.php' ;?>
<div class="container general">
	<div class="row-fluid top">
		<div class="col-md-offset-7 col-md-5 col-sm-offset-5 col-sm-7 col-xs-12 iconos">

<!-- INICIO ICONOS SUPERIOR -->
            <?php include_once 'icon-top.php' ;?>		    
<!-- FIN ICONOS SUPERIOR -->                
		</div>
	</div>
	<div class="row-fluid body">
	    
<!-- INICIO NAV SUPERIOR -->	    
    <?php include_once 'nav-top.php' ;?>
<!-- FIN NAV SUPERIOR -->	        

<!-- INICIO SOCIAL FLOTANTE -->
    <?php include_once 'social.php' ; ?>
<!-- FIN SOCIAL FLOTANTE -->

<!--CONTENIDO CENTRAL -->

		<div class="container-fluid contenido">			
				<div class="col-md-9 col-sm-12 col-xs-12 pan1">
					<div class="well">
					<?php include_once 'first-slider.php' ;?>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12 pan2">
					<div class="well">
						<center>
							<?php foreach ($alcalde as $alc) {
							?>
								<img class="img-responsive foto_alcalde" src="<?php echo base_url();?>addons/img/fotos/<?php echo $alc->nombre_fotos; ?>">
							<?php
							}
							?>
						</center>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12 pan3">
					<div class="well">
					<?php include_once 'thumb_slide_first.php' ;?>
					</div>				
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12 pan4">
					<div class="well">
						<center>
							<img class="img-responsive foto_alcalde" src="<?php echo base_url();?>addons/img/serenazgo.png">
						</center>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12 pan5">
					<div class="well">
						<?php include_once 'contenido.php' ?>
					</div>
				</div>
				<div class="col-md-3 col-sm-12 col-xs-12 pan6">
					<div class="well">
					<?php include_once 'thumb_slide_second.php' ;?>
					</div>
				</div>				
		</div>
	</div>
	<div class="row-fluid bottom">
        <div class="col-md-5 col-sm-12 col-xs-12 foot">
            <p>Los Pobladores necesitan seguridad, saneamiento, educación, viviendas, transporte público. Juntos vamos a hacer de Huaura un lugar mejor, donde todas las personas puedan soñar en él y se sientan a gusto.
            </p>
        </div>               		
        <div class="col-md-7 col-sm-12 col-xs-12 art-footer">
				<div class="tip">
					<p><span class="glyphicon glyphicon-map-marker"></span><span>Plaza de Armas</span> S/N - Huaura</p>
				</div>
				<div class="tip">
					<p><span class="glyphicon glyphicon-earphone"></span><span>Sub Gerencia de Administración Tributaria y Rentas (Orientación al P&uacute;blico):</span>  (01) 589-5888</p>
				</div>
				<div class="tip">
					<p><span class="glyphicon glyphicon-earphone"></span><span>Sub Gerencia de Desarrollo Humano:</span> (01) 576-7003</p>
				</div>
				<div class="tip">
					<p><span class="glyphicon glyphicon-earphone"></span><span>Sub Gerencia de Seguridad Ciudadana y Gestión de Riesgos:</span> (01) 576-8891</p>
				</div>				
				<div class="tip">
					<p><span class="glyphicon glyphicon-envelope"></span><a href="mailto:informes@munihuaura.gob.pe">informes@munihuaura.gob.pe</a></p>
				</div>               	
		</div>
		<div class="col-md-12  col-sm-12 col-xs-12 foot-copy">
			<p><center>Copyright © 2017. Municipalidad Distrital de Huaura, All Rights Reserved.   </center></p>
		</div>
	</div>	
</div>
<?php include_once 'footer_user.php' ;?>