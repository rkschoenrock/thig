<?php
/*
Template name: Full-Width
*/
?>

<?php get_header(); ?>

<!-- Begin Section Container -->


<?php if (have_posts()) :
	while (have_posts()) : the_post();
	if ( has_post_thumbnail() ) { ?>
		<div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
	<?php } ?>
		<?php
	endwhile;
endif; ?>

            <!-- Begin Loop -->
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    /* Our data context is defined */
                    the_post(); ?>


    </div>
    <div class="fullwidth-content">
		<h1><?php the_title(); ?></h1>
        <?php the_content();
            }
        } ?>
        <!-- End Loop -->
    </div>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
