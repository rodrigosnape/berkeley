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
		<div class="row">
			<div class="rv_experiencia_bloco col-12">
			<?php the_content(); ?>
		</div>
		</div>
	</div>

	<div class="rv_monte_sua_turma_bloco">
		<div class="container">
			<div class="rv_monte_sua_turma row">
				<div class="col-12 col-md-7">
					<h2>Monte sua turma</h2>
					<p>A Berkeley pode montar turmas fechadas para grupos e <strong>levar treinamentos para outras localidades do Brasil</strong>. Desta forma ajudando em aspectos logísticos e financeiros.</p>

<!--<p>Obs. <strong>Mínimo de 15 alunos</strong> para grupos fechados.</p>-->

<p>Preencha o formulário com <em>suas informações</em>, <em>curso escolhido</em> e <em>quantidade de alunos</em> que entremos em contato.</p>
				</div>
				<div class="rv_monte_sua_turma_formulario col-12 col-md-5">
						<?php echo do_shortcode('[contact-form-7 id="685" title="Monte sua turma"]');?>
				</div>
			</div>
		</div>
	</div>
		<div class="rv_monte_seu_curso_bloco">
			<div class="container">
			<div class="rv_monte_seu_curso row">
					<div class="col-12">
						<h2>Monte seu curso</h2>
						<p>Para ter uma <strong>experiência totalmente customizada</strong> utilizando o método mais moderno de ensino, a Berkeley criou esta ferramenta para montarmos o programa de treinamento que seja totalmente sinérgico com os objetivos dos alunos. <strong>Turmas exclusivas e em qualquer local do Brasil.</strong></p>

<!--<p>Obs. <strong>Mínimo de 15 alunos</strong> para grupos fechados.</p>-->

<p>Selecione a <strong>Área de conhecimento</strong> e arraste os temas que desejar para a parte de <strong>Temas escolhidos</strong>. Em seguida, preencha o formulário com <em>suas informações</em> e <em>quantidade de alunos</em> que entremos em contato.</p>
					</div>
					<div class="rv_areas_bloco col-12 col-md-6">
						<h3>Áreas de conhecimento</h3>
							<select name="rv_areas" class="rv_areas form-control">
								 <option value="">Carregando Áreas...</option>
							</select>
							<div class="rv_temas">

							</div>
					</div>
					<div class="rv_escolhidos_bloco col-12 col-md-6">
							<h3>Temas escolhidos (0/8)</h3>
							<div class="rv_escolhidos">

							</div>
					</div>
				<div class="container">
					<?php echo do_shortcode('[contact-form-7 id="651" your-message="olaaaaaaaaa" title="Monte seu Curso"]');?>
				</div>
			</div>
		</div>
		</div>

</article>


<script type="text/javascript">
jQuery('document').ready(function()
{
	 $ = jQuery;
	var item;
  var lista;
	var vetor_temas;
	var vetor_escolhidos;
	var lista_estados;

	vetor_escolhidos = new Array();
	console.log('document');
  jQuery.ajax({
   type: "post",
   dataType: "json",
   url: ajaxurl,
   data: {
     'action' : 'rv_listar_areas'
     },
   success:function(data){rv_carregar_areas(data)}
 });

 function rv_pegar_cursos(){
	 jQuery.ajax({
    type: "post",
    dataType: "json",
    url: ajaxurl,
    data: {
      'action' : 'rv_listar_cursos_nome'
      },
    success:function(data){rv_carregar_cursos(data)}
  });
 }

function rv_carregar_cursos(data){

	//console.log('rv_carregar_cursos()',data);
	var lista_cursos = data;
	var opcoes = '<option value="">Curso</option>';
	jQuery.each(lista_cursos,function(key,value){
      console.log(key,value);
      opcoes +=  '<option value="'+value+'">'+value+'</option>';
  });

	jQuery('.rv_monte_sua_turma_cursos').html(opcoes);
}

function rv_pegar_estados(){
	jQuery.ajax({
	 type: "post",
	 dataType: "json",
	 url: estadosJSON,
	 success:function(data){rv_carregar_estados(data)}
	});

}

function rv_carregar_estados(data){
	//console.log(data);
	lista_estados = data.estados;
	var opcoes = '<option value="">Estado</option>';
	jQuery.each(lista_estados,function(key,value){
      //console.log(key,value.sigla);
      opcoes +=  '<option value="'+value.sigla+'">'+value.nome+'</option>';
  });

	jQuery('.rv_monte_sua_turma_estados').html(opcoes);
	jQuery(document).on('change','.rv_monte_sua_turma_estados', rv_carregar_cidades_turma);


	jQuery('.rv_monte_seu_curso_estados').html(opcoes);
	jQuery(document).on('change','.rv_monte_seu_curso_estados', rv_carregar_cidades_curso);
}



function rv_carregar_cidades_turma(){
	var escolha = jQuery(this).val();
	//console.log('rv_carregar_cidades',escolha);

	var cidades;
	var opcoes;

	//console.log(cidades);
	jQuery.each(lista_estados,function(key,value){
				//console.log('value.sigla',value.sigla);
				if(value.sigla == escolha){
					//console.log('value.cidades',value.cidades);
					cidades = value.cidades;
				}
	});

	var tam = cidades.length;

	//console.log(tam);

	opcoes = '<option value="">Cidade</option>';

	for (var i = 0; i < tam; i++){
		opcoes +=  '<option value="'+cidades[i]+'">'+cidades[i]+'</option>';
		//console.log(i);
	}
		jQuery('.rv_monte_sua_turma_cidades').html(opcoes);

}
function rv_carregar_cidades_curso(){
	var escolha = jQuery(this).val();
	//console.log('rv_carregar_cidades',escolha);

	var cidades;
	var opcoes;

	//console.log(cidades);
	jQuery.each(lista_estados,function(key,value){
				//console.log('value.sigla',value.sigla);
				if(value.sigla == escolha){
					//console.log('value.cidades',value.cidades);
					cidades = value.cidades;
				}
	});

	var tam = cidades.length;

	//console.log(tam);
		opcoes = '<option value="">Cidade</option>';

	for (var i = 0; i < tam; i++){
		opcoes +=  '<option value="'+cidades[i]+'">'+cidades[i]+'</option>';
		//console.log(i);
	}
		jQuery('.rv_monte_seu_curso_cidades').html(opcoes);

}



 function rv_carregar_areas(data){

	 rv_pegar_cursos();
	 rv_pegar_estados();

  console.log(data);
  lista = data;
  var opcoes = '<option value="">Selecione a Área</option>';

  jQuery.each(lista,function(key,value){
      console.log(key,value.area);
      opcoes +=  '<option value="'+value.area+'">'+value.area+'</option>';
  });

  jQuery('.rv_areas').html(opcoes);

 }


 jQuery(document).on('change','.rv_areas', rv_carregar_temas);

 function rv_carregar_temas(){

   var escolha = jQuery(this).val();
   console.log(escolha);

	 temas = new Array();

   jQuery.each(lista,function(key,value){

        if(value.area == escolha ){
          //mudar esse 0 para temas no json em rv_listar_areas
          //console.log('value[0]',value[0]);
          temas = value[0];
					//console.log('dentro do loop');
        }
   });

		rv_criar_itens(temas);
		//console.log("vetor_temas",vetor_temas);
 }


 function rv_criar_itens(temas){

var caminhoUpload =  "<?php echo wp_get_upload_dir()['url']?>";

	 console.log(caminhoUpload);

	 var itens='';

	 for(var i=0; i < temas.length; i++){

		 	if (!rv_checar_item(temas[i].nome)){
				console.log('temas[i].nome',temas[i].nome);
			 itens += '<div class="rv_item row" area="'+ temas[i].area + '" tema="'+ temas[i].nome +'">';
			 itens += '<div class="col-2"><img class="img-fluid" src="'+ temas[i].imagem +'"/></div>'
			 itens += '<div class="texto col-8">'+temas[i].nome+'</div>';
			 itens += '<div class="botao col-2"><img class="img-fluid" src="'+caminhoUpload+'/icone-fechar.png"></div>'
			 itens +='</div>';
			 //console.log('i',i);
		 	}

		}

	 jQuery('.rv_temas').html(itens);

	 TweenMax.staggerFrom(".rv_temas .rv_item", 1, {opacity:0, y:-50, ease:Power4.easeOut}, 0.1);


	 rv_configurar_item();
 }

 function rv_configurar_item(){

	 item = $('.rv_item');
	 botao = $('.rv_item .botao');

	 item.each(function() {

		 var elemento = $(this);

		 //console.log('elemento',elemento);

	 });

	 Draggable.create(item,{
		 type:"x,y",
		 force3d:false,
		 onDrag:rv_arrastar_item,
		 onRelease:rv_largar_item,
	 });


	 botao.click(rv_remover_item);

 }//rv_configurar_item

//Checa se o item que irá ser criado já foi escolhido
function rv_checar_item(tema){
	var tamanho;
	tamanho = vetor_escolhidos.length;


	for (var j=0; j < tamanho; j++){
		if (vetor_escolhidos[j] == tema){
			//console.log("tema já existe: ",vetor_escolhidos[j],tema)

			return true;
		} else {

		}
	}

	return false;

}

function rv_remover_item(){

	console.log($( this ).parent().parent().hasClass('rv_escolhidos'));

	if($( this ).parent().parent().hasClass('rv_escolhidos')){


		var tema;
		tema = 	$( this ).parent();

		var removerTema;
		removerTema = $( this ).parent().attr('tema');

		var temaArea;
		temaArea = $( this ).parent().attr('area');

		//console.log("temaArea",temaArea);

		vetor_escolhidos = jQuery.grep(vetor_escolhidos, function(value) {
        return value != removerTema;
      });

				rv_salvar_temas_escolhidos();

			if ($(".rv_areas").val() == temaArea){
					$( this ).parent().appendTo('.rv_temas');
					TweenMax.set(tema,{x:0,y:0});
					TweenMax.from(tema,0.3,{autoAlpha:0});
			} else {
					$( this ).parent().remove();
			}

			//console.log($(".rv_areas").val());

		//Se a area do item estiver aberta
					//Devolver o item para a area dele em rv_temas
	}

}

function rv_arrastar_item(){
	//console.log(this.x);
}

function rv_largar_item(){
	//console.log('this', this.target);
	//console.log('item', item);
	var posX;
	var posY;

	var boundsBefore;
	var boundsAfter;

	var tamanho;
	tamanho = vetor_escolhidos.length;

	if (this.hitTest(".rv_escolhidos") && (tamanho < 8)){

		boundsBefore = this.target.getBoundingClientRect();

		$(this.target).appendTo('.rv_escolhidos');
		vetor_escolhidos.push(this.target.getAttribute('tema'));

		boundsAfter = this.target.getBoundingClientRect();
      TweenMax.fromTo(this.target, 0.3, {
        x:"+=" + (boundsBefore.left - boundsAfter.left),
        y:"+=" + (boundsBefore.top - boundsAfter.top)
      }, {
        x:0,
        y:0
      });
			rv_salvar_temas_escolhidos();
	} else{
		TweenMax.to(this.target,0.3,{x:0,y:0});
	}

	//console.log("vetor_escolhidos",vetor_escolhidos);

}

function rv_salvar_temas_escolhidos(){


	var tamanho = vetor_escolhidos.length;

	var texto;
	texto = '';

	var titulo;
	titulo = "Temas escolhidos (" + tamanho +"/8)";

	for (var i=0; i < tamanho; i++) {
		  // only push this line if it contains a non whitespace character.
			texto += vetor_escolhidos[i] + "\n";
	}

	$('input[name=rv_temas_escolhidos]').val(texto);

	$('.rv_escolhidos_bloco h3').html(titulo);

	//console.log('texto',texto);

}

}); //final do document


</script>
