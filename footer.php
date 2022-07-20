
<div id="right-sidebar">

    <?php
        $args =  array(
        'post_type' => 'micro-post',
        'orderby' => 'ID',
        'order' => 'DESC',
        'posts_per_page' => '5',
        );
        $custom_query = new WP_Query( $args );
                    while ($custom_query->have_posts()) : $custom_query->the_post();
    ?>
    
    <div class="micro-post">
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