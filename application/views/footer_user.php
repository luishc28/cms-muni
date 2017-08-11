<script  src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  	crossorigin="anonymous">
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>/addons/js/semantic.min.js"></script>
<script src="<?php echo base_url(); ?>/addons/js/dualbar.js"></script>
<script src="<?php echo base_url(); ?>/addons/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/addons/js/jquery.slides.min.js"></script>

<script>
    $(function(){
      $("#slides").slidesjs({
      	width:1100,
      	height: 350,
        navigation: true
      });


    });   
  </script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#thumb-icon2').carousel({
		interval: 2500,
		pause: "hover"
		});
		$(".left").click(function(){
		    $("#thumb-icon2").carousel("prev");
		});
		$(".right").click(function(){
		    $("#thumb-icon2").carousel("next");
		});		
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#thumb-icon1').carousel({
		interval: 2500,
		pause: "hover"
		});
		$(".left").click(function(){
		    $("#thumb-icon1").carousel("prev");
		});
		$(".right").click(function(){
		    $("#thumb-icon1").carousel("next");
		});		
	});
</script>

</body>
</html>