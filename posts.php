<?php
/*
Template name: Recent News List
*/
?>
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
				<a href="http://www.facebook.com/towerhillinsurance"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/facebook_white-38316.png" width="39px" onmouseover="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/facebook_blue-45019.png'" onmouseout="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/facebook_white-38316.png'" /></a>
				<a href="http://twitter.com/towerhillins"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/twitter_white-19495.png" width="39px" onmouseover="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/twitter_blue-19495.png'" onmouseout="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/twitter_white-19495.png'" /></a>
				<a href="http://www.linkedin.com/companies/tower-hill-insurance-group"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/linkedin_white-71108.png" width="40px" onmouseover="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/linkden_blue-71108.png'" onmouseout="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/linkedin_white-71108.png'" /></a>
				<a href="https://plus.google.com/105804151886602918803"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/googleplus_white-71108.png" width="45px" onmouseover="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/googleplus_blue-71108.png'" onmouseout="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/googleplus_white-71108.png'" /></a>
				<a href="http://www.youtube.com/towerhillinsurance"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/youtube_white-57833.png" width="40px" onmouseover="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/youtube_blue-19495.png'" onmouseout="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/youtube_white-57833.png'" /></a>
            </div>
        </div>
    </div>

	<div class="post-content">
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
	</div>

</article>
<article class="col-md-4 sidebar sidebar-color">
  <?php dynamic_sidebar('quote-widget'); ?>
  <?php dynamic_sidebar('agent-widget'); ?>
  <?php dynamic_sidebar('subscribe-widget'); ?>
  <?php dynamic_sidebar('learning-widget'); ?>
  <?php dynamic_sidebar('news-widget'); ?>
</article>


</div>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
