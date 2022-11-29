<?php get_header(); ?>
        <div id="content" class="p-4 col-span-4 lg:col-span-3 lg:py-0 lg:my-0 border-y-2 border-y-slate-800 lg:border-y-0 lg:border-x-2 lg:border-x-slate-800 lg:text-justify lg:min-h-screen">
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );
                endwhile;
            ?>
                
            <nav>
                <ul class="pager">
                <li><?php next_posts_link( 'Previous' ); ?></li>
                <li><?php previous_posts_link( 'Next' ); ?></li>
                </ul>
            </nav>
            <?php endif; ?>
        </div>
<?php get_footer(); ?>