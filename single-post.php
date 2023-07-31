 <?php get_header(); ?>
 	<div class="content-area">
 		<main>
 			<section class="">
         <?php
     			while ( have_posts() ) : the_post();

     				get_template_part( 'template-parts/content', get_post_type() );

                 // If comments are open or we have at least one comment, load up the comment template.


     			endwhile; // End of the loop.
         	?>

       </section>
     </main>
   </div>
 <?php get_footer(); ?>
