
<section class="rv_pagina_titulo">
  <header>
      <?php
			$categoria =  get_queried_object();
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
      <div class="col-12 col-md-3">
          <img class="img-fluid" src="<?php the_field('pos-graduacao_logos');?>"  />
      </div>
      <div class="rv_posgraduacao_texto col-12 col-md-9">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <div class="rv_categoria_informacao">
  <div class="container">
    <div class="row align-items-center">
      <div class="rv_imagem col-sm-12 col-md-3">
          <img class="img-fluid" src="<?php the_field('categoria_imagem',$category); ?>"/>
      </div>
      <div class="rv_texto col-sm-12 col-md-9">
        <?php the_field('categoria_informacao',$categoria); ?>
      </div>


    </div> <!-- row -->
  </div> <!-- container -->
  </div>
</article>

  <section>
    <div class="rv_categoria_cursos">
        <div class="rv_titulo">
          <h2>Pós-Graduações Internacionais</h2>
        </div>
        <div class="container">
          <div class="row">
            <?php
                rv_mostrar_pos('internacional');
             ?>
          </div>
        </div>
    </div>
  </section>
  <!--Hack temporário para não mostrar "próximas turmas" na categoria ison-->
  <?php //if (($categoria->category_count > 0) && ($categoria->term_id != 28)):?>
  <section class="rv_home_agenda_bloco">
    <div class="container">
      <div class="row">
        <div class="rv_home_agenda col-12">
          <h2>Próximas turmas</h2>
          <?php
            rv_mostrar_agenda_pos();
          ?>
        </div>
      </div>
    </div>
  </section>
<?php //else: ?>
<section class="rv_home_agenda_bloco">
</section>
<?php //endif;?>
