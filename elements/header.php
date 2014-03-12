	<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mon blog</title>
    <meta name="description" content="en-tête de la charte">
    <meta name="author" content="Laurent Boursault">
		<?php Loader::element('header_required'); ?>		
		<link href="<?php echo $this->getThemePath(); ?>/assets/css/grids.css" rel="stylesheet" type="text/css" title="theme">
    	<link href="<?php echo $this->getThemePath(); ?>/assets/css/page.css" rel="stylesheet" type="text/css" title="theme">	
	</head>
	<body>
	<div class=menu>     
		<div><img width="150" height="45" alt="logo" src="<?php echo $this->getThemePath(); ?>/assets/images/logo.jpg" /></div>
		    <div class="element-menu">            
          	<!-- notifications -->          	
          	<!-- Menu -->
          	<?php				
				$a= new GlobalArea('Menu');
				$a->display($c);				
			?>        
        </div>
	</div> 	
<br />
			
