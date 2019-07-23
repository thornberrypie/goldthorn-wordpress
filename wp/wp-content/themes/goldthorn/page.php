<?php
get_header();
?>

<main class="gt-main">
	<div class="gt-container">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part('views/content');
				}
			} else {
				get_template_part('views/content', 'none' );
			} ?>
	</div>
</main>

<?php
get_footer();