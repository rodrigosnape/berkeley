jQuery(function($) {




//var tamanhoLogoFinal = "20%";



  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();



  var menu_tl = new TimelineMax();

  menu_tl
  .to(".rv_barra_topo li a",0.2,{paddingTop:'10px',paddingBottom:'10px'},'-=0.2')
  .to(".rv_header_logo",0.2,{top:'unset'},'-=0.2')
  .to(".rv_header_logo img",0.2,{width:'35%', padding:'0', background:"#fff"},"-=0.2");


/*
  var destaque_tl = new TimelineMax();

  destaque_tl
  .staggerFrom(".rv_destaque_bloco .rv_conteudo",0.3,{autoAlpha:0,y:"+=10", ease:Back.easeOut},0.1);
*/

/*=============
===HomePrimeira
=============*/
  var tempoArco = 0.4;
  var tempoArcoIntervalo = "-=0.4";

  var tempoNome = 0.5;
  var tempoNomeIntervalo = "-=0.4";

  var tempoSlogan = 1;

  var homePrimeira_tl = new TimelineMax();

/*
  homePrimeira_tl
  .from("#arco_topo_superior",tempoArco,{y:"+=25", autoAlpha:0, ease:Power0.easeOut})
  .from("#arco_topo_inferior",tempoArco,{y:"+=20", autoAlpha:0, ease:Power0.easeOut}, tempoArcoIntervalo)
  .from("#arco_lateral_fora",tempoArco,{x:"+=25", autoAlpha:0, ease:Power0.easeOut}, tempoArcoIntervalo)
  .from("#arco_lateral_dentro",tempoArco,{x:"+=20", autoAlpha:0, ease:Power0.easeOut}, tempoArcoIntervalo)
  .from("#arco_baixo_superior",tempoArco,{y:"-=25", autoAlpha:0, ease:Power0.easeOut}, tempoArcoIntervalo)
  .from("#arco_baixo_inferior",tempoArco,{y:"-=20", autoAlpha:0, ease:Power0.easeOut}, tempoArcoIntervalo)
*/
  homePrimeira_tl
  .from("#berkeley_1",tempoNome,{y:"+=40", autoAlpha:0, ease:Power0.easeOut}, '-=0.3')

  .from("#berkeley_2",tempoNome,{y:"-=40", autoAlpha:0, ease:Power0.easeOut},tempoNomeIntervalo)
  .from("#berkeley_3",tempoNome,{y:"+=40", autoAlpha:0, ease:Power0.easeOut},tempoNomeIntervalo)

  .from("#berkeley_4",tempoNome,{y:"-=40", autoAlpha:0, ease:Power0.easeOut},tempoNomeIntervalo)
  .from("#berkeley_5",tempoNome,{y:"+=40", autoAlpha:0, ease:Back.easeOut},tempoNomeIntervalo)
  .from("#berkeley_6",tempoNome,{y:"-=40", autoAlpha:0, ease:Back.easeOut},tempoNomeIntervalo)

  .from("#berkeley_7",tempoNome,{y:"+=40", autoAlpha:0, ease:Back.easeOut},tempoNomeIntervalo)

  .from("#berkeley_8",tempoNome,{y:"-=40", autoAlpha:0, ease:Back.easeOut},tempoNomeIntervalo)

  .from("#educacional",tempoSlogan,{x:"-=200", autoAlpha:0, ease:Power4.easeOut},tempoNomeIntervalo)

  .from(".rv_home_quemsomos_primeiro_direita line",0.5,{autoAlpha:0},"-=1")
  .staggerFrom(".rv_home_quemsomos_primeiro_direita text",0.7,{autoAlpha:0, x:"-=250", ease:Back.easeOut},0.05,"-=0.7");


    var cenaHomePrimeira = new ScrollMagic.Scene({
      triggerElement: '#linha'
    })
    //.addIndicators()
    .setTween(homePrimeira_tl)
    .addTo(controller);

/*============
===HomeSegunda
============*/
  var cenaHomeSegunda = new ScrollMagic.Scene({
      triggerElement: '.rv_home_quemsomos_segundo_esquerda',
  })
  .setClassToggle('.rv_home_quemsomos_segundo_esquerda', 'rv_surgir')
  //.addIndicators()
  .addTo(controller);

/*=============
===HomeTerceira
=============*/

  var homeTerceira_tl = new TimelineMax();
  homeTerceira_tl
  .staggerFrom("#info_numeros rect",0.5,{autoAlpha:0,width:0, ease:Back.easeInOut},0.1)
  .staggerFrom("#info_numeros .numero",0.3,{autoAlpha:0,x:"-=50px", ease:Back.easeOut},0.1,"-=0.2")
  .staggerFrom("#info_numeros .texto",0.4,{autoAlpha:0,x:"+=50px", ease:Power4.easeOut},0.1,"-=0.2")
  .to(".rv_home_quemsomos_terceiro_direita h2",0.2,{autoAlpha:1, y:0, ease:Power0.easeNone},"-=0.5")
  .to(".rv_home_quemsomos_terceiro_direita p",0.3,{autoAlpha:1, y:0, ease:Power0.easeNone},"-=0.3")
  .to(".rv_home_quemsomos_terceiro_direita",0.2,{backgroundColor:"rgba(255, 255, 255, 0.5)"},"+=1");

  var cenaHomeTerceira = new ScrollMagic.Scene({
      triggerElement: '#info_numeros .barra_1',
  })
  //.addIndicators()
  .setTween(homeTerceira_tl)
  .addTo(controller);

/*===========
===HomeQuarta
===========*/

  var homeQuarta_tl = new TimelineMax();
  homeQuarta_tl
  .to(".rv_home_quemsomos_quarto_retangulo",1,{width:'50%', ease:Power4.easeOut})
  .from(".rv_home_quemsomos_quarto_retangulo h2",0.3,{autoAlpha:0, x:'-50', ease:Back.easeOut},'-=0.5')
  .from(".rv_home_quemsomos_quarto_retangulo h3",0.3,{autoAlpha:0, x:'-50', ease:Back.easeOut},'-=0.1')
  .from(".rv_home_quemsomos_quarto_retangulo p",0.3,{autoAlpha:0, x:'-50', ease:Back.easeOut},'-=0.1')
  .from(".rv_home_quemsomos_quarto_retangulo button",0.3,{autoAlpha:0, x:'-50', ease:Back.easeOut},'-=0.1')

  var cenaHomeQuarta = new ScrollMagic.Scene({
      triggerElement: ".rv_home_quemsomos_quarto",
  })
  .setTween(homeQuarta_tl)
  .addTo(controller);

/*=============
===cenaHomeMenu
=============*/

  var cenaHomeMenu = new ScrollMagic.Scene({
    triggerHook: 0,
    triggerElement: "main"
  })
  //.addIndicators()
  .setTween(menu_tl)
  .addTo(controller);

/*=================
===cenaHomeDestaque
=================*/
/*
  var cenaHomeDestaque = new ScrollMagic.Scene({
    triggerElement: ".rv_home_destaque_bloco"
  })
  .setTween(destaque_tl)
  .addTo(controller);
*/


/*========
=Categorias
=========*/

  var categoriasImagem_tl = new TimelineMax();

  categoriasImagem_tl
  .staggerFrom(".rv_categorias_bloco .rv_conteudo",0.4,{y:"+=10",autoAlpha:0, ease:Back.easeOut},0.1);

  var cenaCategoriasImagem = new ScrollMagic.Scene({
    triggerElement: "article"
  })
  //.addIndicators()
  .setTween(categoriasImagem_tl)
  .addTo(controller);

/*==============
===Configurações
==============*/

//Pegar mudança do tamanho da tela

var tamanhoTela = 975;

if (jQuery(window).width() < tamanhoTela) {
    configuracaoCelular();
}

  jQuery(window).resize(function () {
  if (jQuery(window).width() < tamanhoTela ) {
    configuracaoCelular();
  } else {
    configuracaoPadrao();
  }
});


function configuracaoCelular(){
  console.log('remover',jQuery(window).width());
    cenaHomeMenu.remove();


    //menu_tl.clear();

    $('.navbar.navbar-expand-lg.navbar-light').css({
        'padding':'.5rem 1rem'
    });

    $(".rv_header_logo").css({
      'top': '7px'
  });

    $(".rv_header_logo img").css({
      'width': '30%',
      'padding': '10px',
      //'border': "1px solid #155160",
      //'background': "#fff"
  });

    $('.rv_barra_topo').css('paddingBottom','10px');

}

function configuracaoPadrao(){

   console.log('adicionar',jQuery(window).width());

    cenaHomeMenu
    .setTween(menu_tl)
    .addTo(controller);

    $('.navbar.navbar-expand-lg.navbar-light').css({
        'padding':'0'
    });

    $(".rv_header_logo img").css({
      'width': '50%',
      'padding': '0',
      'border': "none",
      'background': "transparent"
  });


    $('.rv_barra_topo').css('paddingTop','0');
    $('.rv_barra_topo').css('paddingBottom','0');
    $('.rv_header_logo').css('top','9.5px');
}


/*===========
===Flexslider
===========*/

var $window = $(window),
    $flexsliderParceiros,
    flexsliderSobre,
    flexsliderCarousel;

// tiny helper function to add breakpoints
function getGridSize() {
  if (window.innerWidth <= 768){
    return 1
  } else if (window.innerWidth > 768 && window.innerWidth < 1000){
    return 3;
  } else {
    return 5;
  }
}

//Checa se existe o sobre_galeria na página
$window.load(function() {

    if (jQuery('.flexslider-carousel').length){

              flexsliderCarousel = $('.flexslider-carousel').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 100,
                itemHeight: 68,
                itemMargin: 5,
                nextText: '',
                prevText: '',
                directionNav: true,
                minItems: 3,
                maxItems: 5,
                controlNav: false,

                asNavFor: '.flexslider-sobre',
              });


              flexsliderSobre = $('.flexslider-sobre').flexslider({
                animation: "slide",
                animationLoop: false,
                nextText: '',
                prevText: '',
                directionNav: true,
                controlNav: false,

                sync: '.flexslider-carousel',
              });
      }
});

$window.load(function() {
  // Carousel Homepage
  if (jQuery('.flexslider-carousel').length){
        $flexsliderParceiros = $('.flexslider-parceiros').flexslider({
          animation: "slide",
          animationLoop: true,
          itemWidth: 183,
          itemMargin: 0,
          nextText: '',
          prevText: '',
          directionNav: true,
          minItems: getGridSize(),
          maxItems: getGridSize(),
          move:1,
          controlNav: false,
          slideshowSpeed:5000
        });
  }
});

if(!!$('.flexslider-parceiros').length) {
  // check grid size on resize event
  console.log( 'opaaaaaaa');
  $window.resize(function() {

    var gridSize = getGridSize();
    $flexsliderParceiros.data('flexslider').vars.minItems = gridSize;
    $flexsliderParceiros.data('flexslider').vars.maxItems = gridSize;
  });
}

if(!!$('.flexslider-sobre').length) {
  console.log( 'opaaaaaaa2');
  $window.resize(function() {

    var gridSize = getGridSize();
    flexsliderCarousel.data('flexslider').vars.minItems = gridSize;
    flexsliderCarousel.data('flexslider').vars.maxItems = gridSize;
  });
}





}); //Fim do JQuery
