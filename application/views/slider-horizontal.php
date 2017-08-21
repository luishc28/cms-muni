            <div id="thumb-icon2" class="carousel slide">                
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                        <?php foreach ($thumb_horizontal as $i => $thumb1) { ?>
                        <?php   if (($i > 0) && ($i % 4 == 0)) { ?>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                        <?php } ?>
                            <div class="col-sm-3 col-xs-3">
                                <a class="thumbnail" href="#x">                            
                                <img src="<?php echo base_url();?>addons/img/fotos/<?php echo $thumb1->nombre_fotos; ?>" class="img-thumbnail">   
                                </a>
                            </div>
                        <?php } ?>    
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                </div>
                <!--/carousel-inner--> 
            </div>
            <!--/myCarousel-->
