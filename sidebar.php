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
			if($posts):
				$post_count = 1;
				echo "<ul>" . "\n";
				foreach($posts as $post):
					setup_postdata($post);
		?>
		<?php
			if($post_count % 100 == 1 && $post_count != 1){
				echo "</ul>" . "\n" . "<ul>" . "\n";
			} ?>
		<li><a href="<?php the_permalink(); ?>"><?php if(mb_strlen($post->post_title)>20) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ; } else {echo $post->post_title;}?></a></li>
		<?php $post_count++; ?>
		<?php endforeach;
			echo "</ul>" . "\n";
		?>
		<?php endif; ?>
	</nav>
</aside>

<?php if (have_posts()) : ?>
<?php $post_count = 1; // カウンターの初期化
echo '<div class="group">' . "\n"; // まず最初の囲みを出力
?>
<?php while (have_posts()) : the_post(); ?>
<?php if ( $post_count % 4 == 1 && $post_count != 1 ) { echo '</div>' . "\n" . '<div class="group">' . "\n"; } // ４で割った余りが１で、なおかつカウンターが１（最初）でなければ閉じdivと囲みの開始タグを出力
?>
  <div class="post">
    <?php the_content();?>
  </div>
<?php $post_count++; // カウンターを１増やす ?>
<?php endwhile; ?>
<?php echo '</div>' . "\n"; // 最後にdivを閉じる ?>
<?php else : ?>
<?php endif; ?>