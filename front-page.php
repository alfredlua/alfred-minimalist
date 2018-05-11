<?php get_header(); ?> 

    <div class="container front-page" role="main">

    	<div class="hero">
    		<div class="hero-photo">
    			<img src="<?php echo get_template_directory_uri(); ?>/images/profile-photo.png" alt="Alfred Lua's profile photo" width="500">
    		</div>

    		<div class="hero-intro">
	    		<h2>
	    			Hi, I’m Alfred.<br><br>

		    		I’m a Content Crafter at <a href="https://buffer.com">Buffer</a>, and I write for <a href="https://blog.bufferapp.com/">a blog</a> with over 1.5M monthly visits.<br><br>

		    		<!--- I write about content marketing, social media marketing, and SEO.<br><br> -->

		    		Here are <a href="<?php echo get_bloginfo( 'wpurl' ); ?>/blog">my latest posts</a>…
	    		</h2>
    		</div>	
    	</div>

    </div>

<?php get_footer(); ?>