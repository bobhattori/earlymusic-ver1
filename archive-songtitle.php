<?php get_header(); ?>
			<?php
				$loop = new WP_Query(array(
					"post_type" => "songtitle",
					'posts_per_page' 	=> -1,
					"orderby" => "title",
					"order" => "ASC"
					));
				if($loop->have_posts()):
			?>
			<div class="mod songlist">
				<table>
					<caption>songtitle</caption>
					<thead>
						<tr>
							<th>song title</th>
							<th>album</th>
						</tr>
					</thead>
					<tbody>
					<?php
						while($loop->have_posts()): $loop->the_post();
					?>
						<tr>
							<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
							<td>
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
			          <div class="album"><a href="<?php the_permalink(); ?>"><img src="<?php echo $jacket ?>" alt="<?php the_title(); ?>">&nbsp;&nbsp;<?php if(mb_strlen($post->post_title)>33) { $title= mb_substr($post->post_title,0,33) ; echo $title. ･･･ ; } else {echo $post->post_title;}?></a></div>
			        	<?php endforeach; wp_reset_postdata(); ?>
		        	</td>
						</tr>
					<?php endwhile; ?>
					</tbody>
				</table>
			</div>
			<?php endif; ?>
<?php get_footer(); ?>