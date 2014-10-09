<?php get_header(); ?>
			<?php the_post(); ?>
			<?php $mn = get_field('music_number'); ?>
			<section class="post">
				<header class="post_head">
					<hgroup>
						<?php if($mn): ?><p><small><?php echo $mn ?></small></p><?php endif; ?>
						<h1><?php the_title(); ?></h1>						
					</hgroup>
				</header>
				<article class="textbody">
					<?php the_content(); ?>
				</article>
				<section class="parent">
		      <?php // album
		        $args = array(
		          'connected_type' => 'cds_to_songtitle',
		          'connected_items' => get_queried_object(),
		          'nopaging' => true,
		          'connected_meta' => 'songNum'
		        );
		        $connected = new WP_Query($args);
		        while($connected->have_posts()):
		        	$connected->the_post();
		          setup_postdata($post);
		          $jacket = get_field('jacket');
		          $player = get_field('player');
		          $year = get_field('release');
		          $sn = p2p_get_meta( get_post()->p2p_id, 'songNum', true );
		          $sn = (int)$sn;
		      ?>
		      <section class="recorded">
		      	<a href="<?php the_permalink(); ?>">
				      <figure>
				      	<img src="<?php echo $jacket ?>" alt="<?php the_title(); ?>">
				      </figure>
				      <h4 class="cdttl"><?php the_title(); ?></h4>
				      <div class="meta">
				      	<p class="player"><?php echo $player ?></p>
				      	<p class="year"><?php echo $year ?></p>
				      	<p class="songNum"><?php echo $sn ?>曲目</p>
				      </div>
						</a>
		      </section>
			    <?php endwhile; wp_reset_postdata(); ?>
			      	
				</section>
			</section>
<?php get_footer(); ?>