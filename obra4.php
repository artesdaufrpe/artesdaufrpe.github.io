<!DOCTYPE html>
<html lang="en">

<?php include "html/head.html" ?>

<body>

<!-- Header geral do site -->
<?php include "html/header.html" ?>

  <!-- Header da obra -->
  <div class="container-banner">
    <header class="site-navbar" role="banner">

      <div class="container">
        <div>
          
          <div id="titulo">
            <h2><a href="index.html" class="text-white"><br>Sesquicentenário dos cursos de Ciências Agrárias da UFRPE</a></h2>
            <br>
          </div>
        </div>
      </div>
    
    </header>
  </div>

  <div class="site-wrap">

      <div class="container">

          <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
              <h4 class="font-size-regular"><a href="#"><br>Fotos</a></h4>
              <p>Foto: Josimar Monteiro</p>
          </div>

      </div>

    <div class="slide-one-item-manual home-slider owl-carousel overlap"> <!-- Carousel begin-->
      
      <div class="site-blocks-cover" style="background-image: url(images/obra4/1_DSC3726.NEF_P.jpg);" data-aos="fade" data-stellar-background-ratio="0.6">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="800">
              <p><a href="images/obra4/1_DSC3726.NEF.jpg" target="_blank" class="btn py-3 px-3 mb-5" 
                  style="margin-right:0%; margin-top:70%; color:rgb(255, 255, 255); opacity: 0.5;">
                  Visualizar imagem ><br/>1 de 2
              </a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover" style="background-image: url(images/obra4/2_DSC3732.NEF_P.jpg);" data-aos="fade" data-stellar-background-ratio="0.6">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="800">
              <p><a href="images/obra4/2_DSC3732.NEF.jpg" target="_blank" class="btn py-3 px-3 mb-5" 
                  style="margin-right:0%; margin-top:70%; color:rgb(255, 255, 255); opacity: 0.5;">
                  Visualizar imagem ><br/>2 de 2
              </a></p>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- Fim Carousel-->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div> <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Ficha Técnica</h3>
                  <p>
                    <b>Título:</b> Sesquicentenário dos cursos de Ciências Agrárias da UFRPE <br>
                    <b>Autor(a):</b> Corbiniano Lins <br>
                    <b>Técnica:</b> Escultura (alto relevo) <br>
                    <b>Materiais:</b> Granito <br>
                    <b>Dimensão:</b> 0,95 (L) x 1,98 (A) <br>
                    <b>Data:</b> 1987 <br>
                    <b>Localização:</b> Praça do SINTUFEPE <br>
                  </p>
              <br>
              </div>
            </div>
          </div>
          <div> <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Sobre o Autor</h3>
                <?php include "html/autores/corbiniano.html" ?>
                <br>
              </div>
            </div>
          </div>
          <div> <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Sobre a Obra</h3>
                <p>
                Possui uma placa indicando: Sesquincentenário dos cursos de Ciências Agrárias da UFRPE.
                </p>
                <br>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
       
    <?php include "html/outras_obras.html" ?>
    <?php include "html/footer.html" ?>

  </div>

  <?php include "html/scripts.html" ?>
   
  </body>
</html>