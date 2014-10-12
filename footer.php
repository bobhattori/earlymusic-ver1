		</section>
		<?php if(!is_home()){ ?>
		<?php get_template_part('sidebar'); ?>
		<?php } ?>
	</section>
	<hr class="devider">
	<footer>
		<address>&copy; <?php the_time('Y'); ?> <?php echo get_bloginfo('name'); ?></address>
	</footer>
</section>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/foundation/foundation.topbar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/foundation/foundation.reveal.js"></script>
<script>
$(document).foundation();
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.tablesorter.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
</body>
</html>
<?php wp_footer() ?>