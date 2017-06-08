<?php get_header(); ?>

<h2 class="text-center">Ultimas entradas</h2>
<section class="container  contenido">
	<div class="row">
	<?php
	$args = array(
		'posts_per_page' => 6
		);
	$entradas = new WP_Query($args); while ($entradas->have_posts() ): $entradas->the_post();

?>

<div class="col-xs-6 col-md-4 entrada">
	<?php the_post_thumbnail('entradas', array('class' => 'img-responsive')); ?>
	
	<div class="contenido-entrad">
		<?php the_title('<h3>', '</h3>'); ?>

		<p>Escrito el: <span> <?php the_time(get_option('date_format')); ?> </span> </p>
		<p>Por: 
		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename')); ?>">
		<?php the_author(); ?>
		</a>
		</p>
		<a href="<?php the_permalink(); ?>" class="btn btn-success"> Leer màs</a>
	</div>

</div>

<?php
        endwhile; wp_reset_postdata();
		?>
	</div>
</section>
<section class="categorias-blog contaniner">

	<h2 class="text-center">por categorias</h2>

	<?php $categorias = get_categorias(); ?>

	<div class="row">

		<?php foreach ($categorias as $get_categorias); ?>

		<div class="col-xs-6 col-nd-6 col-lg-3 categoria">

		<a href="<?php echo get_category_link($categoria->cat_ID); ?>">
		</a>
		</div>
	<?php ndforeach; ?>
	</div>
</section>
<?php get_footer(); ?>  