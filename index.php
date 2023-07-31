<?php get_header(); ?>

	<div class="content-area">
		<main>
			<section class="middle-area">
				<div class="container">
					<div class="row">

						<div class="news col-12">
							<?php
							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
								while( have_posts() ): the_post();

							?>

							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

							<?php
								endwhile;
							else:
							?>

							 <p>There's nothing yet to be displayed...</p>

							<?php endif; ?>

						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>
