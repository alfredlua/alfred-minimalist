<?php get_header(); ?> 

    <div class="container" role="main">

    	Image + Intro

	    <div class="row">

	    	<div class="col-md-2"></div>

	    	<div class="col-md-8">

				<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post(); 

					get_template_part( 'content', get_post_format() );
				?>

				<hr> 

				<?php endwhile; else: ?>
				

					<div class="page-header">	
				    	<h1>Oh no!</h1>
				    </div>

				    <p>We could not find this page!!!</p>

				<?php endif; ?>

	    	</div>

	    	<div class="col-md-2"></div>

	    </div>

    </div>

<?php get_footer(); ?>