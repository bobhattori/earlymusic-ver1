<?php get_header(); ?>
			<?php the_post(); ?>
			<?php
				$jacket = get_field('jacket');
				$player = get_field('player');
				$year = get_field('release');
				$label = get_field('record_label');
				$of_link = get_field('official');
				$note = get_field('note');
			?>
			<section class="post">
				<header class="post_head">
					<hgroup>
						<h1><?php the_title(); ?></h1>
						<h2><?php echo $player ?></h2>
						<?php if($note): ?><p><?php echo $note ?></p><?php endif; ?>
					</hgroup>
				</header>
				<div class="cd_info">
					<figure><img src="<?php echo $jacket ?>" alt="<?php the_title(); ?>"></figure>
					<?php if($year or $label or $have or $of_link): ?>
					<ul class="meta">
						<li class="release"><?php echo $year ?></li>
						<li class="record_label"><?php echo $label ?></li>
						<?php if($of_link): ?><li class="official_link"><a href="<?php echo $of_link ?>" target="_blank"><?php echo $of_link ?></a></li><?php endif; ?>
					</ul>
					<?php endif; ?>
				</div>
				<article class="textbody">
					<?php the_content(); ?>
				</article>

				<?php if(get_field('songs')): ?>
				<section class="descendant">
					<ul>
					<?php while(the_repeater_field('songs')): ?>
						<li><span class="track_num"><?php the_sub_field('track_num'); ?>.</span>
							<?php
								$counter = 0;
								while(the_repeater_field('track_title')):
								$counter++
							?>
							<?php if($counter >= 2):
								$class = 'class="divider"';
							else:
								$class = '';
							endif;
							?>
								<?php if(get_sub_field('songLink')): ?>
								<a href="<?php the_sub_field('songLink'); ?>" <?php echo $class ?>>
									<?php the_sub_field('songTitle'); ?>
								</a>
								<?php else: ?>
								<span <?php echo $class ?>><?php the_sub_field('songTitle'); ?></span>
								<?php endif; ?>
							<?php endwhile; ?>
						</li>
					<?php endwhile; ?>
					</ol>
				</section>
				<?php endif; ?>
			</section>
<?php get_footer(); ?>