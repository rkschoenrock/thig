
<?php get_header(); ?>

<!-- Begin Section Container -->


    <section class="homepage">
        <h1 class="visuallyhidden">Tower Hill Insurance</h1>

        <!-- ROW 1: Hero Image Slider -->
        <article class="col-md-12 slider">
            <h2 class="visuallyhidden">Slider</h2>
            <div class="">
                <?php dynamic_sidebar('slider-widget'); ?>
            </div>
        </article>

        <!-- ROW 2: Get a Quote -->
        <article class="quote">
            <h2 class="visuallyhidden">Get a Quote</h2>
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

        <!-- ROW 4: Intro and Find an Agent -->
        <div class="wrapper">
            <article class="col-md-8">
                <h2 class="visuallyhidden">Intro</h2>
                <?php dynamic_sidebar('intro-widget'); ?>
            </article>
            <article class="col-md-4 agent">
                <h2>Find an Agent</h2>
                <form method="post" action="#" class="agentform">
                    <label for="usr">Location</label>
                    <input type="text" class="agent-zipcode" placeholder="Zip Code" />
                    <input type="submit" name="submit" value="GO!" class="submit-button" />
                </form>
            </article>
        </div>

        <!-- ROW 5: Social Media Bar -->
        <article class="social-media-bar">
            <h2 class="visuallyhidden">Social Media</h2>
            <div class="social-image-wrapper">
              <a href="http://www.facebook.com/towerhillinsurance"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/facebook_white-38316.png" width="19%" onmouseover="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/facebook_blue-45019.png'" onmouseout="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/facebook_white-38316.png'" /></a>
              <a href="http://twitter.com/towerhillins"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/twitter_white-19495.png" width="19%" onmouseover="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/twitter_blue-19495.png'" onmouseout="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/twitter_white-19495.png'" /></a>
              <a href="http://www.linkedin.com/companies/tower-hill-insurance-group"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/linkedin_white-71108.png" width="19%" onmouseover="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/linkden_blue-71108.png'" onmouseout="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/linkedin_white-71108.png'" /></a>
              <a href="https://plus.google.com/105804151886602918803"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/googleplus_white-71108.png" width="19%" onmouseover="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/googleplus_blue-71108.png'" onmouseout="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/googleplus_white-71108.png'" /></a>
              <a href="http://www.youtube.com/towerhillinsurance"><img src="http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/youtube_white-57833.png" width="19%" onmouseover="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/youtube_blue-19495.png'" onmouseout="this.src='http://www.rebeccaschoenrock.com/thig/wp-content/uploads/2016/11/youtube_white-57833.png'" /></a>
            </div>
        </article>

        <!-- ROW 3: Our Products -->
        <article class="col-md-12 products">
            <h2 class="visuallyhidden">Products</h2>
            <div class="wrapper">
                <?php dynamic_sidebar('products-widget'); ?>
            </div>
        </article>

        <!-- ROW 6: How to File a Claim -->
        <article class="wrapper claim">
            <h2>How To File a Claim</h2>
            <div class="col-md-4 claim-p">
              <?php dynamic_sidebar('claim-widget1'); ?>
            </div>
            <div class="col-md-4 claim-p">
              <?php dynamic_sidebar('claim-widget2'); ?>
            </div>
            <div class="col-md-4 claim-p">
              <?php dynamic_sidebar('claim-widget3'); ?>
            </div>
        </article>

        <!-- ROW 7: Latest News and Subscribe -->
        <div class="aqua col-md-12">
            <div class="wrapper">
                <article class="col-md-8">
                    <?php dynamic_sidebar('news-widget-homepage'); ?>
                </article>
                <article class="col-md-4 subscribe">
                  <h2>Subscribe</h2>
                  <p>Join our mailing list to receive the latest news.</p>
                  <form method="post" action="#" class="subscribeform">
                        <label for="usr">Email Address</label>
                        <input type="text" class="subscribe-address" placeholder="Email Address" />
                        <input type="submit" name="submit" value="JOIN" class="submit-button" />
                    </form>
                </article>
            </div>
        </div>

        <!-- ROW 8: Learning Center -->
        <article class="col-md-12 learning">
          <div class="wrapper">
              <?php dynamic_sidebar('learning-widget-homepage'); ?>
          </div>
      </article>
    </section>


<!-- End Section Wrapper + Container -->


<?php get_footer(); ?>
