		<aside class="main-sidebar">
		    <!-- sidebar: style can be found in sidebar.less -->
		    <section class="sidebar">
		      	<!-- search form -->
		      	<form action="#" method="get" class="sidebar-form">
		        	<div class="input-group">
		          		<input type="text" name="q" class="form-control" placeholder="Search...">
		              	<span class="input-group-btn">
		                	<button type="submit" name="search" id="search-btn" class="btn btn-flat">
		                		<i class="fa fa-search"></i>
		                	</button>
		              	</span>
		        	</div>
		      	</form>
		      	<!-- /.search form -->

			    <!-- sidebar menu: : style can be found in sidebar.less -->
			    <ul class="sidebar-menu" data-widget="tree">
		        	<li class="header">MENU</li>
		        	<li class="treeview">
				        <a href="#">
				            <i class="fa fa-dashboard"></i>
				            <span>Menu Navegación</span>
				            <span class="pull-right-container">
				              <i class="fa fa-angle-left pull-right"></i>
				            </span>
				        </a>
			          	<ul class="treeview-menu">
				            <li><a href="<?php echo base_url()?>Admin/Aseccion"><i class="fa fa-circle-o"></i> Sección</a></li>
				            <li><a href="<?php echo base_url()?>Admin/Acategoria"><i class="fa fa-circle-o"></i> Categoría</a></li>
			          	</ul>
		        	</li>
			        <li class="treeview">
			          	<a href="#">
				            <i class="fa fa-share"></i>
				            <span>Multilevel</span>
				            <span class="pull-right-container">
				              	<i class="fa fa-angle-left pull-right"></i>
				            </span>
			          	</a>
			          	<ul class="treeview-menu">
				            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
				            <li class="treeview">
				              	<a href="#"><i class="fa fa-circle-o"></i> Level One
					                <span class="pull-right-container">
					                  	<i class="fa fa-angle-left pull-right"></i>
					                </span>
				              	</a>
				              	<ul class="treeview-menu">
				                	<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
					                <li class="treeview">
					                  	<a href="#"><i class="fa fa-circle-o"></i> Level Two
						                    <span class="pull-right-container">
						                      	<i class="fa fa-angle-left pull-right"></i>
						                    </span>
					                  	</a>
					                  	<ul class="treeview-menu">
						                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
						                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
					                  	</ul>
					                </li>
				              	</ul>
				            </li>
				            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
			          	</ul>
			        </li>
			        <li class="header">SOCIALES</li>
			        <li><a href="<?php echo base_url()?>Admin/Asociales"><i class="fa fa-circle-o text-red"></i> <span>Redes Sociales</span></a></li>
			        <li class="header">PORTADA</li>
			        <li><a href="<?php echo base_url()?>Admin/Afotos"><i class="fa fa-circle-o text-red"></i> <span>Fotos Portada</span></a></li>
		      	</ul>
		    </section>
		    <!-- /.sidebar -->
		</aside>