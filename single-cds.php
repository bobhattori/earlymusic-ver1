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
					<ol>
		      <?php // album
		        $args = array(
		          'connected_type' => 'cds_to_songtitle',
		          'connected_items' => $post,
		          'nopaging' => true,
		          'suppress_filters' => false,
		        );
		        $connected_posts = get_posts($args);
		        foreach($connected_posts as $post):
		          setup_postdata($post);
		          $jacket = get_field('jacket');
		      ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		    	<?php endforeach; wp_reset_postdata(); ?>
		    	</ol>
				</section>
			</section>
<?php get_footer(); ?>