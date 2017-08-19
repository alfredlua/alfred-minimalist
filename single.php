<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-8">

				<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();

			    	get_template_part( 'content', get_post_format() );

			    ?>

				<?php endwhile; endif; ?>

				<div class="comments">
					<?php comments_template(); ?>
				</div>

	    	</div>

	    </div>

    </div>

<?php get_footer(); ?>