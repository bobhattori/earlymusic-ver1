<aside class="sidebar">
	<nav class="mod article_list">
		<ul>
			<?php
				$posts = get_posts("post_type=songtitle&numberposts=100");
				foreach($posts as $post):
			?>
			<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</nav>
	<nav class="mod article_list">
		<ul>
			<?php
				$posts = get_posts("post_type=songtitle&numberposts=100&offset=100");
				foreach($posts as $post):
			?>
			<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</nav>
	<nav class="mod article_list">
		<ul>
			<?php
				$posts = get_posts("post_type=songtitle&numberposts=100&offset=200");
				foreach($posts as $post):
			?>
			<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</nav>
	<nav class="mod article_list">
		<ul>
			<?php
				$posts = get_posts("post_type=songtitle&numberposts=100&offset=300");
				foreach($posts as $post):
			?>
			<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</nav>
</aside>