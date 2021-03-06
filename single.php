<?php get_header(); ?>
			<?php the_post(); ?>
			<section class="post">
				<header class="post_head">
					<h1><?php the_title(); ?></h1>
				</header>
				<article class="textbody">
					<?php the_content(); ?>
				</article>
				<section class="parent">
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
		      <figure>
		      	<img src="<?php echo $jacket ?>" alt="<?php the_title(); ?>">
		      </figure>
		      <div class="cdttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		    	<?php endforeach; wp_reset_postdata(); ?>
				</section>
			</section>
<?php get_footer(); ?>