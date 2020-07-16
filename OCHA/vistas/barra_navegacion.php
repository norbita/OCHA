<nav class="navbar navbar-default">
  <div class="container-fluid">
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
 
      <!-- Button that toggles the navbar on and off on small screens 
	   es lo que convierte la barra de navegacion en 3 lineas cuando colapsa
	  -->
      <button type="button" class="navbar-toggle collapsed" 
	  data-toggle="collapse" 
	  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
 
      <!-- Hides information from screen readers -->
        <span class="sr-only"></span>
 
        <!-- Draws 3 bars in navbar button when in small mode -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
 
      <!-- You'll have to add padding in your image on the top and right of a few pixels (CSS Styling will break the navbar) 
      <a class="pull-left" href="../controladores/pagina_principal.php"><img src="../public/images/logo.png" height="50"></a>-->
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

		<li class="dropdown">
			<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo "Menu" ?> <b class="caret"></b></a>
			<ul role="menu" class="dropdown-menu">		
			   <li><a href='#'><span><?php echo "uno"; ?></span></a></li>
			   <li><a href='#'><span><?php echo "dos"; ?></span></a></li>
			   <li><a href='#'><span><?php echo "tres"; ?></span></a></li>
			</ul>
		</li>
	
		<li class="dropdown">
			<a data-toggle="dropdown" class="dropdown-toggle" href="#">Apps<b class="caret"></b></a>
			<ul role="menu" class="dropdown-menu">		
				<li><a href='#'><span>Web</span></a></li>
				<li><a href='#'><span>Android</span></a></li>
			</ul>
	   </li>
   
       <li><a href=#><span><?php echo "Sobre Nosotros"; ?></span></a></li>
      </ul>
      <!-- navbar-left will move the search to the left -->
      <ul class="nav navbar-nav navbar-right" role="menu" >

			
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
