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
				              <jdoc:include type="modules" name="position-0" />
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
			<jdoc:include type="modules" name="position-0" />
	  	</div>
	  </div>	
   	  
   	  <hr class="pub-divider" />

      <div class="row">
        <div class="col-md-8">
        	
			<jdoc:include type="modules" name="position-3" style="well" />
			<jdoc:include type="message" />
			<jdoc:include type="component" />
			<jdoc:include type="modules" name="position-2" style="none" />
			
        </div>
        <div class="col-md-4" align="center">
        	
          	<jdoc:include type="modules" name="position-7" />
          	
        </div>
      </div>
      
      <hr class="pub-divider" />
      
      <div class="row">
    		<div class="col-md-4" align="center">
    			<jdoc:include type="modules" name="position-4" />
    		</div>
    		<div class="col-md-4" align="center">
    			<jdoc:include type="modules" name="position-5" />
    		</div>
    		<div class="col-md-4" align="center">
				<jdoc:include type="modules" name="position-6" />
    		</div>
    	</div>
   	    	
    </div>
    <!-- CONTEUDO E MENU - Fim -->
    
    <!-- RODAPE - Fim -->
    <div class="container footer">
    	<hr />
    	<p align="center"><jdoc:include type="modules" name="position-8" /></p>    	
    </div>
    <!-- RODAPE - Fim -->    
    
</body>
</html>
