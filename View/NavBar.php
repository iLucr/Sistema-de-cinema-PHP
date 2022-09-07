
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Cinema<small>S.F</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	       <i class="fas fa-bars"></i>
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active descer"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item descer"><a href="#" class="nav-link">Ingressos</a></li>
                  <li class="nav-item descer"><a href="#" class="nav-link">Filmes</a></li>
											<?php
												$cli_img = "fotonaologado.png";
											if (isset($_SESSION['cli'])) {
												if (isset($_SESSION['img'])) {
													$cli_img = $_SESSION['img'];
											} 
												echo "<li class='nav-item cart' ><a href='cart.html' class='nav-link perfil' data-toggle='modal' data-target='#Modallogado'><img id='perfil' src='../perfisUsuarios/".$cli_img."' alt=''>";
											}else {
												echo "<li class='nav-item cart' ><a href='cart.html' class='nav-link perfil' data-toggle='modal' data-target='#myModal'><img id='perfil' src='../perfisUsuarios/".$cli_img."' alt=''>";
											} 
											
											
											?>
	          
                  
                      
                      
                      
                      </a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>