<?php get_header(); ?>
			<?php the_post(); ?>
			<?php $jacket = get_field('jacket'); ?>
			<section class="post">
				<header class="post_head">
					<hgroup>
						<figure><img src="<?php echo $jacket ?>" alt="<?php the_title(); ?>"></figure>
						<h1><?php the_title(); ?></h1>
					</hgroup>
				</header>
				<article class="textbody">
					<?php the_content(); ?>
				</article>
				<section class="descendant">
				</section>
			</section>
<?php get_footer(); ?>