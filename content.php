<div class="blog-post">
	<div class="page-header">	
		<h1 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</div>

	<div class="blog-post-content">
		<div class="feature-image">
			<?php the_post_thumbnail(); ?>
		</div>

		<div class="blog-post-date">
			<p>Written on <?php the_date(); ?></p>
		</div>


		<?php the_content(); ?>
	</div>

	<hr>

	<p>			    		
		Category: <?php the_category( ', ' );?> |
		<?php the_tags('Tags: ', ', ');?>

	</p>	

	<hr>

</div>