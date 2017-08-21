  <div id="slides">
  	<?php foreach ($slider as $slide) {
  		echo "<img src=".base_url()."addons/img/fotos/".$slide->nombre_fotos.">";
  	}
  	?>	
      <a href="#" class="slidesjs-previous slidesjs-navigation"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>