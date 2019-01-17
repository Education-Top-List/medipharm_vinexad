

<?php 

/*

Template Name: page-template-gioithieu

*/

get_header(); 

?>	



<div class="page-wrapper">



	<div class="g_content">

		<div class="container">

		

			<div class="row">

				<div class="col-md-9 col-sm-9 content_left">

					

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

						the_content();

					endwhile; else: ?>

					<p>Sorry, no posts matched your criteria.</p>

				<?php endif; ?>

				

			</div><!-- content_left -->





			<div class="col-md-3 col-sm-3 sidebar">

				<?php dynamic_sidebar('sidebar1'); ?> 

			</div> 

		</div>



	</div><!-- container -->



</div>



</div>





<?php get_footer(); ?>









