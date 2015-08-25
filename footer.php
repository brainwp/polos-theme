<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<footer id="footer-creditos" class="col-md-12">
	<div class="container">
		<div class="row">
			<div class="col-md-4 pull-left">
				<div class="col-md-12">
					<?php _e('Alguns direitos reservados','odin');?>
					<img src="<?php bloginfo('template_url');?>/assets/images/cc-icon.png">
				</div><!-- .col-md-12 -->
				<div class="col-md-12">
					<?php _e('Desenvolvido com','odin');?>
					<img src="<?php bloginfo('template_url');?>/assets/images/wp-icon.png">
				</div><!-- .col-md-12 -->
			</div><!-- .col-md-4 -->
			<div class="col-md-8 pull-right logos">

				<div class="col-sm-12 pull-right">
				
					<a target="_blank" href="http://brasa.art.br">
						<img alt="Brasa" src="<?php bloginfo('template_url');?>/assets/images/brasa.png">
					</a>
					<?php if( $logo_footer = kirki_get_option( 'logos_footer' ) ) : ?>

						<a target="_blank" href="<?php echo kirki_get_option( 'link_logos_footer' ); ?>">
							<img src="<?php echo $logo_footer; ?>">
						</a>

					<?php endif; ?>

				</div>

			</div><!-- .col-md-8 pull-right -->
		</div><!-- .row -->
	</div><!-- .container -->
</footer><!-- #footer -->
<?php wp_footer(); ?>
</body>
</html>
