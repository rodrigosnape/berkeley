<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>



<?php

$limite_palavras = 40;

switch (get_post_type()) {
 	case 'post':
	if ( has_post_thumbnail() ){
			$imagem = get_the_post_thumbnail_url( null,'thumbnail' );
	 }
	 $postado = get_the_time('F jS, Y');
	 $texto = get_the_excerpt();
	break;

	case 'curso':
	$imagem = rv_pegar_thumbnail_curso_url();
	$postado = '';
	$texto = wp_trim_words(get_field('curso_descricao'),$limite_palavras,'[...]');
	break;

	case 'pos':
	$imagem = get_field('pos_imagem');
	$postado ='';
  $texto = wp_trim_words(get_field('pos_justificativa'),$limite_palavras,'[...]');
	 break;

  case 'page':
  if ( has_post_thumbnail() ){
			$imagem = get_the_post_thumbnail_url( null,'thumbnail' );
	 }
  $postado ='';
  $texto = wp_trim_words(get_the_content(),$limite_palavras,'[...]');
  break;

}



?>



<article <?php post_class(); ?>>
	<div class="row">
		<div class="rv_blog_bloco col-12 col-md-9">
			<div class="container">
				<div class="row">
					<div class="rv_imagem  col-12 col-md-3">
								<img class="img-fluid" src="<?php echo $imagem;?>">
					</div>
					<div class="rv_texto col-12 col-md-9">
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<small><?php echo $postado; ?></small>
						<div><?php echo $texto; ?></div>
						<div><a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-outline-info">Ler mais</button></a></div>
					</div>
				</div><!-- row -->
			</div> <!-- container -->
		</div> <!-- rv_blog_bloco -->
	</div> <!-- row -->
</article>
