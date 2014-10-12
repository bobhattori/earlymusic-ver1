<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>earlymusic database</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" rel="stylesheet">

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> RSS Feed" href="<?php echo get_bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Comments RSS Feed" href="<?php echo get_bloginfo('comments_rss2_url') ?>"  />

  <link rel="pingback" href="<?php echo get_bloginfo('pingback_url'); ?>" />

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr.js"></script> 

  <?php wp_head() ?>
</head>
<body>
<section class="pane">
	<header>
		<hgroup>
			<?php if(is_home()): ?>
				<h1 class="logo"><?php echo get_bloginfo('name'); ?></h1>
			<?php else: ?>
				<div class="logo"><a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name') ?></a></div>
			<?php endif; ?>
				<h2><?php echo get_bloginfo('description'); ?></h2>
		</hgroup>
	</header>
	<hr class="devider">
	<section class="container">
		<section class="content<?php if(is_home()): ?> home_content<?php endif; ?>">