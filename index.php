<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-8">

				<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post(); 

					get_template_part( 'content', get_post_format() );

				endwhile; else: 
				?>

					<div class="page-header">	
				    	<h1>Oh no!</h1>
				    </div><!-- page-header -->

				    <p>We could not find this page!!!</p>

				<?php endif; ?>

	    	</div><!-- .col-md-8 -->

	    	<?php get_sidebar(); ?>

	    </div><!-- .row -->

    </div><!-- .container -->

<?php get_footer(); ?>