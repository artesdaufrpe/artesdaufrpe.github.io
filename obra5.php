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
                        <h2><a class="text-white" style="text-shadow: 2px 2px 4px #000000;"><br>Brigada Portinari
                                (Paineis 01 e 02)</a></h2>
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
                                <b>Título:</b> Brigada Portinari <br>
                                <b>Autor(a):</b> Desconhecido <br>
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
                                Sobre a Brigada Portinari em conversa com Conceição e o Sr Luciano: a pintura foi
                                realizada a pedido da
                                diretora Maria Lúcia que com o projeto atividade cultural e com intuito de fazer uma
                                obra diferente, convidou
                                pintores da brigada para executar tal tarefa. Aqui chegaram , escolheram o lugar ,
                                rebocaram a parede e como a
                                ideia era de fazer uma pintura relacionada a ciência agrária, resolveram pintar um
                                canavial. Pediram a alguns
                                funcionários que servissem de modelo para a pintura, dentre eles estavam: Luciano, Sueli
                                Manzo, Luiz, Armindo
                                Martins, Marlene Muniz e João Marinho e alguns alunos. Ainda trabalham na Rural Luciano
                                e Sueli Manzo, ambos na
                                biblioteca e Armindo que trabalha em Carpina. Faleceram João Marinho, Marlene Muniz e
                                Luiz. Sr Luciano que serviu
                                de modelo para os painéis da Brigada Portinari nos relatou que eles utilizaram Vassouras
                                e baldes para simular
                                enxadas e outros objetos, Que os painéis foram pintados por três/ quatro artistas num
                                período de uns três dias.
                                Utilizavam tintas de parede, trinchas e pinceladas rápidas enquanto conversavam com os
                                modelos e pintavam.
                                Não lembra dos nomes de nenhum deles, mas acredita que quem poderia ajudar nessa
                                informação seria Elizabeth
                                Remígio, que realizou um estudo da Brigada Portinari ( informação de Conceição).
                            </p>
                        </div>
                    </div>

                </div>

                <div class="container titleModal">

                    <h3><br>Texto a ser definido</a></h3>

                    <p>Texto a ser definido</p>

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