<?php
   $query = new WP_query( 'pagename=como-lanzamiento-tenemos-un-mes-de-envios-gratis');

   if( $query->have_posts()){ while ( $query->have_posts()){
    	$query->the_post(); ?>
	<section id="nuestrosproductos" class="section-about section-padding onepage-section">
		<div class="container">
			<div class="section-title-area">
				<h2 class="section-title"><?php the_title(); ?></h2>
				<div class="section-desc text-center text-blue">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" alt="Agave Solutions oferta de lanzamiento">
				</div>
			</div>
		</div>

	</section>

<?php } 
	} wp_reset_postdata();
?>