<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<?php if( has_post_thumbnail() ): ?>
	<?php the_post_thumbnail( 'large', array('class' => 'col-md-12 page-thumbnail') );?>
<?php endif;?>
<article id="page-single" <?php post_class(); ?>>
	<div class="barra-title">
		<div class="container">
			<div class="row">
				<h1><?php the_title();?></h1>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .barra-title -->
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php the_content();?>
			</div><!-- .col-md-8 -->
			<?php get_sidebar('post');?>
		</div><!-- .row -->
	</div><!-- .container -->
</article><!-- #post-## -->
