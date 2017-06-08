<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" conten="width=device-width, initial-scale=1">
  <title></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
<?php $destacada = $destacada[0]; ?>
<header class="site-header" style="background-image:url(<?php echo $destacada; ?>)">
    <nav class="navegacion">
        <div class="container">
              <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
              <span class="sr-only">Toogle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

            </button>

              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/mundo.svg"  class="img-responsive">
                
              </div>

              <div class="navbar-right">
                    <?php
                    wp_nav_menu( array(
                    'theme_location' => 'menu_principal',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbar',
                    'menu_class' => 'nav navbar-nav navbar-right'
                      ));

                      ?>

              </div>
          
        </div>
      
    </nav><!--.NAVEGACION-->

    <div class="container">
    <div class="row">
    <div class="col-md-6">
    <div class="titulo">
          <?php $descripcion = get_bloginfo('description', 'display'); ?>
          <h1 class="site-tittle"><span><?php echo $descripcion; ?></span></h1>

      </div>
    </div>
      
    </div>
      
    </div>
  
</header>
