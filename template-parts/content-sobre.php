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


<div class="rv_sobre_primeiro">
		<div class="container">
				<div class="row align-items-center">
						<div class="rv_imagem col-12 col-md-4">
								<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/berkeley-educacional-logo-pq.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						</div>
						<div class="rv_texto col-12 col-md-8">
							<?php echo get_field('sobre_primeiro'); ?>
						</div>
					</div>
		</div>
</div>
<div class="rv_sobre_linha_topo">

</div>
<div class="rv_sobre_terceiro">
	<div class="container">
			<div class="row">
					<div class="rv_imagem col-12 col-md-2">
						<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/marcelo-gloria.jpg" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						<h4>Marcelo Glória</h4>
						<p><em>Fundador</em></p>
					</div>
					<div class="rv_texto col-12 col-md-10">
						<?php echo get_field('sobre_terceiro'); ?>
					</div>
			</div>
	</div>
</div>
<div class="rv_sobre_linha_baixo">

</div>

<div class="rv_sobre_segundo">
	<div class="container">
			<div class="row align-items-center">
					<div class="rv_texto col-12 col-md-10">
							<?php echo get_field('sobre_segundo'); ?>
					</div>
					<div class="rv_imagem col-12 col-md-2">
						<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/sam-close.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					</div>
				</div>
	</div>
</div>
<div class="rv_sobre_mvv">
	<div class="container">
		<div class="row">
			<div class="rv_sobre_missao col-12 col-md-4">
				<div class="rv_conteudo row">
					<div class="rv_sobre_cima col-12">
						<!--<img src="http://localhost/berkeley/wp-content/uploads/pessoa-1.png"/>-->
						<h2>Método</h2>
					</div>
					<div class="rv_sobre_baixo col-12">
						<p>Para cada cenário de simulação são criados fluxogramas com variáveis de ação versus tempo. Desse modo, os cenários clínicos acontecem de uma forma controlada e com objetivos específicos. A partir desses objetivos são criados cenários clínicos e fluxogramas para cada um deles. A junção desses cenários com o treinamento prático de habilidades pertinentes é o que forma um curso Berkeley</p>
					</div>
				</div>
			</div>
			<div class="rv_sobre_visao col-12 col-md-4">
				<div class="rv_conteudo row">
					<div class="rv_sobre_cima col-12">
							<h2>Tecnologia</h2>
					</div>
						<div class="rv_sobre_baixo col-12">
							<p>Trabalhamos com as mais modernas tecnologias de treinamento, incluindo o Simulador Real de Pacientes, robôs com sofisticados modelos matemáticos de fisiologia e farmacologia conectados a equipamentos médicos reais, que reagem de forma autônoma e realista a todos os procedimentos médico/terapêuticos, podendo, em situações extremas, apresentar morte clínica.</p>
						</div>
				</div>
			</div>
			<div class="rv_sobre_valores col-12 col-md-4">
				<div class="rv_conteudo row">
					<div class="rv_sobre_cima col-12">
						<h2>Experiência</h2>
					</div>
					<div class="rv_sobre_baixo col-12">
						<p>Toda a estrutura e todo o processo de desenvolvimento do Grupo Berkeley tem como objetivo criar uma experiência significativa para os nossos parceiros. Tecnologia de ponta, aliada a profissionais experientes e capacitados para aplicar conteúdos atualizados, testados e validados. Os resultados não poderiam ser mais eficazes, alcançando as metas educacionais propostas de forma clara e objetiva.</p>
					</div>
				</div>
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div> <!-- rv_sobre_mvv -->
<div class="rv_sobre_quarto">
	<div class="container">
			<div class="row">
					<div class="rv_texto col-12 col-md-12">
						<?php echo get_field('sobre_quarto'); ?>
					</div>
			</div>
	</div>
</div>
	<div class="rv_sobre_profissionais">
			<h2>Equipe Berkeley</h2>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-1">
				</div>
				<div class="rv_sobre_esquerda col-12 col-md-10">
					<h3>A simulação é um método, não uma tecnologia</h3>
					<p>Com este conceito em mente, o grande investimento e maior ativo da Berkeley sempre foram as pessoas. Mesmo possuindo tecnologias que estão na fronteira do conhecimento, de nada adianta se não tivermos os <strong>melhores profissionais</strong> para utilizá-las. Assim, os instrutores da Berkeley Educacional são profissionais <strong>capacitados e certificados</strong> no método da simulação realística. E é através deles que garantimos a qualidade na entrega de todos os nossos projetos. <strong>Conheça nossa equipe:</strong></p>

					<div class="rv_botao"><a href="<?php echo esc_url( home_url( '/profissionais' ));?>"><button type="button" class="btn btn-info">Profissionais</button></a></div>
				</div>
				<!--<div class="rv_sobre_direita col-12 col-md-3">
					<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/pessoa-5.png" />
					<h4>rv_sobre_direita</h4>
					<p>Nam venenatis nisl id est tempor, sed sodales mi bibendum. Nunc purus sapien, tincidunt at tellus nec, rhoncus maximus dolor. Proin eu lorem lectus.<p>
							<p><span><strong>Coordenador científico</strong></span></p>

				</div>-->
				<div class="col-12 col-md-1">
				</div>
			</div>
		</div>
	</div> <!--bloco_1-->

	<div class="rv_sobre_galeria">
		<div class="rv_teste" style="position:relative">
		<div class="container">
			<div class="row">

				<div class="rv_sobre_esquerda col-12 col-md-6">
						<!--<img class="img-fluid" src="<?php //echo wp_get_upload_dir()['url']?>/recepcao-hospital.jpg"/>-->
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
	</div><!--bloco_3-->
	<!--<div class="rv_sobre_links">
			<div class="container">
				<div class="row">
					<div class="rv_sobre_esquerda col-12 col-md-4">
						<div class="rv_conteudo">
							esquerda
						</div>
					</div>
					<div class="rv_sobre_meio col-12 col-md-4">
						<div class="rv_conteudo">
							meio
						</div>
					</div>
					<div class="rv_sobre_direita col-12 col-md-4">
						<div class="rv_conteudo">
							direita
						</div>
					</div>
				</div>
			</div>
	</div>-->
	<?php
		rv_mostrar_depoimentos();
	?>
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
</article>
