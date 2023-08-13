
<?php
   $query = new WP_query( 'pagename=conocenos');

   if( $query->have_posts()){ while ( $query->have_posts()){
    	$query->the_post(); ?>
<section id="about" class="section-about section-padding onepage-section wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
	<div class="container">
		<div class="section-title-area">
			<h5 class="section-subtitle">Agave Solutions</h5>
			<h2 class="section-title"><?php the_title(); ?></h2>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="about-image">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="section-desc">
					<?php the_excerpt(); ?>
				</div>
			</div>
			<div class="col-md-12">
				<div class="see-more">
					<p><a href="<?php the_permalink(); ?>" class="btn btn-theme-primary">Conoce más</a></p>
				</div>
			</div>
		</div>
	</div>
	<?php if ((get_post_meta( get_the_ID(), 'video-youtube', true ) )) { ?>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'video-youtube', true); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<?php } ?>
</section>
<?php } 
	} wp_reset_postdata();
?>