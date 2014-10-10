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
			</section>
<?php get_footer(); ?>