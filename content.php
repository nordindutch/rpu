<div class="blog-post">
  <div class="blog-thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="blog-content">
    <div class="post-title-container">
      <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="categories">
        <?php foreach (get_the_category() as $cat) : ?>
          <a href="<?php echo get_category_link($cat->term_id); ?>" style="background-image: url(<?php echo z_taxonomy_image_url($cat->term_id); ?>)"></a>
        <?php endforeach; ?>
      </div>
    </div>
    <?php the_excerpt(); ?>
    <a class="review" href="<?php the_permalink(); ?>">Read the full review</a>
    <hr>
  </div>
</div>
<!-- /.blog-post -->