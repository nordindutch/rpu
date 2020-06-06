<?php get_header(); ?>
	<div class="row">
		<div class="blog-main">
			<?php get_template_part( 'content', get_post_format() ); ?> 
		</div> <!-- /.blog-main -->
	</div> <!-- /.row -->
<?php get_footer(); ?>
