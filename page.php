<?php get_header(); ?>
    <main>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
            <?php endwhile; else : ?>
                <article>
                    <p>Sorry, no page content was found!</p>
                </article>
            <?php endif; ?>
    </main>
<?php get_footer(); ?>