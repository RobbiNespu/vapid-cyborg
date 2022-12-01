<div class="blog-post mb-8">
    <h2 class="text-2xl"><?php the_title(); ?></h2>
    <div class="meta">posted <?php the_date(); ?> by <?php the_author_link(); ?> | <a href="<?php the_permalink(); ?>">permalink</a></div>
    <div class="m-4 p-2 rounded border-slate-600 border bg-gradient-to-b from-slate-800">
        <?php the_content(); ?>
    </div>
</div>