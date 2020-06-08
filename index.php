<?php get_header(); ?>
<div id="dark" onclick="info()">
	<div class="explainer">
		<div class="infobar"> 
			<div class="infoimg" style="background-image: url(<?php the_field('image_1', 6); ?>);"></div>
			<div class="infotxt"><?php the_field('text_1', 6); ?></div>
		</div>
		<div class="infobar"> 
			<div class="infoimg" style="background-image: url(<?php the_field('image_2', 6); ?>);"></div>
			<div class="infotxt"><?php the_field('text_2', 6); ?></div>
		</div>
		<div class="infobar"> 
			<div class="infoimg" style="background-image: url(<?php the_field('image_3', 6); ?>);"></div>
			<div class="infotxt"><?php the_field('text_3', 6); ?></div>
		</div>
		<div class="infobar"> 
			<div class="infoimg" style="background-image: url(<?php the_field('image_4', 6); ?>);"></div>
			<div class="infotxt"><?php the_field('text_4', 6); ?></div>
		</div>
		<div class="infobar"> 
			<div class="infoimg" style="background-image: url(<?php the_field('image_5', 6); ?>);"></div>
			<div class="infotxt"><?php the_field('text_5', 6); ?></div>
		</div>
		<div class="infobar"> 
			<div class="infoimg" style="background-image: url(<?php the_field('image_6', 6); ?>);"></div>
			<div class="infotxt"><?php the_field('text_6', 6); ?></div>
		</div>
		<div class="tapout">
			Tap to close
		</div>
	</div>
</div>
<div class="row">
	<div class="top-bar">
		<div class="filter-button" id="filter-button" onclick="toggleFilter()">
			<div id="filter-on-off"></div>
			<div class="filterWord">Filters</div>

		</div>
		<div id="information-button" onclick="info()">i</div>
	</div>
	<div class="post-filter" id="filter-box">
		<?php echo do_shortcode('[searchandfilter types=",checkbox" fields="search,category" submit_label="Filter" empty_search_url="/reviews"]'); ?>
	</div>
	<div class="blog-main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part('content', get_post_format()); ?>
				<!-- contents of the loop -->

		<?php endwhile;
		endif; ?>

	</div> <!-- /.blog-main -->
</div> <!-- /.row -->
<?php get_footer(); ?>