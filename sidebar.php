        <div id="left-sidebar" class="mb-2 mx-2 col-span-4 lg:col-span-1 lg:text-left">
            <div id="title" class="mb-4 text-center lg:text-left">
                <h1 class="text-2xl"><a href="<?php echo get_bloginfo('wpurl');?>"><?php echo get_bloginfo('name'); ?></a></h1>
                <div class="meta"><?php echo get_bloginfo('description'); ?></div>
            </div>

            <div id="author-block" class="grid grid-cols-2">
                <div id="author-block-l" class="pr-1 flex flex-col place-content-center">
                    <img src="<?php echo get_option('profile'); ?>" alt="">
                </div>
                <div id="author-block-r" class="flex flex-col place-content-center">
                    <div class="meta text-center">contact me via:</div>
                    <button type="button" class="stone"><a href="<?php echo get_option('mastodon'); ?>" rel="me">Mastodon</a></button>
                    <button type="button" class="stone"><a href="<?php echo get_option('matrix'); ?>">Matrix</a></button>
                    <button type="button" class="stone"><a href="<?php echo get_option('email'); ?>">Contact</a></button>
                    <button type="button" class="stone"><a href="<?php echo get_option('github'); ?>">GitHub</a></button>
                </div>
            </div>

            <div id="site-news" class="mt-8">
                <h5 class="mb-4">Site News:</h5>
            <?php
                $args =  array(
                'post_type' => 'site-news-post',
                'orderby' => 'ID',
                'order' => 'DESC',
                'posts_per_page' => '8',
                );
                $custom_query = new WP_Query($args);
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    ?>

            <div class="micro-post mb-8 mx-2 pl-2 border-l-4 border-double border-stone-700 bg-gradient-to-r from-stone-800">
            <span class="meta"><?php echo get_the_date('j F, Y'); ?></span>
            <h2 class="text-lg"><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            </div>
            <?php endwhile; ?>
            </div>
        </div>
