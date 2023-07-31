<?php
/**
 *
 * Template básico para mostrar Cursos (posts)
 *
**/

?>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog modal-dialog-centered">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">

        <h4 class="modal-title" style="text-align: center;" ><?php the_title();?></h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
<div id="rv_modal_bloco">
        <div class="row">
          <form id="rv_popup" class="col-12" action="Popup da página de curso [CUPOM]" method="post">
            <div class="row">
              <input type="hidden" name="curso" value="<?php echo get_the_title();?>">
              <div class="rv_popup_imagem col-12">
              	<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/desconto-15.png"/>
              </div>
              <div class="rv_popup_nome col-12 col-md-6">
                <input type="text" class="form-control" name="nome" placeholder="Nome*" required>
              </div>
              <div class="rv_popup_email col-12 col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Email*" required>
              </div>
              <div class="rv_popup_telefone col-12 col-md-6">
                <input type="text" class="form-control" id="telefone" name="telefone" data-mask="(00) 00000-0000" data-mask-selectonfocus="true" placeholder="Whatsapp*">
              </div>
              <div class="rv_popup_formacao col-12 col-md-6">
                <select class="form-control" name="formacao">
                    <option value="">Formação acadêmica</option>
                    <option value="Medicina">Medicina</option>
                    <option value="Enfermagem">Enfermagem</option>
                    <option value="Fisioterapia">Fisioterapia</option>
                    <option value="Técnico de Enfermagem">Técnico de Enfermagem</option>
                    <option value="Odontologia">Odontologia</option>
                    <option value="Outros">Outros</option>
                </select>
              </div>

              <div class="rv_popup_escolaridade col-12 col-md-6">
                <select id="escolaridade" class="form-control" name="escolaridade">
                    <option value="">Escolaridade</option>
                    <option value="profissional">Superior completo</option>
                    <option value="estudante">Estudante</option>
                </select>
              </div>

              <div class="rv_popup_escolaridade_info col-12 col-md-6">
                <select id="escolaridade_info" class="form-control" name="escolaridade_info" disabled>
                  <option value="">--</option>
                </select>
              </div>

                <div class="rv_frase col-lg-12">

                  <p>Cadastre-se para ganhar <strong>15% de desconto</strong> neste curso!</p>
                </div>
                <div class="rv_botao col-lg-12">
                  <button type="submit" class="btn btn-info">CADASTRAR</button>
                  <p><small><em>Você receberá o cupom de desconto em seu email</em></small></p>
                </div>
            </div>
          </form>
        </div>

</div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>


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
				//Variáveis
				//$imagem =  get_field('curso_imagem', get_the_ID());

        $imagem = rv_pegar_imagem_curso_url();

				$public_alvo =  get_field('curso_publico_alvo', get_the_ID());
				$carga_horaria =  get_field('curso_carga_horaria', get_the_ID());

				$icone =  get_field('curso_icone', get_the_ID());
				$descricao = get_field('curso_descricao', get_the_ID());
				$topicos = get_field('curso_topicos', get_the_ID());
				$beneficios = get_field('curso_beneficios', get_the_ID());
				$certificacao = get_field('curso_certificacao', get_the_ID());
				$size = 'thumbnail';

				$recomendacoes = get_field('curso_recomendacoes', get_the_ID());

				$parcelas = get_field('curso_parcelas', get_the_ID());
				$valor = get_field('curso_valor', get_the_ID());
				$formas_pagamento = get_field('curso_compra_formas', get_the_ID());


			?>
			<div class="row">
				<div class="rv_curso_esquerda col-sm-12 col-md-8">
						<div class="rv_curso_imagem">
							<!--<svg class="rv_curso_fundo_cima" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
								<polygon fill="white" points="0,0 100,0 0,15"/>
							</svg>-->
							<img class="img-fluid" src="<?php echo $imagem; ?>"/>
							<!--<svg class="rv_curso_fundo_baixo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
								<polygon fill="red" points="0,100 100,70 100,100"/>
							</svg>-->
						</div>
						<div class="rv_curso_botoes">
						<a class="btn btn-info" href="#rv_proximas_turmas">Ver turmas</a>
						</div>

						<?php	if( $descricao ): ?>
						<div class="rv_curso_descricao">
							<div class="rv_conteudo">
									<h2>Descrição</h2>
									<?php echo $descricao;?>
							</div>
						</div>
						<?php endif; ?>

						<?php	if( $topicos ): ?>
							<div class="rv_curso_topicos">
								<div class="rv_conteudo">
										<h2>Tópicos</h2>
										<?php echo $topicos;?>
								</div>
							</div>
						<?php endif; ?>

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
						<?php	if( $certificacao ): ?>
						<div class="rv_curso_certificacao">
							<div class="rv_conteudo">

								<h2>Certificação</h2>
										<?php echo $certificacao;?>
							</div>
						</div>
						<?php endif; ?>

						<div class="rv_curso_locais">
							<div class="rv_conteudo">
									<h2>Locais de realização</h2>
									<?php //echo $locais;?>
									<ul>
										<li>Rua Visconde de Silva, 52 - 2° Andar. Botafogo - RJ</li>
										<li><strong>In-Company</strong>: Podemos realizar nosso curso em seu hospital / empresa / universidade
									</ul>

							</div>
						</div>
						<div class="rv_curso_experiencia">
							<h3>Quer montar uma turma com este curso?</h3>
							<p>Acesse <a class="btn btn-outline-info" href="<?php echo home_url( '/experiencia-berkeley/' );?>">Experiência Berkeley</a> e informe-se sobre nossas condições especiais para grupos.</p>
						</div>
				</div><!-- rv_curso_esquerda -->
				<div class="rv_curso_direita col-sm-12 col-md-4">
					<?php
						$categoria = get_the_category();
					?>
					<div class="rv_curso_direita_categoria">
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
												<p><?php echo $carga_horaria ;?></p>
										</div>
									</div>
								</div>
								<div class="container">

									<div class="rv_curso_interesse_bloco">

												<div id='rv_curso_interesse_bloco' class="rv_esconder">
														<span><em>Quer saber mais sobre este curso?</em></span>
                            <?php
                            //echo do_shortcode( '[dinamize-form id="1580"]' );
                            echo do_shortcode('[contact-form-7 id="3033" title="Formulário de Interesse em Curso"]');
                            ?>
												</div>

									</div>

								</div>

					</div> <!-- conteudo -->

					<div class="rv_pos_compra_bloco">
						<h2>Investimento</h2>

						<?php if(!empty($valor)): ?>
								<!--Parcela + Valor-->
								<h3><?php echo 'Valor: <small>R$ </smal>'. $valor; ?></h3>

						<?php endif;?>

						<div class="rv_turma_botao col-12">
							<?php if(!empty($valor)): ?>
								<a class="btn btn-info" href="#rv_proximas_turmas">VER TURMAS</a>
							<? else :?>
								<h4>Sob consulta</h4>
							<?endif;?>
						</div>

						<?php if($formas_pagamento && !empty($valor)):?>
						<div class="rv_pos_formas_pagamento col-12">
							<em><?php echo $formas_pagamento;?></em>
						</div>
						<?php endif; ?>
					</div>


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
				<h2>Observações</h2>
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
				//rv_mostrar_agenda(get_the_ID());
				rv_mostrar_produtos(get_the_ID());
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
    //var form_nome = $( "input[name='cmp2']" );
    var form_nome = $("#rv_form_nome")
    //var form_email = $( "input[name='cmp1']" );
    var form_email = $("#rv_form_email");
    //var form_ddi = $("input[name='cmp5_DDI']");
    //var form_tel = $("input[name='cmp5_NUM']");
    //var form_tel = $("input[name='cmp5']");
    var form_tel = $("#rv_form_whatsapp");
    //var form_curso = $("select[hd-name='cmp11']");
    //var form_curso = $("select[hd-name='cmp10']");
    var form_curso = $("#rv_form_curso");

    var container_tel = form_tel.parent();
    //var container_curso = $("select[hd-name='cmp11']").parent();
    var container_curso = $("select[hd-name='cmp10']").parent();

    var botao = $('#rv_curso_interesse_bloco .dinSubmit');

    container_curso.hide();

    form_nome.addClass("form-control");
    form_email.addClass("form-control");
    form_tel.addClass("form-control");
    botao.addClass("rv_curso_interesse_formulario_botao");

    //form_ddi.parent().hide();
    form_tel.attr('placeholder','Whatsapp');

    form_nome.prop('required',true);
    form_email.prop('required',true);

    var nova_opcao;
    nova_opcao = "<div> <label>";
    nova_opcao += "<input type='checkbox' class='chk_cmp10' value='" + variavel.post_title + "' checked //>"+variavel.post_title;
    nova_opcao += "</label> </div>";

    var nome_do_curso;
    nome_do_curso = variavel.post_title;
    form_curso.val(nome_do_curso);

    div_interesse.show();

    form_tel.mask("(00) 00000-0000");

    container_tel.addClass('rv_100');



    var formulario_popup = document.getElementById("rv_popup");


    formulario_popup.addEventListener('submit',rv_submeter_formulario_popup);

    console.log("carregadooooo");

//Mudar para 709
    if(variavel.post_id == '709'){

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
