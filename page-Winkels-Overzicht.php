<?php
/* Template Name: Winkels overzichtspagina */
?>
<?php get_header(); ?>

<!-- <div class="background-image2 back-home">
    <div class="mask-layer">
        <div class="content-hoofd-foto">


            <h1>Vestigingen</h1>
            <div class="line-white"></div>
            <p>"De Brazuca vestigingen door heel nederland"</p>
            <p class="ondertitel">Amsterdam | Rotterdam</p>
        </div>
    </div>
</div> -->


<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="franchise-content">
        <p>  <?php the_content();?>  </p>
    </div>

<?php endwhile; else : ?>
    <p> no content found</p>
<?php endif; ?>

<div class="section-1 image-winkels-1" style="">
    <div class="mask-layer mask-layer-home mask-layer-2">
        <div class="content-hoofd-foto">
            <h1 style="font-size:40px;">Brazuca winkels</h1>
            <!-- <div class="line-white"></div>
            <p style="font-size:30px;">" Tangerina Sap"</p> -->
            <p style="font-size:25px; margin-top: 5px;" class="ondertitel">Bezoek de brazuca winkel bij u in de buurt</p>
        </div>
    </div>
</div>

<div class="wrapper-top-section" style="border-top: 6px solid rgb(232, 237, 230);">
    <div class="advertisements-winkels">
        <div class="section-winkel-page light winkel-achtergrond" style="padding: 0">
            <div style="background: rgba(255, 255, 255, 0.90); padding-top: 40px; padding-bottom: 20px;">
                <div class="flex wrappper-winkel-sections">
                    <div class="wrapper-white-section-section-50-50 home-section">
                        <!-- <div class="image-white-section"></div> -->

                        <!-- MULTIPLE ITEMS TESTING -->

                        <div class="referal-advertisement-div-winkels">

                            <div class="winkels-overzicht-header">
                                <h1>De winkels van Brazuca</h1>
                                <p>Selecteer een winkel voor meer informatie</p>
                            </div>

                            <div class="multiple-items-standard">
                                <div class="item-standard-border">
                                    <a href="localhost/rijnstraat">
                                        <h2>Amsterdam Rijnstraat</h2>
                                        <div class="image-standard">
                                            <img src="<?php bloginfo('template_url')?>/Images_Brazuca/Brazuca-rotterdam-tablet.jpg">
                                        </div>
                                        <div class="content-standard" style="padding: 9px 9px;">
                                            <!-- <h4 style="text-align: center; margin-top: 5px;">Rijnstraat 22, Amsterdam</h4> -->
                                            <p>
                                              Brazuca Coffee Ferdinand Bolstraat<br>
                                             Ferdinand Bolstraat 113 H <br>
                                             1072 LE Amsterdam<br>
                                            </p>
                                        </div>
                                        <div class="flex-active">
                                            <a class="button-standard" href="localhost/rijnstraat">Naar deze vestiging</a>
                                        </div>
                                        <br>
                                    </a>
                                </div>

                                <div class="item-standard-border">
                                    <a href="localhost/rijnstraat">
                                        <h2>Amsterdam Ferdinand bolstraat</h2>
                                        <div class="image-standard">
                                            <img src="<?php bloginfo('template_url')?>/Images_Brazuca/Brazuca-rotterdam-tablet.jpg">
                                        </div>
                                        <div class="content-standard" style="padding: 9px 9px;">
                                            <!-- <h4 style="text-align: center; margin-top: 5px;">Ferdinand Bolstraat 113 H, Amsterdam</h4> -->
                                            <p>
                                                Brazuca Coffee Ferdinand Bolstraat<br>
                                                Ferdinand Bolstraat 113 H <br>
                                                1072 LE Amsterdam<br>
                                            </p>
                                        </div>
                                        <div class="flex-active">
                                            <a class="button-standard" href="localhost/ferdinand-bolstraat">Naar deze vestiging</a>
                                        </div>
                                        <br>
                                    </a>
                                </div>

                                <div class="item-standard-border">
                                    <a href="localhost/rijnstraat">
                                        <h2>Rotterdam Markthal</h2>
                                        <div class="image-standard">
                                            <!-- <img src="../wp-content/themes/Brazuca/Images_Brazuca/879-2.JPG"> -->
                                            <img src="<?php bloginfo('template_url')?>/Images_Brazuca/Brazuca-rotterdam-tablet.jpg">
                                        </div>
                                        <div class="content-standard" style="padding: 9px 9px;">
                                            <!-- <h4 style="text-align: center; margin-top: 5px;">Markthal, Rotterdam</h4> -->
                                            <p>
                                                Brazuca Coffee Ferdinand Bolstraat<br>
                                                Ferdinand Bolstraat 113 H <br>
                                                1072 LE Amsterdam<br>
                                            </p>
                                        </div>
                                        <div class="flex-active">
                                            <a class="button-standard" href="localhost/markthal">Naar deze vestiging</a>
                                        </div>
                                        <br>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="advertisements-winkels">
        <div class="section-winkel-page light winkel-achtergrond" style="padding: 0;">
            <div style="background: rgba(255, 255, 255, 0.90); padding-top: 40px; padding-bottom: 20px;">
                <div class="flex wrappper-winkel-sections">
                    <div class="map-container">
                        <h2 style="padding: 20px 0; margin: 0;">Bekijk alle Brazuca locaties op de kaart</h2>
                        <div style="height: 500px;">
                            <?php get_template_part("maps"); get_map_all(); ?>
                        </div>
                        <h2 style="padding: 20px 0; margin: 0;"><br></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php get_template_part("footer", "main"); get_footer_main(); ?>
