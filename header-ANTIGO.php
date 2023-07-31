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
 fbq('init', '784312535330844');
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1"
src="https://www.facebook.com/tr?id=784312535330844&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code --
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
	<script src="https://static.landbot.io/landbot-widget/landbot-widget-1.0.0.js"></script>
<script>
  var myLandbot = new LandbotLivechat({
    index: 'https://landbot.io/u/H-220337-FXK1HP26FT05V9FI/index.html',
  });
</script>


<script src="//receiver.posclick.dinamize.com/forms/js/323761_1612.js"></script>
</head>
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
					<div class="rv_barra_fixa_menu col-12 col-md-8">
						<ul>
							<li><img src="<?php echo wp_get_upload_dir()['url']?>/icone-tel.png"/><span><a href="tel:(21) 2275-3131">(21) 2275-3131</a></span></li>
							<li>|</li>
							<li><img src="<?php echo wp_get_upload_dir()['url']?>/icone-zap.png"/><span>	<a target="_blank" href="https://web.whatsapp.com/send?phone=552199694-6777&text=Mensagem">(21) 99694-6777</a></span></li>
							<li>|</li>
							<li><img src="<?php echo wp_get_upload_dir()['url']?>/icone-contato.png"/><span><a href="mailto:comercial@berkeley.com.br">comercial@berkeley.com.br</a></span></li>
						</ul>
					</div>
					<div class="rv_barra_fixa_procurar col-12 col-md-4">
						<ul>
							<li><?php get_search_form(); ?></li>
						</ul>
					</div>
			</div>
		</div>
	</div>
		<div class="container">
				<div class="row">
					<div class="col-12">
					<nav class="navbar navbar-expand-lg navbar-light" role="navigation">
					  <!--<div class="container">-->
						<!-- Brand and toggle get grouped for better mobile display -->
            <!--
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>-->
						<!--<a class="navbar-brand" href="#">Navbar</a>-->
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
										<!-- logo grande com melhor leitura http://localhost/berkeley/wp-content/uploads/2019/03/logo-berkeley-fundo.png
									http://localhost/berkeley/wp-content/uploads/2019/03/Logo-Final.png -->
										<img class="img-fluid" src="<?php echo wp_get_upload_dir()['url']?>/logo-berkeley-sem-slogan.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
								</a>
						</div>
					</nav>
				</div>
				</div>
			</div>
		</section>
  </header>
