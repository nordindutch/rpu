<?php get_header(); ?>
	<div class="row">
		<div class="filter-button" id="filter-button" onclick="toggleFilter()">
			<div id="filter-on-off"></div>
			<div class="filterWord">Filters</div>
		</div>
		<div class="post-filter" id="filter-box">
		<?php echo do_shortcode('[searchandfilter types="checkbox" fields="category" submit_label="Filter" empty_search_url="/rpgs"]'); ?>
		</div>
		<div class="blog-main">
			<?php get_template_part( 'content', get_post_format() ); ?> 
		</div> <!-- /.blog-main -->
	</div> <!-- /.row -->
<?php get_footer(); ?>
