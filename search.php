<?php
/* Template Name: Search Page */
get_header(); ?>

<div class="container search">
	<div class="searches">
        <?php if( have_posts() ) :?>
            <h1 class="search-term">"
            <?php printf(
                get_search_query() );
        	?>"</h1>
	</div>


	        <?php while (have_posts()) : the_post(); ?>
				<a href="<?php the_post(); ?>">
					<h2 class="search-title"><?php the_title(); ?></h2>
				</a>
				<?php the_excerpt();

            endwhile;
         	else : ?>


            <h1>Nothing Found</h1>

            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
        <?php endif; ?>

</div>


<?php get_footer(); ?>
