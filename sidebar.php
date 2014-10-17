<aside class="sidebar">
	<nav class="mod article_list">
		<?php
			$args = array(
				'orderby'					=> 'title',
				'order'						=> 'ASC',
				'post_type' 			=> 'songtitle',
				'posts_per_page' 	=> -1
				);
			$posts = get_posts($args);
			//print_r($posts);
			if($posts):
				//$count = 1;
				$post_count = 1;
				echo '<div><i class="fa fa-plus"></i></div>' . "\n" . "<ul>" . "\n";
				foreach($posts as $post):
					setup_postdata($post);
		?>
		<?php
			if($post_count % 100 == 1 && $post_count != 1){
				//$count++;
				echo "</ul>" . "\n" . '<div><i class="fa fa-plus"></i></div>' . "\n" . "<ul>" . "\n";
			} ?>
			<!-- <?php echo $post_count ?> -->
		<li><a href="<?php the_permalink(); ?>"><?php if(mb_strlen($post->post_title)>20) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ; } else {echo $post->post_title;}?></a></li>
		<?php $post_count++; ?>
		<?php endforeach;
			echo "</ul>" . "\n";
		?>
		<?php endif; ?>
	</nav>
</aside>