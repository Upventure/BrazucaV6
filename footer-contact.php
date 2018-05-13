<?php
/**
 * Created by PhpStorm.
 * User: rensb
 * Date: 15/04/2018
 * Time: 17:05
 */

function get_businesshours($establishment_street) {

    global $wpdb;
    $result = $wpdb->get_results( $wpdb->prepare("SELECT * FROM businesshours WHERE street = \"{$establishment_street}\";", array()) )[0];

    echo "
            <div class=\"business-hours\" style=\"display: flex;\">
                <ul style=\"min-width: 20px;\">
                    <li style=\"width: fit-content;\">ma:</li>
                    <li style=\"width: fit-content;\">di:</li>
                    <li style=\"width: fit-content;\">wo:</li>
                    <li style=\"width: fit-content;\">do:</li>
                    <li style=\"width: fit-content;\">vr:</li>
                    <li style=\"width: fit-content;\">za:</li>
                    <li style=\"width: fit-content;\">zo:</li>
                </ul>
                <ul style=\"min-width: 80px; border: none;\">
                    <li>".$result->monday."</li>
                    <li>".$result->tuesday."</li>
                    <li>".$result->wednessday."</li>
                    <li>".$result->thursday."</li>
                    <li>".$result->friday."</li>
                    <li>".$result->saturday."</li>
                    <li>".$result->sunday."</li>
                </ul>
            </div>
    ";
}
get_template_part("maps");
function get_footer_contact($establishment_street, $extra_css_class='') {

	if      ($establishment_street == "Ds. Jan Scharpstraat") $form = do_shortcode('[contact-form-7 id="68" title="markthal"]');
	else if ($establishment_street == "Ferdinand Bolstraat")  $form = do_shortcode( '[contact-form-7 id="65" title="ferdinand-bolstraat"]');
	else if ($establishment_street == "Rijnstraat")           $form = do_shortcode( '[contact-form-7 id="67" title="rijnstraat"]');
	else $form = do_shortcode( '[contact-form-7 id="65" title="ferdinand-bolstraat"]');

    echo "
        <div class=\"footer\" style='padding: 0; margin: 0;'>
            <div class=\"coffee-background ".$extra_css_class."\" style='padding: 40px 0; margin: 40px 0;'>
                <div class=\"contact footer-content\">
                    <div class=\"contact-data\">
                        <div class=\"establishment-details\">
                            ";
                            get_establishment($establishment_street);
                            get_businesshours($establishment_street);
                            echo "
                        </div>
                        <div class=\"contact-form\">
                            "; echo $form; echo "
                        </div>
                    </div>
                    <div class=\"maps\">
                        <div class=\"map\">
                            "; get_map($establishment_street); echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
}