<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="author" content="Vericode" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link
		rel="preconnect"
		href="https://fonts.gstatic.com"
		crossOrigin="true"
	/>
	<link
		rel="preload"
		as="style"
		href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
	/>
	<link
		rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
		media="print"
		onLoad="this.media='all'"
	/>
	<noscript>
		<link
			rel="stylesheet"
			href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
		/>
	</noscript>
	<script async="" src="/browser-sync/browser-sync-client.js"></script>
	</script>

	<?php
		global $wp;
		$seo_url = home_url( add_query_arg( array(), $wp->request ) );
		$seo_title = get_the_title(' — ',true,'right').' Blog Vericode';
		$seo_description = get_bloginfo('description');
		$seo_image = get_template_directory_uri().'/img/featured.png';

		if ( is_single() ) {
			$seo_title = get_the_title('', true); 
			$seo_description = get_the_excerpt();
			$seo_image = get_the_post_thumbnail_url(get_the_ID());
		}
	?>

	<!-- Primary Meta Tags -->
	<meta name="title" content="<?php echo $seo_title; ?>">
	<meta name="description" content="<?php echo $seo_description; ?>">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $seo_url; ?>">
	<meta property="og:title" content="<?php echo $seo_title; ?>">
	<meta property="og:description" content="<?php echo $seo_description; ?>">
	<meta property="og:image" content="<?php echo $seo_image; ?>">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo $seo_url; ?>">
	<meta property="twitter:title" content="<?php echo $seo_title; ?>">
	<meta property="twitter:description" content="<?php echo $seo_description; ?>">
	<meta property="twitter:image" content="<?php echo $seo_image; ?>">
</head>

<body <?php body_class(); ?>>
<header class="bg-primary fixed top-0 left-0 z-50 w-full transition-colors duration-300 shadow">
	<div class="container flex items-center justify-between h-16">
		<div class="flex items-center">
			<a href="//vericode.com.br"><img width="110" src="<?php echo get_template_directory_uri(); ?>/img/vericode-logo-inverted.svg" alt="Vericode Logo"></a>
			<a href="<?php echo home_url(); ?>" class="text-secondary text-2xl mt-1 ml-1 hover:underline">blog</a>
		</div>

		<nav class="hidden md:block text-white font-bold text-sm space-x-md">
			<a href="<?php echo home_url(); ?>">Blog Home</a>
			<?php
			$categories =  get_categories();
			foreach  ($categories as $category) {
			  echo '<a href="'.get_category_link( $category->term_id ).'">'. $category->cat_name .'</a>';
			}
			?>
		</nav>
	</div>
</header>
<main class="pt-xl">
