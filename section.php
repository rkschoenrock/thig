<?php
/*
Template name: Section
*/
?><?php get_header(); ?>

<!-- Begin Section Container -->
<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $image = $image[0]; ?>
<?php else :
    $image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
<?php endif; ?>
<img src="url('<?php echo $image; ?>')" width="100%" />
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
	<?php echo do_shortcode( "[yuzo_related]" ); ?>
</article>
<article class="col-md-4 sidebar">
    <?php dynamic_sidebar('agent-widget'); ?>
    <?php dynamic_sidebar('quote-widget'); ?>
    <?php dynamic_sidebar('news-widget'); ?>
    <?php dynamic_sidebar('subscribe-widget'); ?>
</article>


</div>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
