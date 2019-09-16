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
            <h2><a href="index.html" class="text-white" style="text-shadow: 2px 2px 4px #000000;"><br>Sem Título</a></h2>
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
              <p>Foto cedida pelo prof. Tadeu</p>
          </div>

      </div>

    <div class="slide-one-item-manual home-slider owl-carousel overlap"> <!-- Carousel begin-->
      
      <div class="site-blocks-cover overlay" style="background-image: url(images/obra1/DSC3809_P.jpg);" data-aos="fade" data-stellar-background-ratio="0.6">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="800">
              <p><a href="images/obra1/DSC3809.JPG" target="_blank" class="btn py-3 px-3 mb-5" 
                  style="margin-right:0%; margin-top:70%; color:rgb(255, 255, 255); opacity: 0.5;">
                  Visualizar imagem ><br/>1 de 3
              </a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(images/obra1/DSC3800_P.jpg);" data-aos="fade" data-stellar-background-ratio="0.6">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="800">
              <p><a href="images/obra1/DSC3800.jpg" target="_blank" class="btn py-3 px-3 mb-5" 
                  style="margin-right:0%; margin-top:70%; color:rgb(255, 255, 255); opacity: 0.5;">
                  Visualizar imagem ><br/>2 de 3
              </a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(images/obra1/DSC3829_P.jpg);" data-aos="fade" data-stellar-background-ratio="0.6">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="800">
              <p><a href="images/obra1/DSC3829.jpg" target="_blank" class="btn py-3 px-3 mb-5" 
                  style="margin-right:0%; margin-top:70%; color:rgb(255, 255, 255); opacity: 0.5;">
                  Visualizar imagem ><br/>3 de 3
              </a></p>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- Fim Carousel-->

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch">
          <div>
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Ficha Técnica</h3>
                  <p>
                    <b>Título:</b> Sem Título <br>
                    <b>Autor(a):</b> Christina Machado <br>
                    <b>Técnica:</b> Mista <br>
                    <b>Materiais:</b> cerâmica e pigmentos <br>
                    <b>Dimensão:</b> 25,60m (largura) x 2,4m (altura) <br>
                    <b>Data:</b> 1999 <br>
                    <b>Localização:</b> subsolo do prédio CEGOE <br>
                  </p>
                <br>
              </div>
            </div>
          </div>
          <div>
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Sobre o Autor</h3>
                <p>...</p>
                <br>
              </div>
            </div>
          </div>
          <div>
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Sobre a Obra</h3>
                <p>...</p>
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