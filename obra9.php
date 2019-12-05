<!DOCTYPE html>
<html lang="en">

<?php include "html/head.html" ?>

<body id="overflowY">

    <!-- Header geral do site -->
    <?php include "html/header.html" ?>

    <!-- Header da obra -->
    <div class="container-banner">
        <header class="site-navbar" role="banner">

            <div class="container">
                <div>

                    <div id="titulo">
                        <h2><a class="text-white" style="text-shadow: 2px 2px 4px #000000;"><br>Desconhecido</a></h2>
                        <br>
                    </div>
                </div>
            </div>

        </header>
    </div>

    <div class="site-wrap">

        <div class="site-section">

            <section class="main-section alabaster">
                <!--main-section alabaster-start-->
                <div class="container">
                    <div class="row">
                        <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                            <img style="width:70px;" src="images/LOGO_color.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h3>Ficha Técnica</h3>
                            <p>
                                <b>Título:</b> Desconhecido <br>
                                <b>Autor(a):</b> Inalda Xavier <br>
                                <b>Talhador(a):</b> Cristiano <br>                                 
                                <b>Técnica:</b> Talha <br>
                                <b>Materiais:</b> Madeira <br>
                                <b>Dimensão:</b> 12,06 (L) x 2,65 (A) x 0,03 (P) <br>
                                <b>Data:</b> 1978 <br>
                                <b>Localização:</b> Prédio Otávio Gomes <br>
                            </p>
                            </br>
                        </div>
                    </div>

                    <div class="row">
                        <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                            <img style="width:70px;" src="images/LOGO_color.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h3>Sobre o Autor</h3>
                            <p>
                                <?php include "html/autores/inalda-xavier.html" ?>
                            </p>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                            <img style="width:70px;" src="images/LOGO_color.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h3>Sobre a Obra</h3>
                            <p>
                                Conceição (da Biblioteca Central): sobre a escultura da Semeadora ( deusa da
                                agricultura) e sobre o seu contexto histórico ( data, quem solicitou sua instalação,
                                etc) poderá ser obtida com o pessoal da Pró reitoria de planejamento, mais
                                especificamente com o Pro reitor. Acredita que sua instalação tenha ocorrido nos anos
                                80.
                            </p>
                        </div>
                    </div> -->

                </div>

                <div class="container titleModal">

                    <h3><br>Texto a ser definido</a></h3>

                    <p>Texto a ser definido</p>

                    <?php
                        $id_galeria = "jssor_body";
                        include "galeria_begin.php";
                        // Início imagens Galeria
                        $num_obra = 9;
                        include "galeria_obra.php";
                        // Fim Galeria
                        include "galeria_end.php";
                    ?>

                </div>

            </section>
            <div class="col-md-12 col-lg-12 mb-4 mb-lg-4">
                <h5 class="font-size-regular titleModal" title="Tela cheia"><a href="#"
                        onclick="openModal();currentSlide(1)"><br>Ver galeria </a><img
                        style="width:20px; cursor:pointer;" src="images/full-screen.png"></h5>
            </div>

            </br></br></br>
            <div class="site-section backorange">
                <div class="container">

                    <?php include "html/outras_obras.html" ?>

                </div>
            </div>

        </div>

        <?php include "html/footer.html" ?>

    </div>

    <!-- Galery Begin -->
    <div id="personScroll" class="scrollbar" style="display: none;">
        <div id="myModal" class="modal force-overflow">

            <?php
                $id_galeria = "jssor_modal";
                include "galeria_begin.php";
                // Início imagens Galeria
                $num_obra = 9;
                include "galeria_obra.php";
                // Fim Galeria
                include "galeria_end.php";
            ?>
            <span class="close cursor" onclick="closeModal()">&times;</span>
        </div>
    </div>
    <!-- Galery End -->

    <?php include "html/scripts.html" ?>

</body>

</html>