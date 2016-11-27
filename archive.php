<?php
/* Template Name: Archive Page */

get_header(); ?>

<div class="container">
	<div class="col-md-8 archives">
		<?php if ( have_posts() ) : ?>
            <h1>Recent News</h1>
            <?php
            // The Loop
            while ( have_posts() ) : the_post();?>
						<?php if ( has_post_thumbnail() ) : ?>
						    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						        <?php the_post_thumbnail( 'medium' ); ?>
						    </a>
						<?php endif; ?>
            <!-- data context -->
                <h3>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h3>
                <?php the_excerpt(); ?>
            <?php endwhile; ?> <!-- End Loop -->
        <?php else: ?>
            <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>



	</div>

	<article class="col-md-4 sidebar sidebar-color">
		<h2 class="visuallyhidden">Sidebar</h2>
			<?php dynamic_sidebar('quote-widget'); ?>
			<?php dynamic_sidebar('agent-widget'); ?>
			<?php dynamic_sidebar('subscribe-widget'); ?>
			<?php dynamic_sidebar('learning-widget'); ?>
			<?php dynamic_sidebar('news-widget'); ?>
	</article>
</div>
<?php get_footer(); ?>
