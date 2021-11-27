<?php

/* Template Name: Officers Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
	<div class="container">

		

	</div>
</main>

<?php
	endwhile;
endif;

get_footer();
?>
