<!DOCTYPE html>
<html>
<?php wp_head(); ?>
  <head>
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
    
<div class="container">
      <div class="row">
        <div class="col-md-12 header">
          <h1 class="site-title"><a href="/"><?php bloginfo('name'); ?></a></h1>
          <h4 class="site-description"><?php bloginfo('description'); ?></h4>
          <?php
              
                         $menu_1_args = array(
                              'theme_location'  => 'secondary_navigation',
                              'menu'            => 'secondary_navigation',
                              'container'       => 'div',
                              'container_class' => 'menu-wrapper secondary-navigation',
                              'container_id'    => '',
                              'menu_class'      => 'nav nav-pills pull-right',
                              'menu_id'         => '',
                              'echo'            => true,
                              'fallback_cb'     => 'wp_page_menu',
                              'before'          => '',
                              'after'           => '',
                              'link_before'     => '',
                              'link_after'      => '',
                              'items_wrap'      => '<ul id="%1$s" class="%2$s" style="list-style-type: none;">%3$s</ul>',
                              'depth'           => 0,
                              'walker'          => new wp_bootstrap_navwalker()
                         );
                        
                         wp_nav_menu( $menu_1_args );
              
          ?>
          
          <?php
              
                         $menu_1_args = array(
                              'theme_location'  => 'Primary Navigation',
                              'menu'            => 'Primary Navigation',
                              'container'       => 'div',
                              'container_class' => 'menu-wrapper main-menu',
                              'container_id'    => '',
                              'menu_class'      => 'nav nav-tabs',
                              'menu_id'         => '',
                              'echo'            => true,
                              'fallback_cb'     => 'wp_page_menu',
                              'before'          => '',
                              'after'           => '',
                              'link_before'     => '',
                              'link_after'      => '',
                              'items_wrap'      => '<ul id="%1$s" class="%2$s" style="list-style-type: none;">%3$s</ul>',
                              'depth'           => 0,
                              'walker'          => new wp_bootstrap_navwalker()
                         );
                        
                         wp_nav_menu( $menu_1_args );
              
               ?>
        
        </div>
      </div>
    </div>