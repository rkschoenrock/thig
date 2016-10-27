
<?php get_header(); ?>

<!-- Begin Section Container -->


    <section class="homepage">

        <!-- ROW 1: Hero Image Slider -->
        <article class="col-md-12 slider">
            <div class="wrapper">
                <?php dynamic_sidebar('slider-widget'); ?>
            </div>
        </article>

        <!-- ROW 2: Get a Quote -->
        <article class="wrapper">
            <p>Get a Quote form will go in here</p>
        </article>

        <!-- ROW 3: Our Products -->
        <article class="col-md-12 products">
            <div class="wrapper">
                <?php dynamic_sidebar('products-widget'); ?>
            </div>
        </article>

        <!-- ROW 4: Intro and Find an Agent -->
        <div class="wrapper">
            <article class="col-md-8">
                <?php dynamic_sidebar('intro-widget'); ?>
            </article>
            <article class="col-md-4">
                <?php dynamic_sidebar('agent-widget'); ?>
            </article>
        </div>

        <!-- ROW 5: Social Media Bar -->
        <article class="social-media-bar">
            <div class="social-image-wrapper">
                <a href="#"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/facebook.jpg" /></a>
                <a href="#"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/twitter.jpg" /></a>
                <a href="#"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/linkedin.jpg" /></a>
                <a href="#"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/google.jpg" /></a>
                <a href="#"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/youtube.jpg" /></a>
            </div>
        </article>

        <!-- ROW 6: How to File a Claim -->
        <article class="wrapper claim">
            <?php dynamic_sidebar('claim-widget'); ?>
        </article>

        <!-- ROW 7: Latest News and Subscribe -->
        <div class="aqua col-md-12">
            <div class="wrapper">
                <article class="col-md-8">
                    <?php dynamic_sidebar('news-widget'); ?>
                </article>
                <article class="col-md-4">
                    <?php dynamic_sidebar('subscribe-widget'); ?>
                </article>
            </div>
        </div>
    </section>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
