            <div id="thumb-icon1" class="carousel vertical slide">                
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <?php foreach ($thumb_vertical as $i => $thumb2) { ?>
                            <?php   if (($i > 0) && ($i % 4 == 0)) { ?>                        
                          </div>
                    </div>
                    <div class="item">
                        <div class="row">
                        <?php } ?>
                             <div class="col-md-12">
                                <a class="thumbnail" href="#x">
                                <img src="<?php echo base_url();?>addons/img/fotos/<?php echo $thumb2->nombre_fotos; ?>" class="img-thumbnail">  
                                </a>
                            </div>   
                        <?php } ?>                              
                        </div>                        
                    </div>
                </div>
                <!--/carousel-inner--> 
               
            </div>
            <!--/myCarousel-->
