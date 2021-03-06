<?php 
/*
Template Name: Empty Template No Sidebar
	This is front page template without breadcrumbs.
*/

get_header();
?>

<div style="width:100%;margin:0 auto;overflow:hidden;" id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'nosidebar' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	
<?php get_footer();