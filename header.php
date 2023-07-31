<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window,document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '520337902649847');
  fbq('track', 'PageView');
  </script>
  <noscript>
  <img height="1" width="1"
  src="https://www.facebook.com/tr?id=520337902649847&ev=PageView
  &noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->

	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TZDFQ54');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101601194-1"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-101601194-1');
</script>


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Berkeley</title>
	<?php wp_head(); ?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dce868cd96992700fc79718/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script src="//receiver.posclick.dinamize.com/forms/js/327181_2251.js"></script>
</head>
<script src="//rum-static.pingdom.net/pa-5e9dae48229e9300080009a0.js" async></script>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZDFQ54"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header>
		<?php
			// Fix menu overlap
			//if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>';
		?>

		<section class="rv_barra_topo fixed-top">

	<div class="rv_barra_fixa">
		<div class="container">
			<div class="row">
					<div class="rv_barra_fixa_menu col-12 col-md-7">
						<ul>
							<li><img src="<?php echo wp_get_upload_dir()['url']?>/icone-tel.png"/><span><a href="tel:(21) 3518-1631">(21) 3518-1631</a></span></li>
							<li>|</li>
							<li><img src="<?php echo wp_get_upload_dir()['url']?>/icone-zap.png"/><span>	<a target="_blank" href="https://web.whatsapp.com/send?phone=552199694-6777&text=Mensagem">(21) 99694-6777</a></span></li>
							<li>|</li>
							<li><img src="<?php echo wp_get_upload_dir()['url']?>/icone-contato.png"/><span><a href="mailto:contato@berkeley.com.br">contato@berkeley.com.br</a></span></li>
						</ul>
					</div>
					<div class="rv_barra_fixa_procurar col-12 col-md-5">
						<ul>
							<li><?php get_search_form(); ?></li>
              <li><a href="<?php echo get_site_url(null,'/minha-conta');?>">
                <?php echo is_user_logged_in() ? "Minha Conta" : "Login"; ?>
              </a></li>
              <li>|</li>
              <li class="rv_carrinho"><a href="<?php echo get_site_url(null,'/carrinho');?>"><img src="<?php echo wp_get_upload_dir()['url']?>/icone-carrinho.png"/>
                <?php
                  $quant_carrinho = WC()->cart->get_cart_contents_count();
                  echo $quant_carrinho > 0 ? "<span class='rv_carrinho_numero'>".$quant_carrinho. "</span>" : "";
                ?>
              </a></li>
						</ul>
					</div>
			</div>
		</div>
	</div>
		<div class="container">
				<div class="row">
					<div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light" role="navigation">
							<?php
							wp_nav_menu( array(
								'theme_location'    => 'main_menu',
								'depth'             => 3,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							) );
							?>
						<!--</div>-->
						<div class="rv_header_logo navbar-brand navbar-nav ml-auto">
								<a href="<?php echo esc_url( home_url( '/' )); ?>">
										<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/berkeley-educacional-logo-pq.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
								</a>
						</div>
					</nav>
				</div>
				</div>
			</div>
		</section>
  </header>
