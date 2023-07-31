<footer>
    <div class="container">
        <div class="row">
          <div class="rv_rodape_logo col-sm-12 col-md-3">
              <img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/berkeley-educacional-logo-pq-branca.png" />
          </div>
        </div>
        <div class="row">
          <nav class="footer-menu col-12 col-md-8">
              <?php
              wp_nav_menu(
                array(
                  'theme_location' =>  'rodape_menu'
                )
              );
              ?>
          </nav>
            <div class="rv_rodape_newsletter text-right col-12 col-md-4">
              <div id='rv_rodape_newsletter_bloco'>
                  <h4>Assine nossa newsletter</h4>
                  <form id="rodape" class="rv_rodape_newsletter_formulario" method="post">
                    <div class="row">
                      <div class="rv_rodape_newsletter_texto col-12 col-md-10">
                        <div class="row">
                          <div class="rv_rodape_newsletter_nome col-12 col-md-5">
                            <input type="text" class="form-group" name="nome" placeholder="Nome" required>
                          </div>
                          <div class="rv_rodape_newsletter_email col-12 col-md-7">
                            <input type="email" class="" name="email" placeholder="Email" required>
                          </div>
                        </div>
                      </div>
                      <div class="rv_rodape_newsletter_botao col-12 col-md-2">
                        <button type="submit" class="rv_rodape_newsletter_formulario_botao">Enviar</button>
                      </div>
                   </div>
                  </form>
                  <script>

                  var form = document.getElementById("rodape");
                  function handleForm(event) {
                    event.preventDefault();
                    document.getElementById("rv_rodape_newsletter_bloco").innerHTML = "<h4>Assinatura realizada com sucesso!</h4>";
                  }
                  form.addEventListener('submit', handleForm);
                  </script>
                </div>
          </div>
        </div>
        <div class="row">
          <div class="rv_rodape_barra col-12">
            <div class="row">
              <div class="rv_rodape_midias col-12 col-md-3">
                <ul>
                  <li><a href="http://www.facebook.com.br/ctberkeley" target="_blank"><img title="Facebook" src="<?php echo wp_get_upload_dir()['url']?>/icone-facebook.png"/></a></li>
                  <li><a href="http://www.instagram.com.br/ctberkeley" target="_blank"><img title="Instagram" src="<?php echo wp_get_upload_dir()['url']?>/icone-instagram.png"/></a></li>
                  <li><a href="https://www.linkedin.com/company/centro-de-treinamento-berkeley-oficial-" target="_blank"><img title="Linkedin" src="<?php echo wp_get_upload_dir()['url']?>/icone-linkedin.png"/></a></li>
                </ul>
              </div>
              <div class="text-center col-12 col-md-6">
                © 2021 - Berkeley Educacional - Todos os direitos reservados
              </div>
              <div class="rv_desenvolvedor col-12 col-md-3">
                Desenvolvido por <a href="http://rodrigoveiga.com.br">Rodrigo Veiga</a>
              </div>
            </div> <!-- row -->

          </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
