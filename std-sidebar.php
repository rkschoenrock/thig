<?php
/*
Template name: Standard Page with Sidebar
*/
?><?php get_header(); ?>

<!-- Begin Section Container -->
<div class="container post-content">
<article class="col-md-8">
  <?php if (have_posts()) :
			while (have_posts()) : the_post();
			if ( has_post_thumbnail() ) { ?>
				<div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
			<?php } ?>
				<?php
			endwhile;
	endif; ?>


    <h1><?php the_title(); ?></h1>

	<!-- Begin Loop -->
    <?php if ( have_posts() ) {
        while ( have_posts() ) {
            /* Our data context is defined */
            the_post(); ?>

   <?php the_content();
        }
    } ?>
    <!-- End Loop -->
</article>
<article class="col-md-4 sidebar">
    <?php wp_nav_menu( array( 'theme_location' => 'ourcompany-menu' ) ); ?>
    <?php dynamic_sidebar('agent-widget'); ?>
    <?php dynamic_sidebar('quote-widget'); ?>
    <?php dynamic_sidebar('news-widget'); ?>
    <?php dynamic_sidebar('subscribe-widget'); ?>
</article>


</div>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
