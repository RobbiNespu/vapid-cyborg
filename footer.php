
<div id="right-sidebar" class="my-2 mx-2 col-span-4 lg:col-span-1 text-right">
    <!-- micro posts -->
    <h5 class="mb-4">Global News:</h5>
    <?php
        $args =  array(
        'post_type' => 'micro-post',
        'orderby' => 'ID',
        'order' => 'DESC',
        'posts_per_page' => '10',
        );
        $custom_query = new WP_Query( $args );
                    while ($custom_query->have_posts()) : $custom_query->the_post();
    ?>

    <div class="micro-post mb-8 mx-2 pr-2 border-r-4 border-double border-slate-700">
    <span class="meta"><?php echo get_the_date( 'j F, Y' ); ?></span>
    <h2 class="text-lg"><?php the_title(); ?></h2>
    <?php the_excerpt(); ?>
    </div>
    <?php endwhile; ?>

    </div>
</div>

<!-- copyright -->
<div id="copyright" class="italic mx-4 text-sm text-slate-600 py-8 text-center">
    <p><?php echo get_option('copyright'); ?></p>
</div>
<?php wp_footer(); ?>
</body>
</html>