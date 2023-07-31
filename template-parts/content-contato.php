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
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>
		<svg class="rv_pagina_fundo_baixo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
			<polygon fill="white" points="0,100 100,70 100,100"/>
				<!--<polygon fill="white" points="0,50 62,90 100,10 100,100 0,100"/>-->
			</svg>
	</header>
</section>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row rv_contato_bloco align-items-center">
			<div class="col-12 col-md-6">
				<div class="container">
					<?php echo do_shortcode( '[contact-form-7 id="542" title="Berkeley"]' ); ?>
				</div>
			</div>
			<div class="col-12 col-md-6">
					<?php the_content(); ?>
			</div>
			<div class="col-12 col-md-6">
				<p style="font-size:10px;"><em>Preenchendo qualquer formulário neste site você será adicionado, automaticamente, a nossa base de newsletter para receber novidades, promoções e conteúdos relacionados ao seu interesse. No próprio e-mail você pode optar por se descadastrar.</em></p>
			</div>
		</div>

	</div>
</article>
