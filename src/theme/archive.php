<?php get_header();
	$className = '';
	if (!is_search_has_results()) {
		$className = 'no-result';
	}
?>


<div class="container">
	<?php if (have_posts()) : ?>
	<h1 class="page-title">
	<?php
		if (is_category()) {
	?>
	<section class="py-md mb-lg">
		<h6 class="text-secondary uppercase text-xs leading-normal">CATEGORIA</h6>
		<h1 class="text-3xl font-bold leading-normal mb-sm"><?php single_cat_title() ?></h1>
		<p class="text-lg lg:w-2/3"><?php echo strip_tags(category_description()) ?></p>
	</section>
	<?php
		} elseif (is_tag()) {
			single_tag_title();
		} elseif (is_author()) {
			the_post();
			echo 'Author Archives: ' . get_the_author();
			rewind_posts();
		} elseif (is_day()) {
			echo 'Daily Archives: ' . get_the_date();
		} elseif (is_month()) {
			echo 'Monthly Archives: ' . get_the_date('F Y');
		} elseif (is_year()) {
			echo 'Yearly Archives: ' . get_the_date('Y');
		} else {
			echo 'Archives:';
		}
	?>
	</h1>
	<div class="grid lg:grid-cols-2 gap-10">
		<?php
		while (have_posts()) :
			the_post();
			get_template_part('content', get_post_format());
			endwhile;
		else : get_template_part('content', 'none'); endif;
		?>
	</div>
	<?php echo paginate_links(); ?>
</div>
<?php get_footer(); ?>
