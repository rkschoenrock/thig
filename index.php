
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
        <article class="wrapper quote">
            <p>Get an insurance quote in seconds...</p>
            <form method="post" action="#" class="quoteform">
                  <label for="quote">Quote Type</label>
                  <select class="form-control" id="quote">
                      <option>Homeowners</option>
                      <option>High Value Homes</option>
                      <option>Flood Insurance</option>
                      <option>Rental Property</option>
                  </select>
                  <label for="usr">Zip Code</label>
                  <input type="text" class="quote-zipcode" placeholder="Zip Code" />
                  <input type="submit" name="submit" value="GET A QUOTE" class="submit-button" />
              </form>
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
            <article class="col-md-4 agent">
                <h3>Find an Agent</h3>
                <form method="post" action="#" class="agentform">
                    <label for="usr">Location</label>
                    <input type="text" class="agent-zipcode" placeholder="Zip Code" />
                    <input type="submit" name="submit" value="GO!" class="submit-button" />
                </form>
            </article>
        </div>

        <!-- ROW 5: Social Media Bar -->
        <article class="social-media-bar">
            <div class="social-image-wrapper">
                <a href="http://www.facebook.com/towerhillinsurance" target="_blank"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/facebook.jpg" /></a>
				<a href="http://twitter.com/towerhillins" target="_blank"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/twitter.jpg" /></a>
				<a href="http://www.linkedin.com/companies/tower-hill-insurance-group" target="_blank"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/linkedin.jpg" /></a>
				<a href="https://plus.google.com/105804151886602918803" target="_blank"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/google.jpg" /></a>
				<a href="http://www.youtube.com/towerhillinsurance" target="_blank"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/10/youtube.jpg" /></a>
            </div>
        </article>

        <!-- ROW 6: How to File a Claim -->
        <article class="wrapper claim">
            <h2>How To File a Claim</h2>
            <div class="col-md-4">
              <?php dynamic_sidebar('claim-widget1'); ?>
            </div>
            <div class="col-md-4">
              <?php dynamic_sidebar('claim-widget2'); ?>
            </div>
            <div class="col-md-4">
              <?php dynamic_sidebar('claim-widget3'); ?>
            </div>
        </article>

        <!-- ROW 7: Latest News and Subscribe -->
        <div class="aqua col-md-12">
            <div class="wrapper">
                <article class="col-md-8">
                    <?php dynamic_sidebar('news-widget'); ?>
                </article>
                <article class="col-md-4 subscribe">
                  <h3>Subscribe</h3>
                  <p>Join our mailing list to receive the latest news.</p>
                  <form method="post" action="#" class="subscribeform">
                        <label for="usr">Email Address</label>
                        <input type="text" class="subscribe-address" placeholder="Email Address" />
                        <input type="submit" name="submit" value="JOIN" class="submit-button" />
                    </form>
                </article>
            </div>
        </div>
    </section>
<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
