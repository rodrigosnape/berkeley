<?php
/**
 *
 * Template básico para mostrar Turmas (posts)
 *
**/

?>

			<section class="rv_pagina_titulo">
				<header>
				<?php
					the_title( '<h1 class="entry-title">', '</h1>' );
				?>
				<svg class="rv_curso_fundo_baixo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
					<polygon fill="white" points="0,100 100,70 100,100"/>
						<!--<polygon fill="white" points="0,50 62,90 100,10 100,100 0,100"/>-->
				</svg>
			</header>
			</section>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
			<div class="entry-content">

				<?php
				//Variáveis TURMA

				$curso = get_field('turma_curso');

				$cargaHoraria = get_field('turma_carga_horaria');
				$alunos = get_field('turma_alunos');
				$status = get_field('turma_status');

				$diaInicio = get_field('turma_inicio_dia');
				$diaFinal = get_field('turma_fim_dia');

				$horaInicioComeco = get_field('turma_inicio_hora_comeco');
				$horaInicioTermino = get_field('turma_inicio_hora_termino');

				$inicio = get_field('turma_inicio',get_the_ID());
	      $horarios = get_field('turma_horarios', get_the_ID());
				$link_curso = get_permalink($curso[0]);

				$horaFinalComeco = get_field('turma_fim_hora_comeco');
				$horaFinalTermino = get_field('turma_fim_hora_termino');

				$parcelas = get_field('turma_parcelas');
				$valor = get_field('turma_valor');
				$promocao = get_field('turma_promocao');

				$contato = get_field('turma_compra_contato');
				$link = get_field('turma_link_compra');
				$email = get_field('turma_email');
				$telefone = get_field('turma_telefone');

				//$beneficios = get_field('turma_beneficios');
				$local = get_field('turma_local');

				//$imagem =  get_field('curso_imagem', $curso[0]);
				$imagem =  rv_pegar_imagem_curso_url($curso[0]);

				if (empty($diaFinal)){
					$diaUnico = true;
				} else {
					$diaUnico = false;
				}


				$public_alvo =  get_field('curso_publico_alvo', get_the_ID());
				$carga_horaria =  get_field('curso_carga_horaria', get_the_ID());

				$icone =  get_field('curso_icone', get_the_ID());

				$beneficios = get_field('curso_beneficios', $curso[0]);
				$descricao = get_field('curso_descricao', $curso[0]);
				$topicos = get_field('curso_topicos', $curso[0]);
				$certificacao = get_field('curso_certificacao', get_the_ID());
				$size = 'thumbnail';

				$recomendacoes = get_field('curso_recomendacoes', $curso[0]);

			?>

			<div class="row">
				<div class="rv_turma_esquerda col-sm-12 col-md-8">
<?php /*?>
					<div class="rv_turma_dados rv_turma_bloco row">
						<div class="col-12 col-md-4">
							<h2>Carga horária</h2>
								<p><?php echo $cargaHoraria .'h';?></p>
						</div>
						<div class="col-12 col-md-4">
							<h2>Alunos por turma</h2>
								<p><?php echo $alunos;?></p>
						</div>
						<div class="col-12 col-md-4">
							<h2>Status</h2>
								<p><?php echo $status;?></p>
						</div>
					</div>
<?php */?>

					<div class="rv_turma_data rv_turma_bloco row">
						<div class='col-6'>
							<?php if($diaFinal != ''):?>
								<h2>Dia(s)</h2>
									<p><?php echo $inicio;?></p>
							<?php endif; ?>
						</div>
						<?php if($diaFinal != ''):?>
						<div class="col-6">
							<h2>Horário</h2>
							<p><?php echo $horarios;?>
						</div>
					<?php endif; ?>
					</div>


					<div class="rv_turma_local rv_turma_bloco row">
						<div class='col-12'>
							<h2>Local de realização</h2>
						</div>
						<div class="col-12">
							<p><?php echo $local; ?></p>
							<p><em><small>Turma oferecida por parceiros do Grupo Berkeley</small></em></p>
						</div>
					</div>

					<div class="rv_turma_saiba_mais row">

						<div class="col-12">

							<p>Saiba mais sobre o conteúdo do curso em <span><a class="btn btn-outline-info" href="<?php echo $link_curso?>"><?php echo get_the_title();?></a></span></p>

						</div>

					</div>


				</div>
				<div class="rv_turma_direita col-sm-12 col-md-4">
					<div class="rv_conteudo">
						<div class="rv_turma_nome col-12">
								<h2>Turma</h2>
								<?php the_title('<p>','</p>');?>
						</div>
						<div class="rv_turma_imagem col-12">
							<img class="img-fluid" src="<?php echo $imagem; ?>"/>
						</div>
						<div class="rv_turma_custo">

							<?php if (!empty($promocao) && !empty($parcelas)):?>
									<!--Parcela riscada+ Valor riscado
									Parcela  + Promoção-->
									<h4><strike><?php echo 'Valor: <small>'. $parcelas .'x de</small> R$ '. $valor; ?></strike></h4>
									<h3><?php echo 'Promoção: <small>' .$parcelas. 'x de </small> R$ '. $promocao; ?></h3>
							<?php elseif (!empty($promocao) && empty($parcelas)):?>
									<!--Valor riscado
									Promoção-->
									<h4><strike><?php echo 'Valor: R$ '. $valor; ?></strike></h4>
										<h3><?php echo 'Promoção: R$ '. $promocao; ?></h3>
							<?php elseif (empty($promocao) && !empty($parcelas)):?>
									<!--Parcela + Valor-->
									<h3><?php echo 'Valor: <small>'. $parcelas .'x de</small> R$ '. $valor; ?></h3>
							<?php elseif (empty($promocao) && empty($parcelas)):?>

							<?php endif;?>

						</div>

						<?php if(!empty($link)):?>
						<div class="rv_turma_botao col-12">
							<a class="btn btn-info" href="<?php echo $link;?>">Comprar</a>
						</div>
					<?php elseif(!empty($contato)):?>
							<div class="rv_turma_botao col-12">
								<a class="btn btn-info" href="<?php echo $contato;?>">Entre em Contato</a>
							</div>
					<?php endif;?>
							<div class="rv_turma_contato col-12">
								<?php if($telefone !=''):?>
									<h3>Telefone</h3>
									<p><?php echo $telefone;?> </p>
								<?php endif;?>
								<?php if($email != ''):?>
									<h3>Email</h3>
									<p><a href="mailto:<?php echo $email;?>"><strong><?php echo $email;?></strong></a> </p>

							</div>


						<?php endif;?>

				</div> <!--rv_conteudo-->

					<?php
						$categoria = get_the_category();
					?>
					<!--<div class="rv_curso_direita_categoria">
						<img class="img-fluid" src="<?php echo get_field('categoria_imagem',$categoria[0]); ?>"/>
					</div>
					<div class="rv_conteudo">
						<?php
							the_title( '<h2 class="entry-title">', '</h2>' );
						?>
							<div class="rv_curso_icone">
									<img class="img-fluid" src="<?php echo $icone; ?>"/>
							</div>
								<div class="container">
									<div class="row">
										<div class="col-3">
												<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/icone-pessoa.png"/>
										</div>
										<div class="col-9">
												<h4>Público alvo</h4>
												<p><?php echo $public_alvo ;?></p>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-3">
												<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/icone-relogio.png"/>
										</div>
										<div class="col-9">
												<h4>Carga horária</h4>
												<p><?php echo $carga_horaria ;?></p>
										</div>
									</div>
								</div>
							<div class="container">
								<div class="row">
									<p><em>Quer saber mais sobre este curso?</em></p>
										<div class="rv_curso_interesse_email col-10">
												Digite Seu email
										</div>
										<div class='rv_curso_interesse_botao col-2'>
												OK
										</div>

								</div>
							</div>

					</div>-->

				</div>


			</div>





		</div><!-- .entry-content -->
	</div>
</article>
<?php if(!empty($recomendacoes)):?>
	<div class="rv_curso_recomendacoes col-12">
		<svg class="rv_curso_fundo_cima" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
			<polygon fill="white" points="0,0 100,0 100,35"/>
		</svg>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Recomendações</h2>
					<?php echo $recomendacoes;?>
				</div>
			</div>
		</div>
	</div>
<?php endif;?>

<section class="rv_home_agenda_bloco">
<div class="container">
	<div class="row">
		<div class="rv_home_agenda col-12">
			<h2>Próximas turmas</h2>
			<?php
				rv_mostrar_turmas($curso[0]);
			?>
		</div>
	</div>
</div>
</section>
<!--<section class="rv_curso_depoimentos_bloco">
	<div class="container">
			<div class="row">
					<div class="rv_curso_depoimentos col-12">
							<h2>Depoimentos</h2>
							<?php
								//rv_mostrar_depoimentos();
							?>
					</div>
			</div>
	</div>
</section>-->
