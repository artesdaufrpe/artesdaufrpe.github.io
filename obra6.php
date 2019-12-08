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
                        <h2><a class="text-white" style="text-shadow: 2px 2px 4px #000000;"><br>Busto do Prof. Manuel
                                Rodrigues Filho</a></h2>
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
                                <b>Título:</b> Busto do Prof. Manuel Rodrigues Filho <br>
                                <b>Autor(a):</b> Desconhecido <br>
                                <b>Técnica:</b> Escultura <br>
                                <b>Materiais:</b> Ferro Fundido <br>
                                <b>Dimensão:</b> 0,36 (L) x 0,32 (A) x 35 (P) <br>
                                <b>Data:</b> 1985 <br>
                                <b>Localização:</b> Biblioteca Central. <br>
                            </p>
                            </br>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                            <img style="width:70px;" src="images/LOGO_color.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h3>Sobre o Autor</h3>
                            <p>
                                <?php include "html/autores/corbiniano.html" ?>
                            </p>
                        </div>
                    </div> -->

                    <div class="row">
                        <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                            <img style="width:70px;" src="images/LOGO_color.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h3>Sobre a Obra</h3>
                            <p>
                                Engenheiro Agrônomo formado na turma de 1928, pela Escola Superior de Agricultura de
                                Pernambuco - ESAP.
                                Professor Catedrático, destaca-se na História Institucional como um dos baluartes na
                                luta pela transição
                                do período estadual da Universidade, época em que era denominada de Universidade Rural
                                de Pernambuco - URP,
                                para o federal, passando a ser subordinada ao Ministério da Agricultura e a denominar-se
                                Universidade Federal
                                Rural de Pernambuco - UFRPE. Assumiu a Reitoria como primeiro Reitor do periodo federal,
                                no período de 20 de
                                fevereiro de 1956 a 05 de junho de 1962.
                            </p>

                            <p>Fotografia: Roberto Antônio Torres de Almeida Junior</p>
                            <p>
                                <img src="images/obra6/autor/foto_autor_p.jpg"
                                    style="display: block;margin-left: auto;width:50%;margin-right: auto;">
                            </p>
                            <center>Prof. Manuel Rodrigues Filho <br>
                                Foto: Vanessa Ingrid <br>
                            </center>
                            <br>

                            <p>
                                Busto em ferro fundido em homenagem à memória do Prof. Manuel Rodrigues Filho, 1º Reitor
                                da Universidade Rural
                                de Pernambuco no período de 28 de fevereiro de 1956 a 05 de junho de 1962. Criado no
                                reitorado do Prof. Waldecy
                                Fernandes Pinto, como homenagem ao ex-reitor, foi instalado na área externa do hall de
                                entrada do prédio no ano de 1985.
                                Tempos depois, durante uma das reformas foi retirado e não mais recolocado no lugar,
                                passando anos como perdido.
                                Reencontrado em 2005, fazendo parte de equipamentos considerados como sucata, no arquivo
                                geral da Universidade,
                                foi resgatado e cuidadosamente guardado no Núcleo do Conhecimento Prof. João Baptista
                                Oliveira dos Santos, na
                                Biblioteca Central, onde aguarda sua volta ao lugar de origem. O Projeto Pedestal
                                Memória do Prof. Manuel Rodrigues
                                Filho de dezembro de 1999, do reitorado Emídio Cantídio de Oliveira Filho (1995/99 e
                                1999/2003), propõe a confecção
                                de pedestal a ser reinstalado no hall de entrada do prédio, resgatando a posição
                                anterior.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="container titleModal">

                    <?php
                        $id_galeria = "jssor_body";
                        include "galeria_begin.php";
                        // Início imagens Galeria
                        $num_obra = 6;
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
                $num_obra = 6;
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