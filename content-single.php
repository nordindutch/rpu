<div class="blog-post">
    <div class="post-title-container">
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
        <div class="categories">
            <?php foreach (get_the_category() as $cat) : ?>
                <a href="<?php echo get_category_link($cat->term_id); ?>" style="background-image: url(<?php echo z_taxonomy_image_url($cat->term_id); ?>)"></a>
            <?php endforeach; ?>
        </div>
    </div>
    <p class="blog-post-meta"><?php the_Date(); ?> by <?php the_author(); ?></p>
    <hr>

    <?php the_content(); ?>

    <hr>
</div>
<!-- /.blog-post -->