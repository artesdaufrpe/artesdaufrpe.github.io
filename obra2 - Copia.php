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
                        <h2><a href="index.html" class="text-white"><br>90 anos dos cursos de ciências agrárias da
                                UFRPE</a></h2>
                        <br>
                    </div>
                </div>
            </div>

        </header>
    </div>

    <div class="site-wrap">

        <div class="container">

            <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <h4 class="font-size-regular"><br>Fotos</h4>
                <p>Foto: Josimar Monteiro</p>
            </div>

        </div>

        <div class="slide-one-item-manual home-slider owl-carousel overlap">
            <!-- Carousel begin-->

            <div class="site-blocks-cover overlay" style="background-image: url(images/obra2/1_DSC3681_NEF_P.jpg);"
                data-aos="fade" data-stellar-background-ratio="0.9">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-8" data-aos="fade-up" data-aos-delay="800">
                            <p><a class="btn py-3 px-3 mb-5"
                                    style="margin-right:0%; margin-top:70%; color:rgb(255, 255, 255); opacity: 0.5;"
                                    onclick="openModal();currentSlide(1)">
                                    Visualizar imagem ><br />1 de 4
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-blocks-cover overlay" style="background-image: url(images/obra2/2_DSC3681_NEF_P.jpg);"
                data-aos="fade" data-stellar-background-ratio="0.9">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-8" data-aos="fade-up" data-aos-delay="800">
                            <p><a class="btn py-3 px-3 mb-5"
                                    style="margin-right:0%; margin-top:70%; color:rgb(255, 255, 255); opacity: 0.5;"
                                    onclick="openModal();currentSlide(2)">
                                    Visualizar imagem ><br />2 de 4
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- Fim Carousel-->

        <div class="site-section texto-obras">
            <div class="container">
                <div class="row">
                    <div>
                        <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary"><img
                                        src="images/arte_peq.png"></span></div>
                            <div>
                                <h3>Ficha Técnica</h3>
                                <p>
                                    <b>Título:</b> 90 anos dos cursos de ciências agrárias da UFRPE <br>
                                    <b>Autor(a):</b> Corbiniano Lins <br>
                                    <b>Técnica:</b> Escultura (alto relevo) <br>
                                    <b>Materiais:</b> Granito <br>
                                    <b>Dimensão:</b> 0,90 (L) x 1,00 (A) <br>
                                    <b>Data:</b> 2002 <br>
                                    <b>Localização:</b> Entrada do Anfiteatro do CEGOE <br>
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div>
                        <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary"><img
                                        src="images/arte_peq.png"></span></div>
                            <div>
                                <h3>Sobre o Autor</h3>
                                <p>
                                    José Corbiniano Lins foi um escultor pernambucano nascido em Olinda em 1924.
                                    Corbiniano iniciou como pintor em 1949. Em 1952, ingressa no Atelier Coletivo de
                                    Olinda.
                                    Fez parte do movimento de Arte Moderna do Recife na década de 1950 junto com nomes
                                    como Abelardo da Hora,
                                    Reynaldo Fonseca, Samico e Celina Lima Verde. Participou de diversas exposições
                                    coletivas e individuais em
                                    galerias, museus, espaços culturais e Salões em Recife, Olinda, São Paulo, Rio de
                                    Janeiro, na Europa e na
                                    América Latina.
                                    Uma de suas obras mais conhecidas é o painel de azulejos localizado na praça General
                                    Abreu e Lima, em Recife,
                                    em que representa três momentos históricos de revoluções no estado de Pernambuco:
                                    1817 (Revolução Pernambucana),
                                    1824 (Confederação do Equador) e 1848 (Revolução Praieira).
                                    Trabalhava ativamente em seu atelier onde recebia encomendas de esculturas.<br>
                                    O artista faleceu a 10 de março de 2018, em Recife, vítima de infarto, sendo
                                    sepultado no Cemitério Parque das
                                    Flores. Em sua homenagem foi nomeada uma galeria de artes no bairro de Santo Amaro,
                                    no Recife.<br>
                                </p>

                                <b>Disponível em:</b><a href="https://pt.m.wikipedia.org/wiki/Jos%C3%A9_Corbiniano_Lins"
                                    target="_blank" class="btn">
                                    Wikipedia/Corbiniano<br />
                                </a>
                                <br />
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary"><img
                                        src="images/arte_peq.png"></span></div>
                            <div>
                                <h3>Sobre a Obra</h3>
                                <p>Foi colocada na comemoração dos (90 anos da UFRPE).</p>
                                <br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php
            $num_obra = 10;
            include "galeria_obra.php" 
        ?>

        <?php include "html/outras_obras.html" ?>
        <?php include "html/footer.html" ?>

    </div>

    <!-- Galery Begin -->
    <div id="personScroll" class="scrollbar" style="display: none;">
        <div id="myModal" class="modal force-overflow">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                    <img src="images/obra2/1_DSC3681_NEF.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 6</div>
                    <img src="images/obra2/2_DSC3681_NEF.jpg" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="images/obra2/1_DSC3681_NEF_P.jpg" style="width:100%"
                            onclick="currentSlide(1)" alt="1 - Texto foto 1">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/obra2/2_DSC3681_NEF_P.jpg" style="width:100%"
                            onclick="currentSlide(2)" alt="2 - Texto foto 2">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Galery End -->

    <?php include "html/scripts.html" ?>

</body>

</html>