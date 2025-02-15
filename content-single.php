<div class="single-blog-post">
    <div class="blog-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="review-info">
        <div class="post-title-container">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_Date(); ?> by <?php the_author(); ?></p>
            <div class="categories">
                <?php foreach (get_the_category() as $cat) : ?>
                    <a href="<?php echo get_category_link($cat->term_id); ?>" style="background-image: url(<?php echo z_taxonomy_image_url($cat->term_id); ?>)"></a>
                <?php endforeach; ?>
            </div>
            <div class="sw-points">
            <?php the_field('points'); ?>
            </div>
        </div>
        
    </div>
    <div class="recommended-posts">
    <?php get_sidebar(); ?>
    </div>
    <div class="single-content">
        <?php the_content(); ?>

        <hr>
    </div>
</div>
<!-- /.blog-post -->