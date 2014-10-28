<?php get_header(); ?>
			<?php
				$loop = new WP_Query(array(
					"post_type" => "cds",
					'posts_per_page' 	=> -1,
					"orderby" => "title",
					"order" => "ASC"
					));
				if($loop->have_posts()):
			?>
			<section class="mod cdlist row">
					
					<?php
						while($loop->have_posts()): $loop->the_post();
						$img = get_field('jacket');
						$note = get_field('note');
						$player = get_field('player');
					?>

					<section class="cd_item large-4 columns end">
						<a href="<?php the_permalink(); ?>">
							<figure><img src="<?php echo $img ?>" alt="<?php the_title(); ?>"></figure>
							<h4><?php if(mb_strlen($post->post_title)>25) { $title= mb_substr($post->post_title,0,25) ; echo $title. ･･･ ; } else {echo $post->post_title;}?></h4>
							<p class="player"><?php echo $player ?></p>
							<?php if($note): ?><p class="note"><?php echo $note ?></p><?php endif; ?>
						</a>
					</section>

					<?php endwhile; ?>

			</section>
			<?php else: ?>
			<section class="nopost">
				<p>まだ投稿はありません。</p>
			</section>
			<?php endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>