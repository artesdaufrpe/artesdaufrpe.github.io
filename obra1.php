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
                        <h2><a class="text-white" style="text-shadow: 2px 2px 4px #000000;"><br>Sem Título</a></h2>
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
                                <b>Título:</b> Sem Título <br>
                                <b>Autora:</b> Christina Machado <br>
                                <b>Técnica:</b> Mista <br>
                                <b>Materiais:</b> Cerâmica e pigmentos <br>
                                <b>Dimensão:</b> 25,60m (largura) x 2,4m (altura) <br>
                                <b>Data:</b> 1999 <br>
                                <b>Localização:</b> Subsolo do prédio CEGOE <br>
                            </p>
                            </br>
                        </div>
                    </div>

                    <div class="row">
                        <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                            <img style="width:70px;" src="images/LOGO_color.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h3>Sobre a Autora</h3>
                            <p>
                                <?php include "html/autores/christina-machado.html" ?>
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
                                A obra se encontra no salão térreo ao lado do pátio do auditório/CEGOE.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="container titleModal">
                    <?php
                        $id_galeria = "jssor_body";
                        include "galeria_begin.php";
                        // Início imagens Galeria
                        $num_obra = 1;
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
                $num_obra = 1;
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