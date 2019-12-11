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
                        <h2><a class="text-white" style="text-shadow: 2px 2px 4px #000000;"><br>Paineis da Brigada Portinari</a></h2>
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
                                <b>Autor(a):</b> Brigada Portinari<br>
                                <b>Técnica:</b> Pintura Mural <br>
                                <b>Materiais:</b> Tinta de Parede <br>
                                <b>Dimensão:</b> 3,94 (L) x 1,90 (A) - (Painel 01)<br>
                                <b>Dimensão:</b> 2,75 (L) x 2,60 (A) - (Painel 02)<br>
                                <b>Data:</b> 1986 <br>
                                <b>Localização:</b> Localizado na Copa da Biblioteca Central. <br>
                            </p>
                            </br>
                        </div>
                    </div>

                    <div class="row">
                        <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                            <img style="width:70px;" src="images/LOGO_color.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h3>Sobre a Obra</h3>
                            <p> Ela está localizada numa sala nas dependências internas da Biblioteca Central da UFRPE. São, na verdade,
                                 duas pintadas de dimensões grandes: a primeira, com 1,90m de altura e 3,94m de largura, retrata 
                                 trabalhadores agrícolas da colheita de cana-de-açúcar e crianças em um ambiente rural. 
                                 Na parede do lado esquerdo desta primeira pintura, encontra-se outro mural medindo 2,60m de altura e 2,75m 
                                 de largura, este retratando um cenário ambientado na academia, composto por imagens de estudantes e 
                                 pesquisadores com pranchetas ou sentados em cadeiras. </p>
                        </div>
                    </div>

                    <div class="row">
                        <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                            <img style="width:70px;" src="images/LOGO_color.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h3>Sobre o Autor</h3>
                            <p>
                                <?php include "html/autores/brigada-portinari.html" ?>
                            </p>
                        </div>
                    </div>

                </div>

                <div class="container titleModal">

                    <?php
                        $id_galeria = "jssor_body";
                        include "galeria_begin.php";
                        // Início imagens Galeria
                        $num_obra = 5;
                        include "galeria_obra.php";
                        // Fim Galeria
                        include "galeria_end.php";
                    ?>

                </div>

            </section>

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
                $num_obra = 5;
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