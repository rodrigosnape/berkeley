<?php
/**
 *
 * Template básico para mostrar Pós-Internacional (posts)
 *
**/

?>
			<section class="rv_pagina_titulo rv_pagina_titulo_pos">
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
				//Variáveis
				$imagem =  get_field('pos_imagem', get_the_ID());
				$icone =  get_field('pos_icone', get_the_ID());
				$video = get_field('pos_video', get_the_ID());
				$video_coordenador = get_field('pos_video_coordenador',get_the_ID());


				$foto = get_field('pos_coordenador_foto', get_the_ID());
				$curriculo = get_field('pos_coordenador_texto', get_the_ID());
				$coordenador_nome = get_field('pos_coordenador_nome');

				$public_alvo =  get_field('pos_publico_alvo', get_the_ID());
				$carga_horaria =  get_field('pos_carga_horaria', get_the_ID());
				$duracao =  get_field('pos_duracao', get_the_ID());
				$beneficios = get_field('pos_beneficios', get_the_ID());

				$inicio = get_field('pos_inicio',get_the_ID());
				$horarios = get_field('pos_horarios', get_the_ID());

				$primeiro_dia = get_field('pos_primeiro_dia');
				$segundo_dia = get_field('pos_segundo_dia');
				$ultimo_dia = get_field('pos_ultimo_dia');


				$primeiro_hora_comeco = get_field('pos_primeiro_hora_comeco');
				$primeiro_hora_termino = get_field('pos_primeiro_hora_termino');
				$segundo_hora_comeco = get_field('pos_segundo_hora_comeco');
				$segundo_hora_termino = get_field('pos_segundo_hora_termino');
				$ultimo_hora_comeco = get_field('pos_ultimo_hora_comeco');
				$ultimo_hora_termino = get_field('pos_ultimo_hora_termino');


				$horaInicioComeco = get_field('turma_inicio_hora_comeco');
				$horaInicioTermino = get_field('turma_inicio_hora_termino');

				$horaFinalComeco = get_field('turma_fim_hora_comeco');
				$horaFinalTermino = get_field('turma_fim_hora_termino');

				$descricao = get_field('pos_descricao', get_the_ID());
				$objetivos = get_field('pos_objetivos', get_the_ID());
				$justificativa = get_field('pos_justificativa', get_the_ID());
				$diferenciais = get_field('pos_diferenciais', get_the_ID());
				$ementa = get_field('pos_ementa', get_the_ID());
				$competencias = get_field('pos_competencias', get_the_ID());
				$docentes = get_field('pos_docentes', get_the_ID());

				$certificacao = get_field('pos_certificacao', get_the_ID());
				$recomendacoes = get_field('pos_recomendacoes', get_the_ID());
				$local = get_field('pos_local', get_the_ID());
				$outros = get_field('pos_outros', get_the_ID());

				$parcelas_inscricao =  get_field('pos_inscricao_parcelas', get_the_ID());
				$valor_inscricao =  get_field('pos_inscricao_valor', get_the_ID());

				$parcelas = get_field('pos_parcelas', get_the_ID());
				$valor = get_field('pos_valor', get_the_ID());
				$promocao = get_field('pos_promocao', get_the_ID());
				$link = get_field('pos_link_compra', get_the_ID());
				$contato = get_field('pos_contato_compra', get_the_ID());
				$email = get_field('pos_email', get_the_ID());
				$telefone = get_field('pos_telefone', get_the_ID());

				$formas_pagamento_inscricao = get_field('pos_compra_formas_inscricao', get_the_ID());
				$formas_pagamento = get_field('pos_compra_formas', get_the_ID());

				$size = 'thumbnail';

				$recomendacoes = get_field('curso_recomendacoes', get_the_ID());


			?>
			<div class="row">
				<div class="rv_curso_esquerda col-sm-12 col-md-8">

					<?php if($video): ?>
						<div class="rv_curso_video">
							<?php echo $video; ?>
						</div>
					<?php elseif($imagem):?>
								<div class="rv_curso_imagem">
									<img class="img-fluid" src="<?php echo $imagem; ?>"/>
								</div>
					<?php endif;?>


						<?php if($foto): ?>
							<div class="rv_pos_coordenador">
								<div class="rv_conteudo">
									<h2>Coordenação</h2>
									<div class="row">
										<div class="rv_imagem col-12 col-md-4">
											<img class="img-fluid" src="<?php echo $foto; ?>"/>
											<?php echo $coordenador_nome;?>
										</div>
										<div class="rv_texto col-12 col-md-8">
											<?php echo $curriculo;?>
										</div>
									</div>
								</div>
							</div>
						<?php endif;?>

						<?php if($video_coordenador): ?>
							<div class="rv_curso_video">
								<?php echo $video_coordenador; ?>
							</div>
						<?php endif;?>

						<?php
							rv_mostrar_pos_galeria(get_the_ID());
						?>

						<?php if($descricao):?>
						<div class="rv_curso_descricao rv_pos_descricao rv_pos_bloco">
							<div class="rv_conteudo">
									<h2>Descrição</h2>
									<?php echo $descricao;?>
							</div>
							</div>
						 <?php endif;?>

						 <?php if($justificativa):?>
						 <div class="rv_curso_descricao rv_pos_justificativa rv_pos_bloco">
							 <div class="rv_conteudo">
									 <h2>Justificativa</h2>
									 <?php echo $justificativa;?>
							 </div>
							 </div>
							<?php endif;?>

						 <?php if($objetivos):?>
						 <div class="rv_curso_descricao rv_pos_objetivos rv_pos_bloco">
							 <div class="rv_conteudo">
									 <h2>Objetivos</h2>
									 <?php echo $objetivos;?>
							 </div>
							 </div>
							<?php endif;?>



							 <?php if($diferenciais):?>
							 <div class="rv_curso_descricao rv_pos_diferenciais rv_pos_bloco">
								 <div class="rv_conteudo">
										 <h2>Diferenciais</h2>
										 <?php echo $diferenciais;?>
								 </div>
								 </div>
								<?php endif;?>

								<?php if($competencias):?>
								<div class="rv_curso_descricao rv_pos_competencias rv_pos_bloco">
									<div class="rv_conteudo">
											<h2>Competências e habilidades a serem adquiridas</h2>
											<?php echo $competencias;?>
									</div>
									</div>
								 <?php endif;?>

								<?php if($ementa):?>
								<div class="rv_curso_descricao rv_pos_ementa rv_pos_bloco">
									<div class="rv_conteudo">
											<h2>Ementa</h2>
											<?php echo $ementa;?>
									</div>
									</div>
								 <?php endif;?>



									<?php if($docentes):?>
									<div class="rv_curso_descricao rv_pos_docentes rv_pos_bloco">
										<div class="rv_conteudo">
												<h2>Corpo docente</h2>
												<?php echo $docentes;?>
										</div>
										</div>
									 <?php endif;?>

									 <?php if($certificacao):?>
									 <div class="rv_curso_descricao rv_pos_certificacao rv_pos_bloco">
										 <div class="rv_conteudo">
												 <h2>Certificação</h2>
												 <?php echo $certificacao;?>
										 </div>
										 </div>
										<?php endif;?>


						<?php	if( $beneficios ): ?>
							<div class="rv_curso_beneficios">

								<div class="rv_conteudo">
										<h2>Benefícios</h2>

										<div class="container">
											<div class="row">
											<?php foreach($beneficios as $beneficio): ?>

													<?php
														$beneficio_imagem = get_field('beneficio_imagem', $beneficio->ID);
														$beneficio_texto = get_field('beneficio_texto', $beneficio->ID);
													?>
														<div class="rv_linha col-sm-12 col-md-4">
															<div class="row align-items-center">
																<div class="rv_imagem col-3 col-md-4">
																	<img class="img-fluid" src="<?php echo $beneficio_imagem; ?>" />
																</div>
																<div class="rv_texto col-9 col-md-8">
																	<?php echo $beneficio_texto; ?>
																</div>
															</div>
														</div>

										<?php endforeach; ?>
									</div> <!-- row -->
									</div><!-- container -->
								</div> <!-- conteudo -->
							</div>
						<?php endif; ?>

				<?php if($locais): ?>		
						<div class="rv_curso_locais">
							<div class="rv_conteudo">
									<h2>Local de realização</h2>
									<?php echo $locais;?>
									<ul>
										<li><strong>Sede</strong>: Rua Dona Mariana, 56. Botafogo - Rio de Janeiro - RJ.</li>
									</ul>
							</div>
						</div>
				<?php endif; ?>
				</div><!-- rv_curso_esquerda -->
				<div class="rv_curso_direita col-sm-12 col-md-4">
					<?php
						$categoria = get_the_category();
					?>
					<!--<div class="rv_curso_direita_categoria">
						<img class="img-fluid" src="<?php //echo get_field('categoria_imagem',$categoria[0]); ?>"/>
					</div>-->
					<div class="rv_conteudo">
						<?php
							the_title( '<h2 class="entry-title">', '</h2>' );
						?>
							<div class="rv_curso_icone">
									<img class="img-fluid" src="<?php echo $icone; ?>"/>
							</div>
								<div class="container">
									<div class="row">
										<div class="rv_curso_lateral_imagem col-2">
												<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/icone-pessoa.png"/>
										</div>
										<div class="rv_curso_lateral_texto col-10">
												<h4>Público-alvo</h4>
												<p><?php echo $public_alvo ;?></p>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="rv_curso_lateral_imagem col-2">
												<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/icone-relogio.png"/>
										</div>
										<div class="rv_curso_lateral_texto col-10">
												<h4>Carga horária</h4>
												<p><?php echo $carga_horaria ;?> horas/aula</p>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="rv_curso_lateral_imagem col-2">
												<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/icone-calendario.png"/>
										</div>
										<div class="rv_curso_lateral_texto col-10">
												<h4>Duração</h4>
												<p><?php echo $duracao ;?> meses</p>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="rv_curso_lateral_imagem col-2">
												<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/icone-inicio.png"/>
										</div>
										<div class="rv_curso_lateral_texto col-10">
												<h4>Início</h4>
												<?php echo $inicio ;?>
										</div>
									</div>
								</div>
					<?php if($horarios):?>
								<div class="container">
									<div class="row">
										<div class="rv_curso_lateral_imagem col-2">

										</div>
										<div class="rv_curso_lateral_texto rv_pos_horarios col-10">
												<h4>Horários</h4>
												<?php echo $horarios ;?>
										</div>
									</div>
								</div>
					<?php endif; ?>
								<div class="container">

									<div class="rv_curso_interesse_bloco">

										<div id='rv_curso_interesse_bloco' class="rv_esconder">
												<span><em>Quer saber mais sobre este curso?</em></span>
												<?php
												echo do_shortcode( '[dinamize-form id="1580"]' );
												?>
										</div>

									</div>

								</div>

					</div> <!-- conteudo -->
<!-- precos -->

<div class="rv_pos_inscricao_bloco">
	<div class="rv_turma_custo">

	<?php if($valor_inscricao):?>

		<h2>Taxa de Inscrição</h2>
		<h3><?php echo 'Valor: R$ '. $valor_inscricao; ?></h3>
		<?php if(!empty($link)):?>
		<div class="rv_turma_botao col-12">
			<a class="btn btn-info" href="<?php echo $link;?>">Fazer inscrição</a>
		</div>

	<?php endif; ?>

		<?php if($formas_pagamento):?>
		<div class="rv_pos_formas_pagamento col-12">
			<?php echo $formas_pagamento_inscricao;?>
		</div>
		<?php endif; ?>

	</div>




<?php elseif(!empty($contato)):?>
		<div class="rv_turma_botao col-12">
			<a class="btn btn-info" href="<?php echo $contato;?>">Entre em Contato</a>
		</div>
<?php endif;?>

</div> <!--rv_conteudo-->

<?php if($valor):?>
<div class="rv_pos_compra_bloco">
	<h2>Investimento</h2>
	<?php if (!empty($promocao) && !empty($parcelas)):?>
			<!--Parcela riscada+ Valor riscado
			Parcela  + Promoção-->
			<h4><strike><?php echo 'De: <small>'. $parcelas .'x de</small> R$ '. $valor;   ?></strike></h4>
			<h3><?php echo 'Por: <small>' .$parcelas. 'x de </small> R$ '. $promocao .'*'; ?></h3>
	<?php elseif (!empty($promocao) && empty($parcelas)):?>
			<!--Valor riscado
			Promoção-->
			<h4><strike><?php echo 'De: R$ '. $valor .'*'; ?></strike></h4>
				<h3><?php echo 'Por: R$ '. $promocao .'*'; ?></h3>
	<?php elseif (empty($promocao) && !empty($parcelas)):?>
			<!--Parcela + Valor-->
			<h3><?php echo 'Valor: <small>'. $parcelas .'x de</small> R$ '. $valor; ?></h3>
	<?php elseif (empty($promocao) && empty($parcelas)):?>

	<?php endif;?>

	<?php if($formas_pagamento):?>
	<div class="rv_pos_formas_pagamento col-12">
		<em><?php echo $formas_pagamento;?></em>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="rv_pos_contato col-12">
			<?php if($telefone !=''):?>
				<p><a href="tel:(21)2275-3131"><img src="<?php echo wp_get_upload_dir()['url']?>/icone-tel-azul.png"/>
				<strong><?php echo $telefone;?></strong></a></p>
			<?php endif;?>
			<?php if($email != ''):?>
				<p><img src="<?php echo wp_get_upload_dir()['url']?>/icone-contato-azul.png"/>
				<a href="mailto:<?php echo $email;?>"><strong>  <?php echo $email;?></strong></a> </p>
			<?php endif;?>
		</div>
	</div>
</div>

<!-- /precos -->
					<div class="container">
						<div class="row">
							<div class="rv_curso_whatsapp_bloco col-12">
								<h4><em>Quer falar com nossa equipe pelo whatsapp?</em></h4>
								<div class="row">
									<div class="col-6">
											<a target="_blank" href="https://web.whatsapp.com/send?phone=552199694-6777&text=Mensagem"><img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/Whatsapp-FaleConosco.png"/></a>
									</div>
									<div class="rv_texto col-6">
										<p><strong>horário de atendimento</strong></p>
										<p><em>Segunda à Sexta. Das 8h as 17h</em></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!--rv_curso_direita -->
			</div>


		</div><!-- .entry-content -->
	</div>
</article>
<?php if($recomendacoes): ?>
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

<section id="rv_proximas_turmas" class="rv_home_agenda_bloco">
<div class="container">
	<div class="row">
		<div class="rv_home_agenda col-12">
			<h2>Próximas turmas</h2>
			<?php
				rv_mostrar_turmas(get_the_ID());
			?>
		</div>
	</div>
</div>
</section>


<?php
	rv_mostrar_depoimentos(get_the_ID());
?>

<script>

jQuery( document ).ready(function() {
  //if (document.cookie.indexOf('visited=true') == -1){

    $ = jQuery;


    var seletor = $('#select_teste');

    var div_interesse = $('#rv_curso_interesse_bloco');
    var form_nome = $( "input[name='cmp2']" );
    var form_email = $( "input[name='cmp1']" );
    var form_ddi = $("input[name='cmp5_DDI']");
    var form_tel = $("input[name='cmp5_NUM']");
    var form_curso = $("select[hd-name='cmp11']");

    var container_tel = form_tel.parent();
    var container_curso = $("select[hd-name='cmp11']").parent();

    var botao = $('#rv_curso_interesse_bloco .dinSubmit');

    container_curso.hide();

    form_nome.addClass("form-control");
    form_email.addClass("form-control");
    form_tel.addClass("form-control");
    botao.addClass("rv_curso_interesse_formulario_botao");

    form_ddi.parent().hide();
    form_tel.attr('placeholder','Whatsapp');

    form_nome.prop('required',true);
    form_email.prop('required',true);

    var nova_opcao;
    nova_opcao = "<div> <label>";
    nova_opcao += "<input type='checkbox' class='chk_cmp11' value='" + variavel.post_title + "' checked>"+variavel.post_title;
    nova_opcao += "</label> </div>";
    form_curso.append(nova_opcao);

    div_interesse.show();

    form_tel.mask("(00) 00000-0000");

    container_tel.addClass('rv_100');




    var formulario_popup = document.getElementById("rv_popup");

//console.log('testeeeeeeeee',formulario_popup);

		if (formulario_popup != null){

    	formulario_popup.addEventListener('submit',rv_submeter_formulario_popup);

		}
    console.log("carregadooooo");

//Mudar para 709
    if(variavel.post_id == '999999999'){

      $(document).on('change','#escolaridade', rv_carregar_escolaridade_info);


      //alert( variavel.post_id );

	    jQuery('#myModal').modal({show:true});

			//console.log('mostrar modal!!!');
	    var year = 1000*60*60*24*365;
	    var expires = new Date((new Date()).valueOf() + year);

      console.log(year,expires);

      document.cookie = "visited=true;expires=" + expires.toUTCString();

    }


function rv_carregar_escolaridade_info(){

    var escolha = $('#escolaridade').val();
    var opcoes;

    if (escolha == "estudante"){
        $('#escolaridade_info').prop("disabled", false);

        opcoes = '<option value="">Ano que está cursando</option>';
        opcoes += '<option value="1">1&#186; Ano</option>';
        opcoes += '<option value="2">2&#186; Ano</option>';
        opcoes += '<option value="3">3&#186; Ano</option>';
        opcoes += '<option value="4">4&#186; Ano</option>';
        opcoes += '<option value="5">5&#186; Ano</option>';
        opcoes += '<option value="6">6&#186; Ano</option>';

        console.log('estudante');

     } else if(escolha == "profissional"){

        $('#escolaridade_info').prop("disabled", false);

        opcoes += '<option value="">Ano de conclusão</option>';
        opcoes += '<option value="2019">2019</option>';
        opcoes += '<option value="2018">2018</option>';
        opcoes += '<option value="2017">2017</option>';
        opcoes += '<option value="2016">2016</option>';
        opcoes += '<option value="2015">2015</option>';
        opcoes += '<option value="2014">2014</option>';
        opcoes += '<option value="2013">2013</option>';
        opcoes += '<option value="2012">2012</option>';
        opcoes += '<option value="2011">2011</option>';
        opcoes += '<option value="2010">2010</option>';
        opcoes += '<option value="2009">2009</option>';

          console.log('profissional');

     } else {

       $('#escolaridade_info').prop("disabled", true);
       opcoes = '<option value="">--</option>';

       console.log('nada');

     }

       jQuery('#escolaridade_info').html(opcoes);
}

function rv_submeter_formulario_popup(event){
  console.log('postar formulário');
  event.preventDefault();

  var resposta;

  resposta = "<h3>Cadastro realizado com sucesso!</h3>";
  resposta += "<div class='rv_popup_linha'></div>";
  resposta += "<h4>Verifique seu email para pegar o cupom de desconto</h4>";

  resposta += "<div style='text-align:center;'>";
  resposta += "<button class='btn btn-outline-info' data-dismiss='modal'>RETORNAR PARA A PÁGINA</button></div>";

  document.getElementById("rv_modal_bloco").innerHTML = resposta;

}


  //}
});

</script>
