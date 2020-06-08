<?php /* Template Name: The Test */ ?>
<?php get_header(); ?>
	<div class="row">
    <div class="blog-main test">
			<?php get_template_part( 'content-page', get_post_format() ); ?> 
		</div> 
        <div id="test-results">
            <h2>Results</h2>
        </div>
		<div class="test-main" id="test-form" onload="cackle()">
            <div class="question-block" id="one"></div>
            <div class="question-block" id="two"></div>
            <div class="question-block" id="three"></div>
            <div class="question-block" id="four"></div>
            <div class="question-block" id="five"></div>
            <div class="question-block" id="six"></div>
            <div class="submit-test">
                <div class="submit-test-button" id="submitter" onclick="displayType()">Submit Test</div>
            </div>
		</div> <!-- /.blog-main -->
    </div> <!-- /.row -->
    <script>
        cackle();
    </script>
<?php get_footer(); ?>
