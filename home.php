<?php get_header(); ?> 

    <div class="container" role="main">

    	<div class="hero">
    		<div class="hero-photo">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/profile-photo.png" alt="Alfred Lua's profile photo" width="500">
    		</div>

    		<div class="hero-intro">
	    		<h2>
	    			Hi, I’m Alfred Lua.<br><br>

		    		I’m a Content Crafter at Buffer, and I write for the Buffer blog.<br><br>

		    		<!--- I write about content marketing, social media marketing, and SEO.<br><br> -->

		    		Here are my latest posts…
	    		</h2>
    		</div>	
    	</div>

    	<div class="clear"></div>

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