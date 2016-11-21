<?php
/* Template Name: Archive Page */

get_header(); ?>

<div class="container">
	<div class="col-md-9">
		<?php if ( have_posts() ) : ?>
            <h1>Archives</h1>
            <?php
            // The Loop
            while ( have_posts() ) : the_post();?>
            <!-- data context -->
                <h3>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h3>
                <?php the_excerpt(); ?>
            <?php endwhile; ?> <!-- End Loop -->
        <?php else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>

        <h2>Archives by Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        <h2>Archives by Category:</h2>
        <ul>
             <?php wp_list_categories(); ?>
        </ul>
	</div>

		<article class="col-md-3 sidebar">
			<h2 class="visuallyhidden">Sidebar</h2>
		    <?php dynamic_sidebar('agent-widget'); ?>
		    <?php dynamic_sidebar('quote-widget'); ?>
		    <?php dynamic_sidebar('news-widget'); ?>
		    <?php dynamic_sidebar('subscribe-widget'); ?>
		</article>
</div>
<?php get_footer(); ?>
