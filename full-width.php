<?php
/*
Template name: Full-Width
*/
?>

<?php get_header(); ?>

<!-- Begin Section Container -->


<?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $image = $image[0]; ?>
<?php else :
    $image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
<?php endif; ?>
    <div class="hero-fullwidth" style="background-image: url('<?php echo $image; ?>')" >

            <!-- Begin Loop -->
            <?php if ( have_posts() ) {
                while ( have_posts() ) {
                    /* Our data context is defined */
                    the_post(); ?>

                    <h1><?php the_title(); ?></h1>
    </div>

<div class="fullwidth-content">
                <?php the_content();
            }
        } ?>
        <!-- End Loop -->
</div>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
