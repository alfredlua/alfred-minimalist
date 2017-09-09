<?php get_header(); ?> 

    <div class="container" role="main">

	    <div class="row">

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post(); 

				get_template_part( 'content', get_post_format() );
			?>

			<hr> 

			<?php endwhile; endif; ?>

			<div class="pagination">

				<div class="left">

					<?php if( get_next_posts_link() ) :

					next_posts_link( 'Older posts', 0 );

					endif; ?>

				</div>

				<div class="right">

					<?php if( get_previous_posts_link() ) :

					previous_posts_link( 'Newer posts', 0 );

					endif; ?>

				</div>

			</div>

	    </div>

    </div>

<?php get_footer(); ?>