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
					<?php
						$args = array(
			          'connected_type' => 'cds_to_songtitle',
			          'connected_items' => get_queried_object(),
			          'nopaging' => true,
			          'connected_meta' => 'songNum',
			          'connected_orderby' => 'songNum'
							);
						$connected = new WP_Query($args);
						if($connected->have_posts()):
					?>
					<ol>
						<?php while($connected->have_posts()): $connected->the_post(); ?>
							<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
						<?php endwhile; ?>
					</ol>
					<?php endif; wp_reset_postdata(); ?>
				</section>
			</section>
<?php get_footer(); ?>