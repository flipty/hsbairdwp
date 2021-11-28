<?php

/* Template Name: Officers Page */

get_header();

if(have_posts()):
	while(have_posts()): the_post();
?>

<main>
	<div class="container">
		<h1><?php echo get_the_title();?></h1>

		<div class="row lead-officers">
			<?php
			if (have_rows('lead_officers')):
			while (have_rows('lead_officers')): the_row();
			$thisOfficer = get_sub_field('officer');
			$name = get_the_title($thisOfficer);
			$title = get_field('title', $thisOfficer);
			?>
			<div class="col-md-6 col-md-offset-3">
				<?php echo $title;?> - <?php echo $name;?><br>
			</div>
			<?php
			endwhile; endif;
			?>
		</div>
		<hr>
		<div class="row officers">
			<?php
			if (have_rows('other_officers')):
			while (have_rows('other_officers')): the_row();
			$thisOfficer = get_sub_field('officer');
			$name = get_the_title($thisOfficer);
			$title = get_field('title', $thisOfficer);
			?>
			<div class="col-md-6">
				<?php echo $title;?> - <?php echo $name;?><br>
			</div>
			<?php
			endwhile; endif;
			?>
		</div>

		<hr>
		<div class="row trustees">
			<?php
			if (have_rows('trustee_officers')):
			while (have_rows('trustee_officers')): the_row();
			$thisOfficer = get_sub_field('officer');
			$name = get_the_title($thisOfficer);
			$title = get_field('title', $thisOfficer);
			?>
			<div class="col-md-6">
				<?php echo $title;?> - <?php echo $name;?><br>
			</div>
			<?php
			endwhile; endif;
			?>
		</div>

	</div>
</main>

<?php
	endwhile;
endif;

get_footer();
?>
