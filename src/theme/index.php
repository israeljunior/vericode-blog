<?php get_header(); ?>

<!-- <div class="bg-primary py-xl">
	<div class="container mx-auto lg:px-lg">
		<h1 class="text-secondary lowercase text-4xl font-light">Blog</h1>
		<h2 class="text-silver font-light text-5xl lg:w-1/2">os últimos artigos do Blog da Vericode.</h2>
	</div>
</div> -->

<div class="container">
	<div class="postlist grid lg:grid-cols-2 gap-10">
		<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post();
					get_template_part('content', get_post_format());
			endwhile;
			else :
				get_template_part('content', 'none');
			endif;
		?>
	</div>
	<?php echo paginate_links(); ?>
</div>
<?php get_footer(); ?>
