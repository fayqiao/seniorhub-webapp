<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf8" />
		
		<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet" media="screen, projection" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:500,600' rel='stylesheet' type='text/css'>


		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>
		
		<?php wp_head(); ?>
		
    
  </head>
  <body <?php body_class($class); ?>>
  <div id="topnav">
  	<div class="container">
	  	<div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-collapse">
        	<ul></ul>
        </div>
      </div>
	  		<div class="col-sm-3">
	  			<div id="logo"><a href="<?php bloginfo('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" class="img-responsive" /></a></div>
	  		</div>
	  		<div class="col-sm-9">
	  			<div class="row" id="mentop">
	  				<div class="col-sm-12">
		  			<div id="search">
		  			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
		  			<input type="text" id="s" name="s" value="SEARCH SITE" onfocus="if(this.value == 'SEARCH SITE') { this.value = ''; }"  />
		  			</form>
		  			</div>
		  			<?php wp_nav_menu( array('menu' => 'Top', 'menu_class' => 'nav navbar-nav', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
	  				</div>
	  			</div>
	  			<div class="row">
	  				<div class="col-sm-12">
		  			<nav class="navbar navbar-default" role="navigation">
			  			<div>
				  			<?php
				  				wp_nav_menu( 
				  					array(
				  						'menu' => 'Main',
				  						'menu_class' => 'nav navbar-nav',
				  						'depth'=> 3,
				  						'container'=> false/*,
				  						'walker'=> new Bootstrap_Walker_Nav_Menu*/
				  					)
				  				); 
				  			?>
				  		</div>
				  	</nav>
	  				</div>
	  			</div>
	  		
	  		</div>
	  	</div>

  	</div>
  </div>
  
  
  <div id="slideout">
  	
  	<?php if (is_front_page()){
    	echo do_shortcode("[metaslider id=4]"); 
    }
    else{
	    echo do_shortcode("[metaslider id=78]"); 
    }
	?>
	
	

    
  	<?php if (! is_front_page()){ ?>
    <div class="pagetitle">
    	<div class="container">
    		<?php if ($post->post_parent) { ?>
    		<h2><?php echo get_the_title($post->post_parent); ?></h2>
    		<?php } else { ?>
    		<h2><?php the_title(); ?></h2>
    		<?php } ?>
    	</div>
    </div>
    <?php } ?>
	
  </div>
  
  

    
    
    
    
    <div id="main-container" class="container">
    
    
    
    	
    	
