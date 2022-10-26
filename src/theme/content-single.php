<div class="container">
	<article class="article">
		<div class="text-center lg:w-3/4 mx-auto">
			<h1 class="text-4xl font-bold text-primary">
				<?php the_title(); ?>
			</h1>
			<p class="text-lg mt-md"><?php echo get_the_excerpt(); ?></p>

			<div class="flex my-md items-center justify-center text-gray-500 text-sm uppercase">
				<?php
					$categories = get_the_category();
					$separator = ', ';
					$output = '';
					if ($categories) : ?>
						<div class="tags">
							<?php foreach ($categories as $category) {
								$output .= '<a class="hover:underline" href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
							}
								echo trim($output, $separator);
							?>
						</div><?php
					endif;
				?>
				<span class="mx-sm">•</span>
				<span>October 6, 2022</span>
			</div>
		</div>

		<div class="mb-lg ratio-16-by-9 image image--tint">
			<?php the_post_thumbnail(); ?>
		</div>

		<div class="max-w-2xl mx-auto">
			<?php the_content(); ?>
		</div>
	</article>

	<div class="max-w-2xl mx-auto border-t-2 border-gray-200 mt-lg pt-lg">
		<?php
			global $wp;
			$seo_url = home_url( add_query_arg( array(), $wp->request ) );
		?>
		<h2 class="text-2xl text-center mb-md font-bold text-primary">Compartilhe este artigo</h2>
		<div class="flex justify-center space-x-xs">
			<a class="transition-transform hover:scale-110" target="_blank" href="https://www.facebook.com/sharer.php?s=100&p[url]=<?php echo $seo_url; ?>">
				<span>
					<svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M28.347,5.157c-13.6,0-24.625,11.027-24.625,24.625c0,13.6,11.025,24.623,24.625,24.623c13.6,0,24.625-11.023,24.625-24.623  C52.972,16.184,41.946,5.157,28.347,5.157z M34.864,29.679h-4.264c0,6.814,0,15.207,0,15.207h-6.32c0,0,0-8.307,0-15.207h-3.006  V24.31h3.006v-3.479c0-2.49,1.182-6.377,6.379-6.377l4.68,0.018v5.215c0,0-2.846,0-3.398,0c-0.555,0-1.34,0.277-1.34,1.461v3.163  h4.818L34.864,29.679z"/></svg>
				</span>
			</a>
			<a class="transition-transform hover:scale-110" target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $seo_url; ?>">
				<span>
					<svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M28.348,5.157c-13.6,0-24.625,11.027-24.625,24.625c0,13.6,11.025,24.623,24.625,24.623c13.6,0,24.623-11.023,24.623-24.623  C52.971,16.184,41.947,5.157,28.348,5.157z M40.752,24.817c0.013,0.266,0.018,0.533,0.018,0.803c0,8.201-6.242,17.656-17.656,17.656  c-3.504,0-6.767-1.027-9.513-2.787c0.486,0.057,0.979,0.086,1.48,0.086c2.908,0,5.584-0.992,7.707-2.656  c-2.715-0.051-5.006-1.846-5.796-4.311c0.378,0.074,0.767,0.111,1.167,0.111c0.566,0,1.114-0.074,1.635-0.217  c-2.84-0.57-4.979-3.08-4.979-6.084c0-0.027,0-0.053,0.001-0.08c0.836,0.465,1.793,0.744,2.811,0.777  c-1.666-1.115-2.761-3.012-2.761-5.166c0-1.137,0.306-2.204,0.84-3.12c3.061,3.754,7.634,6.225,12.792,6.483  c-0.106-0.453-0.161-0.928-0.161-1.414c0-3.426,2.778-6.205,6.206-6.205c1.785,0,3.397,0.754,4.529,1.959  c1.414-0.277,2.742-0.795,3.941-1.506c-0.465,1.45-1.448,2.666-2.73,3.433c1.257-0.15,2.453-0.484,3.565-0.977  C43.018,22.849,41.965,23.942,40.752,24.817z"/></svg>
				</span>
			</a>
			<a class="transition-transform hover:scale-110" target="_blank" href="https://www.linkedin.com/cws/share?url=<?php echo $seo_url; ?>">
				<span>
					<svg enable-background="new 0 0 56.693 56.693" height="56.693px" id="Layer_1" version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M28.347,5.155c-13.6,0-24.625,11.025-24.625,24.625c0,13.602,11.025,24.625,24.625,24.625   c13.598,0,24.623-11.023,24.623-24.625C52.97,16.181,41.944,5.155,28.347,5.155z M42.062,41.741c0,1.096-0.91,1.982-2.031,1.982   H16.613c-1.123,0-2.031-0.887-2.031-1.982V18.052c0-1.094,0.908-1.982,2.031-1.982H40.03c1.121,0,2.031,0.889,2.031,1.982V41.741z"/><path d="M33.099,26.441c-2.201,0-3.188,1.209-3.74,2.061v0.041h-0.027c0.01-0.012,0.02-0.027,0.027-0.041v-1.768h-4.15   c0.055,1.17,0,12.484,0,12.484h4.15v-6.973c0-0.375,0.027-0.744,0.137-1.012c0.301-0.744,0.984-1.52,2.129-1.52   c1.504,0,2.104,1.146,2.104,2.824v6.68h4.15V32.06C37.878,28.224,35.829,26.441,33.099,26.441z"/><path d="M20.864,20.712c-1.419,0-2.349,0.934-2.349,2.159c0,1.197,0.9,2.158,2.294,2.158h0.027c1.447,0,2.348-0.961,2.348-2.158   C23.157,21.646,22.284,20.712,20.864,20.712z"/><rect height="12.484" width="4.151" x="18.762" y="26.734"/></g></svg>
				</span>
			</a>
		</div>
	</div>
</div>