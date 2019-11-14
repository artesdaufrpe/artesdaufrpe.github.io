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
            <h2><a href="index.html" class="text-white"><br>Mural Talhado no Prédio Otávio Gomes</a></h2>
            <br>
          </div>
        </div>
      </div>
    
    </header>
  </div>

  <div class="site-wrap">

  <div class="container">

    <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
        <h4 class="font-size-regular" title="Ver galeria"><a href="#"
                onclick="openModal();currentSlide(1)"><br>Galeria</a></h4>

        <p>Foto cedida pelo Prof. Lobato</p>
    </div>

  </div>
    <!-- ATENÇÃO, MUDAR o nome de Acordo com o número da Obra-->
    <!-- CARROSSEL em PHP -->
    <?php 
      $num_obra = 9;
      include "carrossel-obra.php"
    ?>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div> <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Ficha Técnica</h3>
                  <p>
                  <b>Título:</b> Desconhecido<br />
                  <b>Autor (a):</b> Inalda Xavier<br />
                  <b>Talhador:</b> Cristiano<br />
                  <b>Técnica:</b> Talha<br />
                  <b>Materiais:</b> Madeira<br />
                  <b>Dimensão: </b> 12,06 (L) x  2,65 (A) x 0,03 (P)<br />
                  <b>Data: </b>1978 <br />
                  </p>
              <br>
              </div>
            </div>
          </div>
          <div> <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Sobre a Autora</h3>

                <?php include "html/autores/inalda-xavier.html" ?>
                <br/>
              </div>
            </div>
          </div>
          <div> <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Sobre a Obra</h3>
                <p>
                Ainda sob estudo.
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