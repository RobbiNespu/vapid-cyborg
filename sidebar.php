        <div id="left-sidebar">
            <div id="author-block" class="grid grid-cols-2">
                <div id="author-block-l">
                    <img src="<?php echo get_option('profile'); ?>" alt="">
                </div>
                <div id="author-block-r">
                    <div class="meta text-center">contact me via:</div>
                    <button type="button" class="slate"><a href="<?php echo get_option('twitter'); ?>">Mastodon</a></button>
                    <button type="button" class="slate"><a href="<?php echo get_option('matrix'); ?>">Matrix</a></button>
                    <button type="button" class="slate"><a href="<?php echo get_option('email'); ?>">Email</a></button>
                    <button type="button" class="slate"><a href="<?php echo get_option('github'); ?>">GitHub</a></button>
                </div>
            </div>
            <div id="title">
                <h1><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                <div class="meta"><?php echo get_bloginfo( 'description' ); ?></div>
            </div>

            <div id="quotes">
            <?php
                $args =  array(
                'post_type' => 'site-news-post',
                'orderby' => 'ID',
                'order' => 'DESC',
                'posts_per_page' => '2',
                );
                $custom_query = new WP_Query( $args );
                    while ($custom_query->have_posts()) : $custom_query->the_post();
            ?>
            
            <div class="site-news-post blog-post">
            <h2 class="site-news-post-title"><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            </div>
            <?php endwhile; ?>
            </div>
        </div>