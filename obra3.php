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
            <h2><a href="index.html" class="text-white"><br>Busto do Prof. Francisco de Oliveira Magalhães</a></h2>
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
      
      <div class="site-blocks-cover" style="background-image: url(images/obra3/obra3_p.jpg);" data-aos="fade" data-stellar-background-ratio="0.6">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="800">
              <p><a href="images/obra3/obra3.png" target="_blank" class="btn py-3 px-3 mb-5" 
                  style="margin-right:0%; margin-top:70%; color:rgb(255, 255, 255); opacity: 0.5;">
                  Visualizar imagem ><br/>1 de 3
              </a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover" style="background-image: url(images/obra3/2_DSC3694_P.jpg);" data-aos="fade" data-stellar-background-ratio="0.6">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="800">
              <p><a href="images/obra3/2_DSC3694_P.jpg" target="_blank" class="btn py-3 px-3 mb-5" 
                  style="margin-right:0%; margin-top:70%; color:rgb(255, 255, 255); opacity: 0.5;">
                  Visualizar imagem ><br/>2 de 3
              </a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover" style="background-image: url(images/obra3/3_DSC3698.NEF_P.jpg);" data-aos="fade" data-stellar-background-ratio="0.6">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="800">
              <p><a href="images/obra3/3_DSC3698.NEF.jpg" target="_blank" class="btn py-3 px-3 mb-5" 
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
        <div class="row">
          <div> <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Ficha Técnica</h3>
                  <p>
                    <b>Título:</b> Busto do Prof. Francisco de Oliveira Magalhães <br>
                    <b>Autor(a):</b> Laércio Dias Braga <br>
                    <b>Técnica:</b> Escultura <br>
                    <b>Materiais:</b> Madeira <br>
                    <b>Dimensão:</b> 0,54cm (altura) x 0,46cm (comprimento) x 0,34cm (profundidade) <br>
                    * Observação: medida aproximada <br>
                    <b>Data:</b> 2010 <br>
                    <b>Localização:</b> Praça em frente ao Sindicato dos Servidores Técnicos da UFRPE - SINTURFEPE <br>
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
                <?php include "html/autores/laercio.html" ?>
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
                Sobre o busto em Homenagem ao professor Francisco, o Sr Luciano nos repassou as seguintes informações: 
                Que na época dessa homenagem a família do professor esteve presente, que ele tem uma filha que é professora 
                da Rural (buscar informações e contato  sobre a mesma no sindicato), sobre o evento e a inauguração da praça 
                há um registro em ata no sinduferpe com todas as informações do evento. A ideia dessa homenagem partiu do 
                professor Espinhara muito amigo do prof. Francisco.
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