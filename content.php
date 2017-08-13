<div class="blog-post">
	<div class="page-header">	
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	</div>


	<?php the_content(); ?>

	<hr>

	<p>			    		
		Category: <?php the_category( ', ' );?> |
		<?php the_tags('Tags: ', ', ');?>

	</p>	

	<hr>

</div>