<?php
/**
 *
 * Template básico para mostrar posts
 *
**/

?>

<section class="rv_pagina_titulo">
	<header>
		<?php
			//the_title( '<h1 class="entry-title">', '</h1>' );
		?>
		<h1 class="entry-title">Profissionais</h1>
		<svg class="rv_pagina_fundo_baixo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
			<polygon fill="white" points="0,100 100,70 100,100"/>
				<!--<polygon fill="white" points="0,50 62,90 100,10 100,100 0,100"/>-->
			</svg>
	</header>
</section>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="rv_profissionais_content col-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php
				rv_mostrar_profissionais();
			?>
		</div>
</div>
</article>
