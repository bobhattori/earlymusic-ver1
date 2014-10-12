<?php get_header(); ?>
			<?php the_post(); ?>
			<?php
				$jacket = get_field('jacket');
				$player = get_field('player');
				$year = get_field('release');
				$label = get_field('record_label');
				$have = get_field('who_has');
				$of_link = get_field('official');
			?>
			<section class="post">
				<header class="post_head">
					<hgroup>
						<h1><?php the_title(); ?></h1>
						<h2><?php echo $player ?></h2>
					</hgroup>
				</header>
				<div class="cd_info">
					<figure><img src="<?php echo $jacket ?>" alt="<?php the_title(); ?>"></figure>
					<?php if($year or $label or $have or $of_link): ?>
					<ul class="meta">
						<li class="release"><?php echo $year ?></li>
						<li class="record_label"><?php echo $label ?></li>
						<li class="who_has"><?php echo $have ?></li>
						<li class="official_link"><a href="<?php echo $of_link ?>" target="_blank"><?php echo $of_link ?></a></li>
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
							<?php if(get_sub_field('link')): ?>
							<a href="<?php the_sub_field('link'); ?>">
								<?php the_sub_field('song_title'); ?>
							</a>
							<?php else: ?>
							<?php the_sub_field('song_title'); ?>
							<?php endif; ?>
							<?php if(get_sub_field('music_number')): ?>（<?php the_sub_field('music_number'); ?>）<?php endif; ?>
						</li>
					<?php endwhile; ?>
					</ol>
				</section>
				<?php endif; ?>

				<?php if(get_field('songs')): ?>
				<section class="descendant">
					<ul>
					<?php while(the_repeater_field('songs')): ?>
						<li><span class="track_num"><?php the_sub_field('track_num'); ?>.</span>
							<?php while(the_repeater_field('track_title')): ?>
								<?php if(get_sub_field('songLink')): ?>
								<a href="<?php the_sub_field('songLink'); ?>">
									<?php the_sub_field('songTitle'); ?>
								</a>
								<?php else: ?>
								<?php the_sub_field('songTitle'); ?>
								<?php endif; ?>
							<?php endwhile; ?>
						</li>
					<?php endwhile; ?>
					</ol>
				</section>
				<?php endif; ?>
			</section>
<?php get_footer(); ?>