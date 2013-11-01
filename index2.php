<?php

	defined('_JEXEC') or die;
	
	$doc = JFactory::getDocument();
	
	$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.css');
	$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
	$doc->addStyleSheet('templates/' . $this->template . '/css/font-awesome.min.css');
	
	$doc->addScript('/templates/' . $this->template . '/js/jquery.js', 'text/javascript');
	$doc->addScript('/templates/' . $this->template . '/js/bootstrap.min.js', 'text/javascript');
	$doc->addScript('/templates/' . $this->template . '/js/holder.js', 'text/javascript');
	$doc->addScript('/templates/' . $this->template . '/js/carousel.js', 'text/javascript');

?>

<!DOCTYPE html>
<html lang="pt">
<head>

	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
	<div class="navbar-wrapper">
	<!-- NAVBAR - Inicio --> 
	<div class="container">
				
		<div class="row navbar-prismann" style="background: url(img/nav-background.gif) repeat-x">
		  
		  <!-- LOGO - Inicio --> 
		  <div class="col-md-4 navbar-logo">
		  	<img src="img/logo.png" alt="" />
		  </div>
		  <!-- LOGO - Fim --> 
		  
		  <!-- NAVEGACAO - Inicio --> 
		  <div class="col-md-8">
		  	<div class="navbar navbar-inverse navbar-static-top">
	          <div class="container">
	            <div class="navbar-collapse collapse">
		              <ul class="nav navbar-nav">
		                <li class="active"><a href="index.html">Inicío</a></li>
		                <li><a href="sobre-nos.html">Empresa</a></li>
		                <li class="dropdown">
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos e Soluções <b class="caret"></b></a>
		                  <ul class="dropdown-menu">
		                    <li><a href="#">Action</a></li>
		                    <li><a href="#">Another action</a></li>
		                    <li><a href="#">Something else here</a></li>
		                    <li class="divider"></li>
		                    <li class="dropdown-header">Nova Seção</li>
		                    <li><a href="#">Separated link</a></li>
		                    <li><a href="#">One more separated link</a></li>
		                  </ul>
		                </li>
		                <li><a href="#contact">Clientes</a></li>
		                <li><a href="contato.html">Contato</a></li>
		              </ul>
		        </div>
		     </div>
	        </div> 
		  </div>
		  <!-- NAVEGACAO - FIM --> 
		  
		</div>	    
    </div>
    <!-- NAVBAR - Fim --> 
	</div>
	    
    <!-- CONTEUDO E MENU - Inicio -->
    <div class="container">
    	
    	<div class="row">
	  		<div class="col-md-12">
	  			<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li><a href="#">Library</a></li>
				  <li class="active">Data</li>
				</ol>
		  	</div>
	  </div>

    	<div class="row">
    		<div class="col-md-4" align="center">
				<h2>Heading 1</h2>
    		<div class="col-md-4" align="center">
    			<h2>Heading 2</h2>
    		</div>
    		<div class="col-md-4" align="center">
    			<h2>Heading 3</h2>
    		</div>
    	</div>
    	
   	  <hr class="pub-divider" />

      <div class="row">
        <div class="col-md-8 pub">
 				<jdoc:include type="modules" name="position-3" style="xhtml" />
                <jdoc:include type="message" />
                <jdoc:include type="component" />
                <jdoc:include type="modules" name="position-2" style="none" />
        </div>
        <div class="col-md-4" align="center">
          	<jdoc:include type="modules" name="position-7" style="well" />
        </div>
      </div>
    	
    </div>
    <!-- CONTEUDO E MENU - Fim -->
    
    <!-- RODAPE - Fim -->
    <div class="container footer">
    	<hr />
    	<p align="center">
    		<jdoc:include type="modules" name="footer" style="xhtml" />
    	</p>    	
    </div>
    <!-- RODAPE - Fim -->    
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/carousel.js"></script>
</body>
</html>
