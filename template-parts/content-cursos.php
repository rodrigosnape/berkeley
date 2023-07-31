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
    <div class="row">
      <div class="rv_categorias_content_bloco col-12">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <div class="rv_categorias_bloco">
  <div class="container">
    <div class="row">
      <div class="rv_titulo col-12">
        <h2>Escolha a linha de cursos</h2>
      </div>
      <?php
        rv_mostrar_categoria_bloco('aha');

        rv_mostrar_categoria_bloco('trauma');

        rv_mostrar_categoria_bloco('beready');

        rv_mostrar_categoria_bloco('berkeley');
      ?>


    </div> <!-- row -->
  </div> <!-- container -->
</div>

</article>
<!--
<section class="rv_categorias_destaque_bloco">
  <div class="container">
      <h2>Cursos em destaque</h2>
    <div class="row">
            <?php  //rv_mostrar_cursos_destaque(); ?>
    </div>
  </div>
</section>-->
<!--<section class="rv_home_agenda_bloco">
  <div class="container">
    <div class="row">
      <div class="rv_home_agenda col-12">
        <h2>Próximas turmas</h2>
        <?php
          //rv_mostrar_turmas();
        ?>
      </div>
    </div>
  </div>
</section>-->

<section>
  <div class="rv_categoria_cursos">
      <div class="rv_titulo">
        <h2>Cursos</h2>
      </div>
      <div class="container">
      <div class="row">
          <div class="col-12 col-md-2">
          </div>
          <div class="col-12 col-md-4">
            <?php rv_listar_categorias(); ?>
          </div>
          <div class="col-12 col-md-4">
           <?php rv_listar_categorias_areas(); ?>
          </div>
          <div class="col-12 col-md-2">
          </div>
          <div class="rv_cursos_container col-12">
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

            <div class="rv_cursos_resultado row">
            </div>

          </div>

    </div>

  </div>





  </div>
</section>


<script type="text/javascript">


console.log('0');

jQuery('document').ready(function()
{
  $ = jQuery;

  //Variável em Javascript que representa o ID da categoria da Página
  //
  //var categoria = variavel.term_id;



  rv_solicitar_cursos('todos');

  function rv_solicitar_cursos(evento){
    var escolha = [];
    var vetor;

    //escolha.push(categoria);
//console.log("evento é do tipo: ", typeof evento);

  //console.log('eventooooooooooooo',evento)

     if (evento == 'todos'){
      escolha = 'todos';
      console.log('escolha',escolha);
    } else if (typeof evento === 'object'){
        if (jQuery(this).val() != ''){
              escolha.push(jQuery(this).val());
              console.log('escolha',escolha);
        }
      //console.log('é string');
    }

    if(jQuery(this).hasClass('rv_lista_categorias')){
        rv_resetar_opcoes('areas');
    } else if(jQuery(this).hasClass('rv_lista_areas')){
        rv_resetar_opcoes('categorias');
    }

//console.log(escolha, evento);

//console.log('rv_solicitar_cursos()', categoria);

    vetor = {'action': 'rv_mostrar_cursos_da_categoria',
              'categoria': escolha,
              'quantidade': -1};


    jQuery.ajax({
         type: "post",
         dataType: "text",
         url: ajaxurl,
         data: vetor,
         beforeSend: function(){rv_mostrar_loading();},
         success:function(data){rv_carregar_cursos(data); return false},
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

      $(".rv_lista_categorias").prop("disabled", true);
        $(".rv_lista_areas").prop("disabled", true);

    }

    function rv_liberar_opcoes(){
         $(".rv_lista_categorias").prop("disabled", false);
         $(".rv_lista_areas").prop("disabled", false);
    }

    function rv_resetar_opcoes(qual){
      if (qual == "categorias"){
         $('.rv_lista_categorias>option:eq(0)').prop('selected', true);
      } else if (qual == "areas"){
          $('.rv_lista_areas>option:eq(0)').prop('selected', true);
      }
    }


    function rv_carregar_cursos(data){
//console.log('rv_carregar_cursos()', data);
      //Remove a porcaria do 0 no final da data

      //console.log('dataa1',data.length);



      data = data.substr(data.length-1, 1) === '0'? data.substr(0, data.length-1) : data;

      //console.log('dataa2',data.length);
      //alert(data.length);

      if (data.length <= 10){
        data = "<div class='col-12' style='margin-top:30px;text-align:center;'>";
        data += "<h3>Não existe curso desta área</h3>";
        data += "</div>";
      }



      rv_remover_loading();
      jQuery('.rv_cursos_resultado').html(data);

    }

    jQuery(document).on('change','.rv_lista_categorias', rv_solicitar_cursos);
    jQuery(document).on('change','.rv_lista_areas', rv_solicitar_cursos);

}); //jQuery

</script>
