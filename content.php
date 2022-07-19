<div class="blog-post">
	<h2 ><?php the_title(); ?></h2>
	<div class="meta">posted <?php the_date(); ?> by <a href="#"><?php the_author(); ?></a> | <a href="<?php the_permalink(); ?>">permalink</a></div>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
</div>