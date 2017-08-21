

<div class="rt-social-buttons">
<?php foreach ($social as $value) { ?>
				<a id="<?php echo $value->class_social; ?>" href="<?php echo $value->direc_social; ?>" target="_blank">
					<span class="rt-social-icon">
						<span class="rt-social-text"><?php echo $value->nombre_social; ?></span>
					</span>
				</a>
<?php } ?>
</div>


