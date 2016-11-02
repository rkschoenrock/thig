<?php
/* Template Name: Search Page */
get_header(); ?>

<div class="container search">
	<div class="searches">
        <?php if( have_posts() ) :?>
            <h2 class="search-term">"
            <?php printf(
                get_search_query() );
        	?>"</h2>
	</div>


	        <?php while (have_posts()) : the_post(); ?>
				<a href="<?php the_post(); ?>">
					<h2 class="search-title"><?php the_title(); ?></h2>
				</a>
				<?php the_excerpt();

            endwhile;
         	else : ?>


            <h2>Nothing Found</h2>

            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
        <?php endif; ?>

</div>


<?php get_footer(); ?>
