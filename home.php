<?php get_header(); ?> 

    <div class="container" role="main">

    	<div class="hero">
    		<div class="hero-photo">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/profile-photo.png" alt="Alfred Lua's profile photo" width="500">
    		</div>

    		<div class="hero-intro">
	    		<h2>
	    			Hi, I’m Alfred Lua.<br><br>

		    		I’m a Content Crafter at <a href="https://buffer.com">Buffer</a>, and I write for the <a href="https://blog.bufferapp.com/">Buffer blog</a>.<br><br>

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

				<?php endwhile; endif; ?>

				<div class="pagination">

					<?php if( get_next_posts_link() ) :

					next_posts_link( '<< Older posts', 0 );

					endif; ?>

				</div>

				<div class="pagination">

					<?php if( get_previous_posts_link() ) :

					previous_posts_link( 'Newer posts >>', 0 );

					endif; ?>

				</div>

	    	</div>

	    	<div class="col-md-2"></div>

	    </div>

    </div>

<?php get_footer(); ?>