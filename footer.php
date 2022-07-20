
<div id="right-sidebar">
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
    
    <div class="micro-post blog-post">
    <span class="meta"><?php echo get_the_date( 'j F, Y' ); ?></span>
    <h2 class="micro-post-title"><?php the_title(); ?></h2>
    <?php the_excerpt(); ?>
    </div>
    <?php endwhile; ?>

    </div>
</div>        
<div id="copyright">
    <p>all nonderivative content is copyright under the MIT license. some rights reserverd.</p>
</div>
<?php wp_footer(); ?>
</body>
</html>