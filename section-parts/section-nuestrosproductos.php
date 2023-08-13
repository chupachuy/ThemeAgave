<section id="nuestrosproductos" class="section-about section-padding onepage-section">
	<div class="container">
		<div class="section-title-area">
			<h2 class="section-title">Productos Especiales</h2>
			<div class="section-desc">
				<p>Conoce nuestra gama de productos de <strong>1 y 5 litros</strong>, así como sus mejores combinaciones y aplicaciones de nuestros paquetes especiales.</p>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<?php
			$args = array( 'post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => 'home', 'orderby' => 'rand' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); global $product;
			?>
			<div class="products-home col-md-3">
				<h4 class="service-title"><?php the_title(); ?></h4>
				<img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" alt="">
				<div class="see-more text-center">
					<a href="<?php the_permalink(); ?>" class="btn btn-theme-primary">Ver producto</a>
				</div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>

</section>