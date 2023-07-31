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
		<h1 class="entry-title">15° Congresso Brasileiro de Clínica Médica</h1>
		<svg class="rv_pagina_fundo_baixo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
			<polygon fill="white" points="0,100 100,70 100,100"/>
				<!--<polygon fill="white" points="0,50 62,90 100,10 100,100 0,100"/>-->
			</svg>
	</header>
</section>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="rv_congresso_content col-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<div class="rv_congresso_sobre container">
		<div class="row">
			<div class="col-12">

				<div class="row">
						<div class="rv_congresso_sobre_logo col-12 col-md-4">
							<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/logo-congresso.png" />
						</div>
						<div class="col-12 col-md-8">
							<p>O <strong>15º Congresso Brasileiro de Clínica Médica e 5º Congresso Internacional de Medicina de Urgência e Emergência</strong> são uma Promoção da Sociedade Brasileira de Clinica Médica – SBCM, realização da SBCM – Regional Santa Catarina e co-realização da ABRAMURGEM.
							<p>É o principal Congresso promovido pela SBCM, constituindo-se no fórum nacional mais importante para o encontro dos diversos profissionais que atuam na área da Clínica Médica, tanto aqueles que se dedicam ao ensino e à pesquisa nas universidades, como aqueles que desenvolvem atividades profissionais na área.</p>
						</div>
			</div>
			</div>
		</div>
	</div>
	<div id="rv_congresso_aluno" class="rv_congresso_aluno">
		<div class="container">
			<div class="row align-items-center">
				<div class="rv_congresso_preco col-12 col-md-3">
					<h2>- <strong>ACLS</strong> -</h2>
					<h2>Preço especial para congressistas</h2>
					<h3>de: <strike>R$ 1.400</strike></h3>
					<h2>por: R$ 1.200</h2>
					<p><em>Parcele em até 8x</em></p>
					<p></p>
					<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/acls-bh.png"/>
				</div>
					<div id="rv_congresso_aluno_bloco" class="rv_congresso_aluno_bloco col-12 col-md-6">
						<div class="rv_resultado_sorteio col-12">
							<h2>A Vencedora do Sorteiro foi:</h2>
							<h2><strong>Amanda Brambilla Fonseca Perez</strong></h2>
							<h2>Parabéns!</h2>
							<h2>Nossa produção entrará em contato!</h2>
						</div>
						<form id="cadastro-congresso" action="Cadastro de Aluno[Congresso]" method="post">
							<div class="row">

								<div class="rv_congresso_nome col-12 col-md-6">
									<input type="text" class="form-control" name="nome" placeholder="Nome*" required>
								</div>
								<div class="rv_congresso_email col-12 col-md-6">
									<input type="email" class="form-control" name="email" placeholder="Email*" required>
								</div>
								<div class="rv_congresso_telefone col-12 col-md-6">
									<input type="text" class="form-control" id="telefone" name="telefone" data-mask="(00) 00000-0000" data-mask-selectonfocus="true" placeholder="Whatsapp">
								</div>
								<div class="rv_congresso_estado col-12 col-md-6">
									<select id="estado" class="form-control" name="estado">
											<option>Estado onde reside</option>
									    <option value="AC">Acre</option>
									    <option value="AL">Alagoas</option>
									    <option value="AP">Amapá</option>
									    <option value="AM">Amazonas</option>
									    <option value="BA">Bahia</option>
									    <option value="CE">Ceará</option>
									    <option value="DF">Distrito Federal</option>
									    <option value="ES">Espírito Santo</option>
									    <option value="GO">Goiás</option>
									    <option value="MA">Maranhão</option>
									    <option value="MT">Mato Grosso</option>
									    <option value="MS">Mato Grosso do Sul</option>
									    <option value="MG">Minas Gerais</option>
									    <option value="PA">Pará</option>
									    <option value="PB">Paraíba</option>
									    <option value="PR">Paraná</option>
									    <option value="PE">Pernambuco</option>
									    <option value="PI">Piauí</option>
									    <option value="RJ">Rio de Janeiro</option>
									    <option value="RN">Rio Grande do Norte</option>
									    <option value="RS">Rio Grande do Sul</option>
									    <option value="RO">Rondônia</option>
									    <option value="RR">Roraima</option>
									    <option value="SC">Santa Catarina</option>
									    <option value="SP">São Paulo</option>
									    <option value="SE">Sergipe</option>
									    <option value="TO">Tocantins</option>
									    <option value="EX">Estrangeiro</option>
									</select>
								</div>
								<div class="rv_congresso_escolaridade col-12 col-md-6">
									<select id="escolaridade" class="form-control" name="escolaridade">
											<option value="">Escolaridade</option>
											<option value="profissional">Superior completo</option>
											<option value="estudante">Estudante</option>
									</select>
								</div>
								<div class="rv_congresso_ano col-12 col-md-6">
									<select class="rv_ano form-control" name="ano-que-cursa" disabled>
										<option value="">--</option>
									</select>
								</div>
								<div class="rv_congresso_curso col-12 col-md-12">
									<p>Gostaria de receber desconto para qual turma?</p>
									<select class="form-control" name="curso">
										<option value="">Selecione a data da turma de ACLS</option>
										<option value="19 e 20 de Outubro   => Mossoró - RN">19 e 20 de Outubro   => Mossoró - RN</option>
										<option value="26 e 27 de Outubro   => Cuiabá - MT">26 e 27 de Outubro   => Cuiabá - MT</option>
										<option value="15 e 16 de Novembro  => Natal - RN">15 e 16 de Novembro  => Natal - RN</option>
										<option value="15 e 16 de Novembro  => São Paulo - SP">15 e 16 de Novembro  => São Paulo - SP</option>
										<option value="18 e 19 de Novembro  => Mossoró - RN">18 e 19 de Novembro  => Mossoró - RN</option>
										<option value="23 e 24 de Novembro  => Campina Grande - PB">23 e 24 de Novembro  => Campina Grande - PB</option>
										<option value="29 e 30 de Novembro e 1 de Dezembro => Pelotas - RJ">29 e 30 de Novembro e 1 de Dezembro => Pelotas - RJ</option>
										<option value="4 e 5 de Dezembro => Campo Grande - MT">4 e 5 de Dezembro => Campo Grande - MT</option>
										<option value="4 e 5 de Dezembro => Goiânia">4 e 5 de Dezembro => Goiânia - GO</option>
										<option value="6, 7 e 8 de Dezembro => Pelotas - RS">6, 7 e 8 de Dezembro => Pelotas - RS</option>
										<option value="9 e 10 de Novembro   => Belo Horizonte - MG">9 e 10 de Novembro   => Belo Horizonte - MG</option>
										<option value="9 e 10 de Novembro   => Cuiabá - MT">9 e 10 de Novembro   => Cuiabá - MT</option>
										<option value="9 e 10 de Novembro   => Manaus - AM">9 e 10 de Novembro   => Manaus - AM</option>
										<option value="14 e 15 de Dezembro  => Pelotas - RS">14 e 15 de Dezembro  => Pelotas - RS</option>
										<option value="25 e 26 de Janeiro   => Cuiabá - MT">25 e 26 de Janeiro   => Cuiabá - MT</option>
									</select>
								</div>
								<div class="rv_congresso_botao col-12">
									<button type="submit" class="rv_congresso_formulario_botao btn btn-info">CADASTRAR</button>
								</div>
							</div>
						</form>
					</div>

					<div class="rv_congresso_livro col-12 col-md-3">
						<h2>Sorteio foi realizado no último dia do congresso!</h2>
						<p><em>5 de outubro de 2019</em></p>
						<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/livro-tratado-pq.jpg"/>
					</div>
			</div>
		</div>
	</div>
	<div class="rv_congresso_berkeley">


		<div class="container">
			<div class="row">
				<div class=" rv_congresso_berkeley_logo col-12 col-md-4">
						<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/Logo-Final.png"/>
				</div>
				<div class="col-12 col-md-8">
					<p>Profissionais qualificados são o diferencial de toda e qualquer instituição. A Saúde é uma das áreas que mais se desenvolvem no mundo de hoje, incorporando constantemente novos e complexos conhecimentos. Não existem bons serviços de saúde sem bons profissionais. E a única maneira de atingir a excelência é através de um processo permanente de capacitação.</p>

					<p>Com 20 anos de experiência, a Berkeley é especialista em metodologias ativas de ensino. Foi a primeira instituição do Brasil a trabalhar com o método da simulação realística e a <strong>primeira da América Latina a disponibilizar conteúdos com a tecnologia dos simuladores reais de pacientes</strong>, tornando-se referência mundial no desenvolvimento de programas e soluções educacionais, para a capacitação de profissionais e acadêmicos da área da saúde.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12">
					<p>Referência mundial no setor, somos pioneiros em desenvolvimento de cenários clínicos e treinamento em simulação realística. Com um corpo docente de mais de 80 profissionais de diversas especialidades e mais de 300 casos clínicos, <strong>capacitamos mais de 150.000 profissionais de saúde</strong> das principais instituições de saúde do Brasil.</p>
				</div>
			</div>
		</div>

	</div>
	<div class="rv_sobre_linha_baixo">
	</div>
	<div class="rv_congresso_aha">
		<div class="container">
			<div class="row align-items-center">

				<div class="col-12 col-md-8">
					<p>Nossa estrutura e experiência transformaram a Berkeley em um centro de referência <strong>American Heart Association (AHA)</strong>. Com isso, além de ministrarmos esses renomados cursos para profissionais de saúde de diversas especialidades, podemos formar também núcleos de treinamento em todo o Brasil.</p>
				</div>
				<div class="col-12 col-md-4">
						<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/american-logo.jpg"/>
				</div>
			</div>
		</div>
	</div>
	<div class="rv_sobre_galeria">
		<div class="rv_teste" style="position:relative">
		<div class="container">
			<div class="row">

				<div class="rv_sobre_esquerda col-12 col-md-6">
						<?php
							rv_mostrar_sobre_galeria();
						?>
				</div>

				<div class="rv_sobre_direita col-12 col-md-6">
						<h2>Nossas instalações</h2>
						<p>Localizada no coração de Botafogo, nossa sede no Rio de Janeiro conta com uma estrutura de 1.600 metros quadrados, distribuídos em uma casa que combina tecnologia e tradição.</p>
						<p>Transformamos toda essa área em espaços realísticos de treinamento, simulando situações-problemas dentro de ambientes de saúde. Nesses ambientes, os alunos interagem com equipamentos médicos reais, atores e a tecnologia mais moderna em treinamento.</p>
						<div class="rv_separador">
						</div>
						<div class="rv_sobre_contato">
								<h3>Venha conhecer a Berkeley! Agende uma visita!</h3>
								<p>Seja bem-vindo! A casa é sua!</p>
								<a href="<?php echo esc_url( home_url( '/contato' ));?>"><button type="button" class="btn btn-outline-light">Contato</button></a>
						</div>
				</div>
			</div>
		</div>
			<!--
			<svg class="rv_pagina_fundo_baixo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
			<polygon fill="white" points="0,100 100,70 100,100"/>
			</svg>-->

		</div>
	</div>


	<div class="rv_congresso_promotor">
		<div class="container">
				<div class="row align-items-center">
				  <div class="col-12 col-md-6">
						<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/mapa-brasil-texto.png" />

					</div>
					<div id="rv_congresso_promotor_bloco" class="rv_congresso_promotor_bloco col-12 col-md-6">
						<form id="cadastro-congresso-promotor" action="Cadastro de Promotor [Congresso]" method="post">
							<div class="row">
								<h2>Seja um promotor dos cursos Berkeley</h2>
								<h4>Leve a Berkeley para sua cidade!</h4>
								<div class="rv_congresso_promotor_nome col-12 col-md-6">
									<input type="text" class="form-control" name="nome" placeholder="Nome*" required>
								</div>
								<div class="rv_congresso_promotor_email col-12 col-md-6">
									<input type="email" class="form-control" name="email" placeholder="Email*" required>
								</div>
								<div class="rv_congresso_promotor_telefone col-12 col-md-6">
									<input type="text" class="form-control" id="telefone" name="telefone" data-mask="(00) 00000-0000" data-mask-selectonfocus="true" placeholder="Whatsapp">
								</div>
								<div class="rv_congresso_promotor_estado col-12 col-md-6">
									<select id="estado" class="form-control" name="estado">
											<option>Estado onde reside</option>
											<option value="AC">Acre</option>
											<option value="AL">Alagoas</option>
											<option value="AP">Amapá</option>
											<option value="AM">Amazonas</option>
											<option value="BA">Bahia</option>
											<option value="CE">Ceará</option>
											<option value="DF">Distrito Federal</option>
											<option value="ES">Espírito Santo</option>
											<option value="GO">Goiás</option>
											<option value="MA">Maranhão</option>
											<option value="MT">Mato Grosso</option>
											<option value="MS">Mato Grosso do Sul</option>
											<option value="MG">Minas Gerais</option>
											<option value="PA">Pará</option>
											<option value="PB">Paraíba</option>
											<option value="PR">Paraná</option>
											<option value="PE">Pernambuco</option>
											<option value="PI">Piauí</option>
											<option value="RJ">Rio de Janeiro</option>
											<option value="RN">Rio Grande do Norte</option>
											<option value="RS">Rio Grande do Sul</option>
											<option value="RO">Rondônia</option>
											<option value="RR">Roraima</option>
											<option value="SC">Santa Catarina</option>
											<option value="SP">São Paulo</option>
											<option value="SE">Sergipe</option>
											<option value="TO">Tocantins</option>
											<option value="EX">Estrangeiro</option>
									</select>
								</div>
								<div class="rv_congresso_promotor_botao col-12">
									<button type="submit" class="rv_congresso_formulario_botao btn btn-secondary">CADASTRAR</button>
								</div>
							</div>
						</form>
					</div>
				</div>
		</div>
	</div>
	<div class="rv_congresso_instrutores">
			<div class="container">
				<h2>Instrutores Altamente Qualificados</h2>
					<div class="row align-items-center">

						<div class="col-12 col-md-4">
							<div class="row">
									<div class="col-12">

										<img class="img-fluid mx-auto d-block" src="<?php echo wp_get_upload_dir()['url']?>/stephan-foto-01.png"/>
											<h3>Dr. Stephan Lachtermacher</h3>
											<!--<h4>Especialidade</h4>-->
											<p>Doutor em Ciências Biológicas (Fisiologia); Residência Médica em Clínica Médica e em Cardiologia; Especialista em Cardiologia pela SBC e em Terapia Intensiva pela AMIB; Médico Coordenador da Unidade CardioIntesiva clínica do Instituto Nacional de Cardiologia e do Hospital da Unimed Rio; Fellow do American College of Cardiology.</p>
									</div>
									<div class="col-12">
										<img class="img-fluid mx-auto d-block" src="<?php echo wp_get_upload_dir()['url']?>/ana-foto-01.png"/>
										<h3>Drª. Ana Cristina Baptista</h3>
										<!--<h4>Especialidade</h4>-->
											<p>Residência médica em clínica médica e cardiologia; Especialista em metodologias ativas de ensino; Docência em Saúde Coordenadora do Centro de Estudos do Hospital Barra D’Or; Coordenadora de qualidade assistencial do Hospital da Lagoa.</p>
									</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="row">
									<div class="col-12">
										<img class="img-fluid mx-auto d-block" src="<?php echo wp_get_upload_dir()['url']?>/fernando-foto-01.png"/>
										<h3>Dr. Fernando Tallo</h3>
										<!--<h4>Especialidade</h4>-->
											<p>Presidente da Associação Brasileira de Medicina de Urgência e Emergência (ABRAMURGEM); Mestre e Doutor em Ciências Médicas pela UNIFESP; Médico da disciplina de Clínica Médica da UNIFESP; Especialista em Anestesiologia, Oftalmologia, Terapia Intensiva Adulto e Clínica Médica  com área de Atuação em Medicina de Urgência; Chefe da Enfermaria Masculina da Disciplina de Clínica Médica da UNIFESP.</p>
									</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="row">
									<div class="col-12">
										<img class="img-fluid mx-auto d-block" src="<?php echo wp_get_upload_dir()['url']?>/matheus-foto-01.png"/>
										<h3>Dr. Matheus Felizola</h3>
										<!--<h4>Especialidade</h4>-->
											<p>Formado pela Escola Paulista de Medicina/UNIFESP e com residência em Clínica Médica pela mesma instituição. Atualmente é preceptor na Enfermaria de Clínica Médica e como chefe de plantão da UTI do PS do Hospital São Paulo.</p>
									</div>
									<div class="col-12">
										<img class="img-fluid mx-auto d-block" src="<?php echo wp_get_upload_dir()['url']?>/guilherme-foto-01.png"/>
										<h3>Dr. Guilherme Orfali</h3>
										<h4>Especialidade</h4>
											<p>Especialista em Clínica Médica e Medicina Interna pela UNIFESP (2019). Atualmente é Residente da disciplina de Anestesiologia, Dor e Medicina Intensiva da UNIFESP (EPM-Unifesp). Instrutor Facultado de Suporte Avançado de Vida Cardiovascular (SAVC/ACLS) e Suporte Avançado de Vida em Pediatria (SAVP/PALS).</p>
									</div>
							</div>
						</div>
					</div>
			</div>
	</div>

	<div class="rv_congresso_parceiros">
		<section class="rv_home_parceiros_bloco">
			<div class="container">
					<div class="row">
							<div class="rv_home_parceiros col-12">
									<h2>Clientes</h2>
									<?php
										rv_mostrar_parceiros();
									 ?>
							</div>
					</div>
			</div>
		</section>
	</div>

</article>
<script type="text/javascript">
jQuery('document').ready(function()
{

	 $ = jQuery;

	 $(document).on('change','#escolaridade', rv_carregar_ano);

	 function rv_carregar_ano(){

		 console.log( $('#escolaridade').val());

		 var escolha = $('#escolaridade').val();

		 var opcoes;

		 if (escolha == "estudante"){
				 $('.rv_ano').prop("disabled", false);

				 opcoes += '<option value="">Ano que está cursando</option>';
				 opcoes += '<option value="1">1&#186; Ano</option>';
				 opcoes += '<option value="2">2&#186; Ano</option>';
				 opcoes += '<option value="3">3&#186; Ano</option>';
				 opcoes += '<option value="4">4&#186; Ano</option>';
				 opcoes += '<option value="5">5&#186; Ano</option>';
				 opcoes += '<option value="6">6&#186; Ano</option>';


			} else {
				 $('.rv_ano').prop("disabled", true);
				 opcoes = '<option value="">--</option>';
			}

				jQuery('.rv_ano').html(opcoes);
	 }

		var form = document.getElementById("cadastro-congresso");
		function handleForm(event) {
			event.preventDefault();

			var resultado;

			resultado = "<div class='rv_congresso_aluno_resultado'><h2>Cadastro realizado com sucesso</h2>";
			resultado += "<h3>Em breve entraremos em contato!</h3></div>";

			document.getElementById("rv_congresso_aluno_bloco").innerHTML = resultado;
		}
		form.addEventListener('submit', handleForm);


		var form2 = document.getElementById("cadastro-congresso-promotor");
		function handleForm2(event) {
			event.preventDefault();

			var resultado;

			resultado = "<div class='rv_congresso_promotor_resultado'><h2>Cadastro realizado com sucesso</h2>";
			resultado += "<h3>Em breve entraremos em contato!</h3></div>";

			document.getElementById("rv_congresso_promotor_bloco").innerHTML = resultado;
		}
		form2.addEventListener('submit', handleForm2);


}); //final do document
</script>
