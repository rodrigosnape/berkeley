<?php ?>

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
<article>
  <div class="container">

    <div class="row rv_black_friday">
      <?php //rv_mostrar_cursos_destaque(); ?>
    </div>
    <div class="row">

      <div class="col-12">
      <?php the_content(); ?>

      </div>
      <div class="col-12 col-md-4">
        <?php rv_listar_cursos(); ?>
      </div>
      <div class="col-12 col-md-4">
       <?php rv_listar_categorias(); ?>
      </div>
      <div class="col-12 col-md-4">
       <?php rv_listar_categorias_areas(); ?>
      </div>
      <div class="rv_agenda_procurado col-12">
        <h2>Todas as Turmas</h2>
      </div>
      <div class="rv_agenda_container col-12">
          <div class="rv_loading col-12">
            <svg version="1.1" id="L7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                 <path fill="#155160" d="M31.6,3.5C5.9,13.6-6.6,42.7,3.5,68.4c10.1,25.7,39.2,38.3,64.9,28.1l-3.1-7.9c-21.3,8.4-45.4-2-53.8-23.3
                  c-8.4-21.3,2-45.4,23.3-53.8L31.6,3.5z">
                      <animateTransform
                         attributeName="transform"
                         attributeType="XML"
                         type="rotate"
                         dur="2s"
                         from="0 50 50"
                         to="360 50 50"
                         repeatCount="indefinite" />
                  </path>
                 <path fill="#155160" d="M42.3,39.6c5.7-4.3,13.9-3.1,18.1,2.7c4.3,5.7,3.1,13.9-2.7,18.1l4.1,5.5c8.8-6.5,10.6-19,4.1-27.7
                  c-6.5-8.8-19-10.6-27.7-4.1L42.3,39.6z">
                      <animateTransform
                         attributeName="transform"
                         attributeType="XML"
                         type="rotate"
                         dur="1s"
                         from="0 50 50"
                         to="-360 50 50"
                         repeatCount="indefinite" />
                  </path>
                 <path fill="#155160" d="M82,35.7C74.1,18,53.4,10.1,35.7,18S10.1,46.6,18,64.3l7.6-3.4c-6-13.5,0-29.3,13.5-35.3s29.3,0,35.3,13.5
                  L82,35.7z">
                      <animateTransform
                         attributeName="transform"
                         attributeType="XML"
                         type="rotate"
                         dur="2s"
                         from="0 50 50"
                         to="360 50 50"
                         repeatCount="indefinite" />
                  </path>
    </svg>
        </div>
          <div class="rv_agenda_resultado">
          </div>
      </div>
    </div>
  </div>

</article>
<!--
<section>
  <div class="container">
    <div class="rv_atalho_experiencia_bloco row">
        <div class="rv_atalho_esquerda col-12 col-md-6">
          <div class="rv_conteudo row align-items-center">
            <div class="rv_texto col-12 col-md-8">
                <h3>Não encontrou sua turma?</h3>
                <p>Escolha um curso e tenha uma turma em sua cidade!</p>
            </div>
            <div class="rv_botao col-12 col-md-4">
              <a class="btn btn-outline-info" href="<?php echo site_url("/experiencia-berkeley");?>">Monte sua TURMA</a>
            </div>
          </div>
        </div>
        <div class="rv_atalho_direita col-12 col-md-6">
          <div class="rv_conteudo row align-items-center">
            <div class="rv_texto col-12 col-md-8">
              <h3>Procura por um curso sob medida?</h3>
              <p>Escolha os temas e crie um curso 100% personalizado!</p>
            </div>
            <div class="rv_botao col-12 col-md-4">
              <a class="btn btn-outline-info" href="<?php echo site_url("/experiencia-berkeley");?>">Monte seu CURSO</a>
            </div>
          </div>

        </div>
    </div>
  </div>
</section>
-->
<script type="text/javascript">
jQuery('document').ready(function()
{

  $ = jQuery;

  rv_solicitar_agenda();

 function rv_solicitar_agenda(){

   //console.log(jQuery(this));

   var escolha;
   var procurar;
   var titulo;

    var vetor;
    if(jQuery(this).hasClass('rv_lista_cursos')){

        rv_resetar_opcoes('categorias');
        rv_resetar_opcoes('areas');
        escolha = jQuery(this).val();
        procurar = jQuery(this).find('option:selected').text();

        if (escolha == ""){
          titulo = "Todas as turmas";
        } else {
          titulo = "Turmas: " + procurar;
        }

        vetor = {'action': 'rv_mostrar_produtos',
                    'curso': escolha,
                    'quantidade': -1};

          jQuery('.rv_agenda_procurado h2').html(titulo);

    } else if(jQuery(this).hasClass('rv_lista_categorias')){
        rv_resetar_opcoes('cursos');
        rv_resetar_opcoes('areas');
        escolha = jQuery(this).val();
        procurar = jQuery(this).find('option:selected').text();

        if (escolha == ""){
          titulo = "Todas as turmas";
        } else {
          titulo = "Turmas: " + procurar;
        }

        vetor = {'action': 'rv_mostrar_produtos',
                    'categoria': escolha,
                    'quantidade': -1};
          jQuery('.rv_agenda_procurado h2').html(titulo);
    } else if(jQuery(this).hasClass('rv_lista_areas')){
        rv_resetar_opcoes('cursos');
        rv_resetar_opcoes('categorias');
        escolha = jQuery(this).val();
        procurar = jQuery(this).find('option:selected').text();

        if (escolha == ""){
          titulo = "Todas as Áreas";
        } else {
          titulo = "Turmas: " + procurar;
        }

        vetor = {'action': 'rv_mostrar_produtos',
                    'categoria': escolha,
                    'quantidade': -1};
          jQuery('.rv_agenda_procurado h2').html(titulo);


    } else {

        vetor = {'action': 'rv_mostrar_produtos',
                  'quantidade': -1};
        jQuery('.rv_agenda_procurado h2').html("Todas as Turmas");
    }

       jQuery.ajax({
        type: "post",
        dataType: "text",
        url: ajaxurl,
        data: vetor,
        beforeSend: function(){rv_mostrar_loading();},
        success:function(data){rv_carregar_agenda(data); return false},
        error: function(xhr, status, error){
          var err = xhr.responseText;
          alert(error);
        }
  });
 }

 function rv_mostrar_loading(){
     jQuery('.rv_loading').show();
     rv_travar_opcoes();
 }
 function rv_remover_loading(){
   jQuery('.rv_loading').hide();
   rv_liberar_opcoes();
 }

 function rv_travar_opcoes(){
    $(".rv_lista_cursos").prop("disabled", true);
      $(".rv_lista_categorias").prop("disabled", true);
        $(".rv_lista_areas").prop("disabled", true);
 }

 function rv_liberar_opcoes(){
    $(".rv_lista_cursos").prop("disabled", false);
      $(".rv_lista_categorias").prop("disabled", false);
        $(".rv_lista_areas").prop("disabled", false);
 }

 function rv_resetar_opcoes(qual){
   if (qual == "cursos"){
       $('.rv_lista_cursos>option:eq(0)').prop('selected', true);
   } else if (qual == "categorias"){
      $('.rv_lista_categorias>option:eq(0)').prop('selected', true);
   } else if (qual == "areas"){
       $('.rv_lista_areas>option:eq(0)').prop('selected', true);
   }
 }

//Carrega a agenda escolhida
 function rv_carregar_agenda(data){
    //console.log('data',data);

    //Remove a porcaria do 0 no final da data
    data = data.substr(data.length-1, 1) === '0'? data.substr(0, data.length-1) : data;

    rv_remover_loading();
    jQuery('.rv_agenda_resultado').html(data);


 }


 jQuery(document).on('change','.rv_lista_cursos', rv_solicitar_agenda);
 jQuery(document).on('change','.rv_lista_categorias', rv_solicitar_agenda);
 jQuery(document).on('change','.rv_lista_areas', rv_solicitar_agenda);

}); //jQuery
</script>
