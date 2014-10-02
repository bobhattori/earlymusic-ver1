<?php get_header(); ?>
			<?php
				$loop = new WP_Query(array(
					"post_type" => "songtitle",
					"post_per_page" => -1,
					"orderby" => "title",
					"order" => "DESC"
					));
				if($loop->have_posts()):
			?>
			<div class="mod songlist">
				<table>
					<caption>songtitle</caption>
					<thead>
						<tr>
							<th>song number</th>
							<th>song title</th>
							<th>album</th>
							<th>jacket</th>
						</tr>
					</thead>
					<tbody>
					<?php
						while($loop->have_posts()): $loop->the_post();
						$mn = get_field('music_number');
					?>
						<tr>
							<td><?php if($mn): ?><?php echo $mn ?><?php else: ?>&nbsp;<?php endif; ?></td>
							<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
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
		          <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
		        	<td><a href="<?php the_permalink(); ?>"><img src="<?php echo $jacket ?>" alt="<?php the_title(); ?>"></a></td>
		        	<?php endforeach; wp_reset_postdata(); ?>
						</tr>
					<?php endwhile; ?>
					</tbody>
				</table>
			</div>
			<?php endif; ?>
<?php get_footer(); ?>