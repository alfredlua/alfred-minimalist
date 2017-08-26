<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				get_template_part( 'content', get_post_format() );

			?>

			<hr> 

			<?php endwhile; else: ?>

				<div class="page-header">	
			    	<h1>Oh no!</h1>
			    </div><!-- page-header -->

			    <p>We could not find this page!!!</p>

			<?php endif; ?>

	    </div>

    </div><!-- .container -->

<?php get_footer(); ?>