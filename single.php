<?php get_header(); ?>

<!-- Begin Section Container -->

<div class="container">
<article class="col-md-8 post">

    <h1><?php the_title(); ?></h1>
    <div class="datesocialmedia">
        <div class="col-md-6">
            <h2><?php the_time('F jS, Y') ?> by <?php the_author(); ?></h2>
        </div>
        <div class="col-md-6">
            <div class="single-social-wrapper">
				<a href="http://www.facebook.com/towerhillinsurance" target="_blank"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/facebook.jpg" /></a>
				<a href="http://twitter.com/towerhillins" target="_blank"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/twitter.jpg" /></a>
				<a href="http://www.linkedin.com/companies/tower-hill-insurance-group" target="_blank"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/linkedin.jpg" /></a>
				<a href="https://plus.google.com/105804151886602918803" target="_blank"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/google.jpg" /></a>
				<a href="http://www.youtube.com/towerhillinsurance" target="_blank"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/youtube.jpg" /></a>
            </div>
        </div>
    </div>


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
