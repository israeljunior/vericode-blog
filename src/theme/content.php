<div class="shadow rounded overflow-hidden item transition-shadow hover:shadow-lg <?php if (has_post_thumbnail()) { ?>has-thumbnail <?php } ?>" data-aos="fade-up">
	<figure class="post-thumbnail mb-xs overflow-hidden">
		<a class="ratio-16-by-9" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
	</figure>

	<div class="inner-content p-sm">
		<div class="flex space-x-xs uppercase text-xs leading-normal text-gray-500">
			<?php
			$categories = get_the_category();
			$separator = ', ';
			$output = '';
			if ($categories) : ?>
				<div class="tags">
					<?php foreach ($categories as $category) {
						$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
					}
						echo trim($output, $separator);
					?>
				</div>
			<?php endif; ?>
			<span class="mx-sm">•</span>
			<span><?php echo the_date(); ?></span>
		</div>

		<h2 class="post-title text-xl font-bold my-xs text-primary">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>

		<?php if ($post->post_excerpt) : ?>
			<p class="text-sm text-gray-500 leading-normal">
				<?php echo get_the_excerpt(); ?>
			</p>
		<?php endif; ?>
	</div>
</div>
