<!DOCTYPE html>
<html lang="nl">
<head>
<!--<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />-->
<link rel="canonical" href="http://www.brazuca.nl/<?php echo basename(get_permalink()); ?>">
<!--<meta name="robots" content="noindex, nofollow">-->
<title>Brazuca <?php wp_title('');?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Author" content="Brazuca">
<meta name="description" content="Brazuca Coffee">

<meta name="description" content="<?php if ( (is_home()) || (is_front_page()) ) {
echo ("Vers gebrande koffie koopt u bij Brazuca Coffee. Ook serveren wij Braziliaanse Aćai Bowl gerechten en kunt u bij ons verse fruitsappen kopen.");
} elseif(is_category()) {
echo category_description();
} elseif(is_tag()) {
echo '-tag archive page for this blog' . single_tag_title();
} elseif(is_month()) {
echo 'archive page for this blog' . the_time('F, Y');
} elseif(is_single()) {
echo the_excerpt();
}
elseif(is_page('Brazuca Markthal')) {
echo ("Verse koffie kopen in Rotterdam kan bij Brazuca Coffee in de Markthal
Hier koopt u onze eigen gebrande koffie gemaakt van de beste koffiebonen.");
}
elseif(is_page('Rijnstraat')) {
echo ("Verse koffie kopen Amsterdam kan bij Brazuca. Hier koopt u onze eigen gebrande koffie gemaakt van de beste koffiebonen. Koffiebonen die wij zelf selecteren");
}
elseif(is_page('Ferdinand bolstraat')) {
echo ("Verse koffie kopen in Amsterdam kan bij Brazuca Coffee.  Ook kunt u bij ons terecht voor het kopen van Braziliaanse fruitsappen of voor Aćai bowl gerechten");
}
else {
echo get_post_meta($post->ID, "Metadescription", true);  }?>">





<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPS5M74');</script>
<!-- End Google Tag Manager -->


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPS5M74"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
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
