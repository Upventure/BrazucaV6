<!DOCTYPE html>
<html lang="nl">
<head>
<!--<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />-->
<link rel="canonical" href="http://www.brazuca.nl/<?php echo basename(get_permalink()); ?>">
<!--<meta name="robots" content="noindex, nofollow">-->
<title>Brazuca <?php wp_title('');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Esenica" content="Brazuca Coffee">
<meta name="description" content="Brazuca Coffee">







<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <div class="container-doc container-fixed-padding color-blue"> -->
<div class="mask-menu">
<div class="nav-container">

<nav class="fixed">
          <div class="nav-images">
          <span>    <img class="logo" src="<?php bloginfo('template_url')?>/Images_Brazuca/Logo-Brazuca.png">  </span>






<!-- MF_LOGO_W_200px.png
mondfit_logo_wit.png -->
          <span>
             <!-- <img class="hamburger" src="<?php bloginfo('template_url')?>/Images_Brazuca/hamburger.png"> -->
                          <!-- <img class="hamburger" src="<?php bloginfo('template_url')?>/Images_Brazuca/hamburger-brasil.png">  -->
                                       <!-- <img class="hamburger" src="<?php bloginfo('template_url')?>/Images_Brazuca/hamburgerblack.png"> -->
                                            <!-- <img class="hamburger" src="<?php bloginfo('template_url')?>/Images_Brazuca/hamburger-greenblack.png">-->
                                                                      <img class="hamburger" src="<?php bloginfo('template_url')?>/Images_Brazuca/hamburger-blackgreenblack.png">

           </span>
          </div>


          <?php
          wp_nav_menu( array(

              'theme_location' => 'header-menu',
              'container' => ' ',
              'menu_class' => ''

               )
              );
              ?>

</nav>
</div>
</div>
