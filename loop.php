<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php if ( has_post_thumbnail()) :?>
	<div class="ibox" style="background-image:url(<?php the_post_thumbnail(array(1024,768));?>)">
	<?php else: ?>
	<div class="ibox" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/bkg.jpg)">
	<?php endif; ?>
			<a href="<?php the_permalink();?>" class="ibox-link"><div class="iibox">
					<h1><?php the_title(); ?></h1>
					<div class="iibox-sep"></div>
					<p><?php html5wp_excerpt('html5wp_index')?></p>
					</div>
					</a>
	</div>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
