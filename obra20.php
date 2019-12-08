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
                        <h2><a class="text-white" style="text-shadow: 2px 2px 4px #000000;"><br>Placa dos Concluintes do
                                curso de Licenciatura em Ciências Domésticas de 1983</a></h2>
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
                                <b>Título:</b> Placa dos Concluintes do curso de Licenciatura em Ciências Domésticas de
                                1983 <br>
                                <b>Autor(a):</b> Corbiniano Lins <br>
                                <b>Técnica:</b> Escultura (alto relevo) <br>
                                <b>Materiais:</b> Granito <br>
                                <b>Dimensão:</b> 70cm (A) x 43cm (L) <br>
                                <b>Data:</b> 1983 <br>
                                <b>Localização:</b> Departamento de Ciências do Consumo (antigo Departamento de Ciências Domésticas) <br>
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
                                <?php include "html/autores/corbiniano.html" ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                            <img style="width:70px;" src="images/LOGO_color.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h3>Sobre a Obra</h3>
                            <p>
                                Texto a ser definido.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="container titleModal">

                    <?php
                        $id_galeria = "jssor_body";
                        include "galeria_begin.php";
                        // Início imagens Galeria
                        $num_obra = 20;
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
                $num_obra = 20;
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