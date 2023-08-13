<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

$hide_footer = false;
$page_id     = get_the_ID();

if ( is_page() ) {
	$hide_footer = get_post_meta( $page_id, '_hide_footer', true );
}

if ( onepress_is_wc_active() ) {
	if ( is_shop() ) {
		$page_id     = wc_get_page_id( 'shop' );
		$hide_footer = get_post_meta( $page_id, '_hide_footer', true );
	}
}

if ( ! $hide_footer ) {
	?>
	<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-connect">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-2 col-sm-6 offset-md-0 image-footer">
                    <div class="footer-subscribe footer-social-icons">
                        <img width="200" src="https://agavesolutions.mx/wp-content/uploads/2023/02/Agave-Solutions-Logo.png" alt="logo agave solutions">
                        <!--<h5 class="follow-heading">Agave Solutions</h5>-->
                        <div class="info-footer">
                            <p><img src="https://agavesolutions.mx/wp-content/uploads/2023/02/correo.png" width="25" alt="correo Agave Solutions"> contacto@agavesolutions.mx </p>
                            <p><img src="https://agavesolutions.mx/wp-content/uploads/2023/02/phone.png" width="25" alt="Teléfono Agave Solutions"> 378 218 0244 </p>
                            <!--<p><i class="fa fa-whatsapp fa-2x"></i> 378 107 0928 </p>-->
                            <p><img src="https://agavesolutions.mx/wp-content/uploads/2023/02/hubicacion.png" width="25" alt="Lugar Agave Solutions"> Tepatitlán, Jal. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="separar"></div>
                    <div class="footer-social text-left">
                        <h5 class="follow-heading">NEWSLETTER</h5>
                        <?php echo apply_shortcodes( '[contact-form-7 id="1619" title="Newsletter"]' ); ?>
                        <!--<input type="email" name="email"><input type="submit" value="Suscribete">-->
                        <div class="separar"></div>
                        <h5 class="follow-heading">#HAGAMOSHISTORIACONAGAVE</h5>
                        <div class="footer-social-icons">
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=100076212139804" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="https://instagram.com/agave_solutions?igshid=YmMyMTA2M2Y=" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UC-Kyp7L7LkiKS25JMHuJdBw" title="youtube"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="legales text-left">
                        <p><a href="<?php bloginfo('url'); ?>/terminos-y-condiciones">Terminos y condiciones</a><br />
                        <a href="<?php bloginfo('url'); ?>/politica-privacidad/">Políticas de privacidad</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-info">
        <div class="container">
            <div class="btt">
                <a class="back-to-top" href="#page" title="Volver arriba"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: flash;"></i></a>
            </div>
            <p>Copyright © 2023 Agave Solutions – Mauricio Labastida </p>
        </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=5213781070928&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Agave Solutions%202." class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
</footer>
	<?php
}
/**
 * Hooked: onepress_site_footer
 *
 * @see onepress_site_footer
 */
do_action( 'onepress_site_end' );
?>
</div>

<?php do_action( 'onepress_after_site_end' ); ?>

<?php wp_footer(); ?>

</body>
</html>
