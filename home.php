<?php


session_start();

// Se o id do usuario não está na session, ele não vai estar logado
if(!isset($_SESSION['id'])){
    header("location: src/pages/login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Miauchei - Site Oficial</title>
  <meta name="description" content="Plataforma para pets!">
        <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">  
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="src/styles/home/styles.css">
    <link rel="stylesheet" href="src/styles/components/header/styles.css">
  <script src="src/js/main.js" defer></script>

  <link rel="stylesheet" href="https://app.boteria.com.br/cdn/webchat/webchat.v2.css" />
  <script src="https://app.boteria.com.br/cdn/libs/showdown.min.js"></script>
  <script src="https://app.boteria.com.br/cdn/libs/axios.js"></script>
  <script src="https://app.boteria.com.br/cdn/libs/socket.io.js"></script>
  <script src="https://app.boteria.com.br/cdn/webchat/webchat.js"></script>
</head>

<body id="body">
<!--<===============MENU/CABEÇALHO==================>-->
<header>
  <div class="header-content">
    <nav>
      <a href="#" id="logo"><img src="src/images/iconsMiauchei/miauchei.svg" alt="Logo Miauchei"></a>
      <button id="btn-mobile"><img src="src/images/svg/menubar.svg" alt=""></button>
      <ul id="menu-header">
        <li><a href="#">Início</a></li>
        <li><a href="src/pages/animais_perdidos.php">Animais Perdidos</a></li>
        <li><a href="src/pages/animais_adocao.php">Adoção</a></li>
        <li><a href="sobre_nos.php">Sobre nós</a></li>
      </ul>
    </nav>
  

      <div class="action">
        <div class="profile">
            <img src="<?php echo "./src/images/testimodial/img/imagens_usuarios/".$_SESSION['image'];  ?>" alt="Adicionar Foto" width="50" height="50">
        </div>

        <div class="menu">
          <h3><?php  echo "Olá, ".$_SESSION['username'];
        ?></h3>
          <ul>
            <li><a href="src/pages/profile.php">Meu Perfil<img src="src/images/svg/nameInput.svg" alt=""></a></li>  
            <li><a href="src/pages/update_profile.php">Editar Perfil <img src="src/images/svg/gear-solid.svg" alt=""></a></li>
            <li><a href="src/pages/guard_posts_animais_perdidos.php">Posts Salvos Perdidos <img src="src/images/svg/star-regular.svg" alt=""></a></li>
            <li><a href="src/pages/guard_posts_animais_adocao.php">Posts Salvos Adoção <img src="src/images/svg/star-regular.svg" alt=""></a></li>
            <li><a href="src/pages/search_pesquisa.php">Pesquisar usuarios <img src="src/images/svg/lupa.svg" alt=""></a></li>
            <li><a href="">Ajuda <img src="src/images/svg/circle-question-regular.svg" alt=""></a></li>
            <li><a href="src/pages/logout.php">Sair <img src="src/images/svg/right-from-bracket-solid.svg" alt=""></a></li>
          </ul>
        </div>

      </div>
  </div>
</header>
  <!--<======================================================>-->
  
  <main>
    <section class="home">

      <!----Text------>
      <section class="content_home">
      <section class="text_home">
        <h2 id="sub_home"><div>👋</div> <span>Seja Bem-vindo!</span></h2>
        <h1 id="title_home">Miauchei, encontre seu melhor amigo!</h1>
      </section>  
        
        <section class="img_home">    
        <svg width="300%" viewBox="0 0 767 623" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <path d="M80.0239 424.099C33.2754 333.698 55.6333 222.954 133.792 157.771L508.867 -155.035C598.521 -229.805 731.264 -220.245 809.28 -133.4L881.369 -53.1513C968.37 43.6971 951.106 194.822 844.503 269.553L428.049 561.495C320.471 636.91 171.082 600.184 110.734 483.485L80.0239 424.099Z" fill="#98C7DE"/>
          <path d="M586.242 534.046L586.25 534.033L586.257 534.02C587.314 531.98 588.986 530 590.885 528.791C592.779 527.584 594.846 527.171 596.774 528.132C599.307 529.394 600.456 532.293 600.592 535.661C600.727 539.016 599.847 542.711 598.47 545.367C597.413 547.407 595.741 549.387 593.842 550.596C591.948 551.803 589.882 552.216 587.953 551.255C585.201 549.883 583.956 546.921 583.821 543.569C583.686 540.222 584.667 536.59 586.242 534.046ZM618.872 550.799C617.605 553.243 615.136 556.014 612.318 557.833C609.488 559.659 606.423 560.459 603.889 559.196C601.96 558.235 601.083 556.355 600.96 554.143C600.838 551.927 601.483 549.436 602.541 547.396C603.808 544.952 606.277 542.182 609.095 540.363C611.924 538.536 614.99 537.736 617.524 538.999C619.452 539.96 620.33 541.84 620.453 544.052C620.575 546.269 619.929 548.759 618.872 550.799ZM605.382 571.436C606.754 568.789 609.323 566.073 612.213 564.358C615.113 562.639 618.237 561.979 620.784 563.248C622.31 564.008 623.131 565.489 623.333 567.278C623.535 569.071 623.105 571.136 622.16 572.958C620.788 575.605 618.219 578.321 615.329 580.035C612.429 581.755 609.305 582.415 606.758 581.145C605.013 580.276 604.203 578.79 604.053 577.048C603.901 575.288 604.429 573.273 605.382 571.436ZM575.076 540.47C577.409 541.632 578.711 544.49 579.056 547.84C579.399 551.172 578.776 554.856 577.408 557.496C576.456 559.332 575.107 560.938 573.568 561.856C572.044 562.764 570.341 562.998 568.597 562.128C566.264 560.966 564.962 558.108 564.617 554.758C564.273 551.426 564.896 547.742 566.265 545.102C567.217 543.266 568.566 541.66 570.105 540.742C571.629 539.834 573.331 539.6 575.076 540.47ZM560.563 576.46C562.884 571.982 568.54 567.798 574.707 565.253C577.782 563.985 580.959 563.134 583.877 562.857C586.8 562.58 589.43 562.881 591.435 563.88C593.439 564.879 595.237 566.784 596.732 569.263C598.223 571.737 599.396 574.756 600.163 577.939C601.701 584.324 601.587 591.269 599.265 595.748C598.134 597.929 596.61 598.727 594.994 598.823C593.333 598.921 591.521 598.281 589.861 597.454C587.636 596.345 586.02 594.525 584.403 592.663C584.357 592.611 584.312 592.558 584.266 592.506C582.713 590.716 581.133 588.896 579.014 587.84C576.689 586.681 574.152 586.451 571.649 586.224C571.583 586.218 571.517 586.212 571.452 586.206C568.862 585.971 566.301 585.713 563.861 584.497C562.219 583.679 560.895 582.63 560.23 581.327C559.578 580.048 559.527 578.459 560.563 576.46Z" fill="#98C7DE" stroke="#FDE9E7" stroke-width="0.8"/>
          <path d="M43.7184 56.893L43.7138 56.8781L43.7081 56.8636C42.6788 54.247 42.2188 51.1246 42.6738 48.4221C43.1278 45.7257 44.4782 43.499 47.0299 42.5341C50.3736 41.2696 54.078 42.6232 57.3475 45.2456C60.6072 47.8602 63.3355 51.6642 64.6757 55.0711C65.705 57.6877 66.165 60.8101 65.71 63.5126C65.256 66.209 63.9056 68.4357 61.3539 69.4007C57.7274 70.7721 53.8842 69.4556 50.6277 66.8436C47.3737 64.2336 44.7873 60.388 43.7184 56.893ZM86.7576 41.1974C87.9911 44.3333 88.524 48.8133 87.8731 52.8323C87.2204 56.8628 85.4028 60.3062 82.058 61.5711C79.5063 62.536 76.9807 61.7751 74.7976 60.076C72.6096 58.373 70.812 55.7564 69.7827 53.1398C68.5492 50.004 68.0163 45.524 68.6672 41.505C69.3199 37.4745 71.1375 34.0311 74.4823 32.7662C77.034 31.8012 79.5597 32.5622 81.7427 34.2613C83.9308 35.9643 85.7283 38.5809 86.7576 41.1974ZM94.6194 70.1357C93.2832 66.7387 92.8848 62.2129 93.6947 58.2126C94.5063 54.2041 96.5054 50.826 99.8638 49.556C101.888 48.7906 103.991 49.2723 105.848 50.557C107.708 51.8447 109.288 53.9226 110.209 56.2625C111.545 59.6594 111.943 64.1852 111.134 68.1855C110.322 72.194 108.323 75.5721 104.964 76.8421C102.658 77.7142 100.558 77.2208 98.7849 75.9245C96.9971 74.6173 95.5461 72.4913 94.6194 70.1357ZM40.4757 72.0145C43.5572 70.8492 47.351 72.0294 50.7762 74.4481C54.1882 76.8575 57.1232 80.4228 58.4562 83.8113C59.3829 86.167 59.7636 88.6977 59.3341 90.8434C58.9081 92.9712 57.6895 94.7198 55.3835 95.5919C52.302 96.7572 48.5083 95.5769 45.083 93.1582C41.671 90.7488 38.736 87.1836 37.403 83.7951C36.4764 81.4394 36.0956 78.9087 36.5251 76.763C36.9511 74.6352 38.1697 72.8865 40.4757 72.0145ZM61.9593 114.398C59.6985 108.651 60.5074 100.158 63.2732 92.55C64.6526 88.7559 66.5104 85.2069 68.6907 82.3569C70.874 79.5031 73.3613 77.375 75.9915 76.3803C78.6217 75.3857 81.9224 75.325 85.4946 76.0023C89.0621 76.6787 92.8693 78.0853 96.49 79.9886C103.75 83.8049 110.166 89.5659 112.426 95.313C112.984 96.7297 113.122 97.9443 112.971 98.9907C112.819 100.036 112.374 100.939 111.724 101.727C110.415 103.316 108.286 104.429 106.124 105.247C103.21 106.348 100.142 106.316 97.057 106.252C96.9727 106.25 96.8884 106.248 96.8041 106.246C93.8305 106.184 90.8306 106.121 88.0971 107.154C85.0951 108.289 82.7778 110.366 80.4759 112.428C80.4173 112.481 80.3586 112.534 80.3 112.586C77.9233 114.715 75.5336 116.815 72.3432 118.021C70.1992 118.832 68.0916 119.174 66.2898 118.703C64.5166 118.239 62.9708 116.969 61.9593 114.398Z" fill="#98C7DE" stroke="#E1F5FC" stroke-width="0.8"/>
          <mask id="mask0_311_20" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="28" y="-55" width="646" height="725">
          <path d="M530.5 485.5C530.5 485.5 356.5 649.234 240.5 587.5C124.5 525.766 54.6 670.2 49 669C43.4 667.8 22.2386 274.5 30.0719 121.5L288.572 -55L607.572 -9L673.572 285L530.5 485.5Z" fill="#D9D9D9"/>
          </mask>
          <g mask="url(#mask0_311_20)">
          <rect x="47" y="33" width="471" height="590" fill="url(#pattern0)"/>
          </g>
          <defs>
          <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
          <use xlink:href="#image0_311_20" transform="translate(0 -0.00226695) scale(0.000925926 0.000739171)"/>
          </pattern>
          </defs>
        </svg>
        </section>
      </section>
    </section>


<!--<============================DESTAQUE=====================================>-->
<section class="highlights">
  <h2>Em Destaques</h2>

  <section class="pets-cards">

    <section class="pet-card">
      <section class="image-card">
        <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Pet em destaque 1">
        
       <div class="tags"><span class="pet-tag">Cachorro</span> <span class="situacao-tag">Perdido</span> <span class="data-tag">01/11/2022</span></div>
        <div class="desc-pet">
          <h1>
            Dolg
          </h1>
          <p class="endereco-pet">
            Rua 1 Bairro Jundiai - Santa Isabel, SP
          </p>
          <p class="desc-detalhada-pet">
            Meu pet sumiu perto da praça da bandeira, foi visto pela ultima vez na praça da sé
          </p>
          <button>Ver detalhes...</button>
        </div>
        </section>
    </section>      
    
    <section class="pet-card">
      <section class="image-card">
        <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1443&q=80" alt="Pet em destaque 1">
        
       <div class="tags"><span class="pet-tag">Gato</span> <span class="situacao-tag">Perdido</span> <span class="data-tag">28/10/2022</span></div>
        <div class="desc-pet">
          <h1>
            Dolg
          </h1>
          <p class="endereco-pet">
            Rua 1 Bairro Jundiai - Santa Isabel, SP
          </p>
          <p class="desc-detalhada-pet">
            Meu pet sumiu perto da praça da bandeira, foi visto pela ultima vez na praça da sé
          </p>
          <button>Ver detalhes...</button>
        </div>
        </section>
    </section>  
    
    <section class="pet-card">
      <section class="image-card">
        <img src="https://media.istockphoto.com/photos/funny-british-shorthair-cat-portrait-looking-shocked-or-surprised-picture-id1361394182?b=1&k=20&m=1361394182&s=170667a&w=0&h=cW_NDV-D-jrWBVcEPclIU9vRipFQZQC0armvGMN7w-c=" alt="Pet em destaque 1">
        
       <div class="tags"><span class="pet-tag">Gato</span> <span class="situacao-tag">Perdido</span> <span class="data-tag">21/10/2022</span></div>
        <div class="desc-pet">
          <h1>
            Dolg
          </h1>
          <p class="endereco-pet">
            Rua 1 Bairro Jundiai - Santa Isabel, SP
          </p>
          <p class="desc-detalhada-pet">
            Meu pet sumiu perto da praça da bandeira, foi visto pela ultima vez na praça da sé
          </p>
          <button>Ver detalhes...</button>
        </div>
        </section>
    </section>  

      </section>
</section>
<!--<=====================ANÚNCIOS===========================>-->

<section class="anuncio">
<img src="src/images/testimodial/img/Anuncios/anuncio1.png" class="img_anuncio">
</section>
<section class="anuncio">
<img src="src/images/testimodial/img/Anuncios/anuncio2.png" class="img_anuncio">
</section>
<section class="anuncio">
<img src="src/images/testimodial/img/Anuncios/anuncio3.png" class="img_anuncio">
</section>

<script>
var visitas = parseInt(localStorage.numeroVisitas, 10) || 0;
localStorage.numeroVisitas = visitas == 2 ? 0 : visitas +1 ;

var banners = document.querySelectorAll('.anuncio');
[].forEach.call(banners, function (bn, i) {
bn.classList[i == visitas ? 'add' : 'remove']('mostrar');
});

</script>
<!--<========================================================>-->
<!--<=================FAÇA A DIFERENÇA=======================>-->
<section class="donate">
<img src="src/styles/home/fundo.png" id="fundo">
  <section class="content">
    <img src="src/images/iconsMiauchei/IMG_20220516_082859_009-removebg-preview 1.png" alt="Icone Miauchei">
    <h2>Perdeu seu pet?</h2>
    <a id="anuncie_btn" href="src/pages/animais_perdidos.php">Anuncie</a>
  </section>
</section>
<!--<========================================================>-->

<!--<===================AVALIAÇÕES===========================>-->

<section>
  <section class="container">
      <section class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
          <h2>Avaliações do nosso site</h2>
      </section>
      <section class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">  
        
      <!--=====================-->

        <section class="testimonial-item rounded p-4">
          <img src="https://raw.githubusercontent.com/viniciusamc/miauchei/main/img/testimonial-1.jpg" alt="Foto Usuário opinião">
        <section class="testimonial-text">
          <section>
            <h6>Laura Silva</h6>
            <small>Veterinária</small>
          </section>    
          <p>“Um ótimo site, super recomendo!”</p>
        </section >
        </section>

        <!--=====================-->

          <section class="testimonial-item rounded p-4">
            <img src="./src/images/testimodial/img/testimonial-2.jpg" alt="Foto Usuário opinião">  
            <section class="testimonial-text">
            <section>
              <h6>Guilherme Souza</h6>
              <small>Vendedor</small>
            </section>
            <p>"Muito bom encontrar uma plataforma tão completa, que ajuda os animais"</p>
          </section>
          </section>

        <!--=====================-->

          <section class="testimonial-item rounded p-4">
            <img src="./src/images/testimodial/img/testimonial-3.jpg" alt="Foto Usuário opinião">
            <section class="testimonial-text">
            <section>
                <h6>Bruno Maia</h6>
                <small>Personal</small>
              </section>
            <p>“Adotei a o meu gato por aqui!”</p>
          </section>
          </section>
        <!--=====================-->
       
          <section class="testimonial-item rounded p-4">
            <img src="./src/images/testimodial/img/testimonial-4.jpg" alt="Foto Usuário opinião">  
            <section class="testimonial-text">
            <section>
              <h6>Ana Clara</h6>
              <small>Professora</small>
            </section>
            <p> “Graças ao MiAuchei meu dog foi encontrado!”</p>
          </section>
          </section>
      </section>
  </section>
</section>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>


<script>
(function ($) {
  "use strict";


  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
      autoplay: true,
      smartSpeed: 1000,
      center: true,
      dots: false,
      loop: true,
      nav : true,
      navText : [
          '<i class="bi bi-chevron-left"></i>',
          '<i class="bi bi-chevron-right"></i>'
      ],
      responsive: {
          0:{
              items:1
          },
          576:{
              items:1
          },
          768:{
              items:2
          },
          992:{
              items:3
          }
      }
  });


  // Client carousel
  $(".client-carousel").owlCarousel({
      autoplay: true,
      smartSpeed: 1000,
      margin: 90,
      dots: false,
      loop: true,
      nav : false,
      responsive: {
          0:{
              items:2
          },
          576:{
              items:3
          },
          768:{
              items:4
          },
          992:{
              items:5
          },
          1200:{
              items:6
          }
      }
  });
  
})(jQuery);
</script>
<!--<========================================================>-->
<!--<===============DETALHES/INFORMAÇÕES=====================>-->

<div class="header-wave">

<div>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
<defs>
<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
</defs>
<g class="parallax">
<use xlink:href="#gentle-wave" x="48" y="0" fill="#FFD962" />
<use xlink:href="#gentle-wave" x="48" y="3" fill="#A06442" />
<use xlink:href="#gentle-wave" x="48" y="7" fill="#024060" />
</g>
</svg>

<section class="details-waves">

<div class="waves-card">
<img src="src/images/1x/card1.png" alt="">

<div class="waves-card-text">
  <h1>Incentivamos</h1>
  <p>Incentivamos a adoção, o cuidado, a castração e o não abandono </p>
</div>
</div>

<div class="waves-card">
<img src="src/images/1x/card2.png" alt="">

<div class="waves-card-text">
  <h1>Anunciamos</h1>
  <p>Anunciamos seu pet perdido. </p>
</div>
</div>

<div class="waves-card">
<img src="src/images/1x/card3.png" alt="">

<div class="waves-card-text">
  <h1>Achamos um lar</h1>
  <p>Os animais encontrados, agora podem ter um lar.</p>
</div>
</div>

</section>
</div>
<!--Waves end-->
</div>

<section>
  <script>
    window.renderBotWidget(
      '6377f2426b0aa9001987fa85'
    );
  </script>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<footer>
  <!--Ionicons-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<ul class="icons">
    <li><a href="https://www.tiktok.com/@miauchei?_t=8WpJ6jITVvZ&_r=1"><ion-icon name="logo-tiktok"></ion-icon></a></li>
    <li><a href="https://www.facebook.com/people/miauchei_/100085605950822/"><ion-icon name="logo-facebook"></ion-icon></a></li>
    <li><a href="https://www.instagram.com/miauchei_/"><ion-icon name="logo-instagram"></ion-icon></a></li>
</ul>
<ul class="menu1">
  <br>
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Parceiros</a></li>
        <li><a href="#">Contate-nos</a></li>
</ul>
    <section class="footer-copyright">
        <p>Copyright @ 2022 All Rights Reserved to MiAuchei.</p>
    </section>
</footer>
</body>
</html>