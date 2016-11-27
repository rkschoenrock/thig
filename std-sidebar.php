<?php
/*
Template name: Standard Page with Sidebar
*/
?><?php get_header(); ?>

<!-- Begin Section Container -->
<div class="container post-content">

	<article class="col-md-3 sidebar pull-left">
		<h2 class="visuallyhidden">Side Navigation</h2>
		<?php wp_nav_menu( array( 'theme_location' => 'ourcompany-menu' ) ); ?>
	</article>

<article class="col-md-6">
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

<article class="col-md-3 sidebar sidebar-color">
	<h2 class="visuallyhidden">Sidebar</h2>
		<?php dynamic_sidebar('quote-widget'); ?>
		<?php dynamic_sidebar('agent-widget'); ?>
		<?php dynamic_sidebar('subscribe-widget'); ?>
		<?php dynamic_sidebar('learning-widget'); ?>
		<?php dynamic_sidebar('news-widget'); ?>
</article>


</div>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
