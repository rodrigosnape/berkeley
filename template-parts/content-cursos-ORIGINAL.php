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
<section class="rv_categorias_destaque_bloco">
  <div class="container">
      <h2>Cursos em destaque</h2>
    <div class="row">
      <!--<div class="rv_categorias_destaque col-12">-->

        <?php
          //rv_mostrar_destaque();
          //rv_mostrar_cursos_da_categoria(13);
           rv_mostrar_cursos_destaque();
        ?>
      <!--</div>-->
    </div>
  </div>
</section>
<section class="rv_home_agenda_bloco">
  <div class="container">
    <div class="row">
      <div class="rv_home_agenda col-12">
        <h2>Próximas turmas</h2>
        <?php
          rv_mostrar_turmas();
        ?>
      </div>
    </div>
  </div>
</section>
