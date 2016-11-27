<?php
/*
Template name: Section
*/
?><?php get_header(); ?>

<!-- Begin Section Container -->
<?php if (have_posts()) :
    while (have_posts()) : the_post();
    if ( has_post_thumbnail() ) { ?>
      <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
    <?php } ?>
      <?php
    endwhile;
endif; ?>

<div class="container section">
<article class="col-md-8 post">

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
<article class="col-md-4 sidebar sidebar-color sidebar-section">
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
