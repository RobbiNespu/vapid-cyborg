<div class="blog-post mb-8">
	<h2 class="text-2xl"><?php the_title(); ?></h2>
	<div class="meta">posted <?php the_date(); ?> by <a href="#"><?php the_author(); ?></a> | <a href="<?php the_permalink(); ?>">permalink</a></div>
    <div class="p-4">
        <?php the_content(); ?>
    </div>
</div>