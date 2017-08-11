		<nav class="navbar navbar-default">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>		
		    </div>
		    <!-- Collection of nav links and other content for toggling -->
		    <div id="navbarCollapse" class="collapse navbar-collapse">
		        <ul class="nav navbar-nav"> 
                    <li><a href="#">Inicio</a></li>
                        <?php foreach($seccion as $secc){
                            echo '<li class="dropdown">';
                            echo '<a data-toggle="dropdown" class="dropdown-toggle" href="#">'.$secc->nombre_seccion.'<b class="caret"></b></a>';
                            echo '<ul class="dropdown-menu">';
                            foreach ($categoria as $cate) {
                                if ($secc->id_seccion==$cate->id_seccion){
                                    echo '<li><a href="#">'.$cate->nombre_categoria.'</a></li>';
                                }
                            }
                            echo '</ul>';
                            echo '</li>';
                        }
                         ?>
		        </ul>
		    </div>
		</nav>
