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
                        <figure class="col-lg-1 col-sm-1 wow fadeInLeft">
                            <img src="images/arte_peq.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h2>Ficha Técnica</h2>
                            <p>
                                <b>Título:</b> Sem Título <br>
                                <b>Autor(a):</b> Christina Machado <br>
                                <b>Técnica:</b> Mista <br>
                                <b>Materiais:</b> Cerâmica e pigmentos <br>
                                <b>Dimensão:</b> 25,60m (largura) x 2,4m (altura) <br>
                                <b>Data:</b> 1999 <br>
                                <b>Localização:</b> Subsolo do prédio CEGOE <br>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <figure class="col-lg-1 col-sm-1 wow fadeInLeft">
                            <img src="images/arte_peq.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h2>Sobre o Autor</h2>
                            <p>
                                <b>Biografia</b> <br>

                                1957, Belém - PA <br>
                                <br>
                                Radicada em Recife (desde 1959), é artista plástica e ceramista desde 1978, quando
                                iniciou sua carreira em ateliês de
                                desenho e pintura. Graduada em educação artística pela Universidade Federal de
                                Pernambuco, conheceu a cerâmica no início
                                dos anos 80 e passou a dedicar-se ao desenvolvimento de técnicas de modelagem,
                                desenho e pintura próprios à esta matéria.
                                Voltado ao desenvolvimento de uma concepção da cerâmica enquanto arte, o trabalho de
                                Christina Machado foi inicialmente
                                marcado pela criação de objetos, esculturas e painéis para interiores e exteriores,
                                onde a cerâmica integrava-se a projetos
                                arquitetônicos. <br>
                                Nos últimos cinco anos, seu trabalho tem se voltado a uma concepção da argila não
                                apenas como suporte sobre o qual pintar
                                ou modelar, mas como a obra em si, enfatizando sua natureza intrínseca. Assim, a
                                artista vem desenvolvendo técnicas para
                                o emprego da argila (com origens, texturas e tonalidades diversas) como cobertura ou
                                a própria tinta a ser utilizada,
                                fazendo com que a argila participe como elemento essencial de todos os estágios de
                                composição da obra. <br>
                                <br>
                                <b>Fonte:</b> Biografia disponibilizada por Christina Machado

                                <p><b>Disponível em: </b><a href="http://www.galeriaestacao.com.br/acervo_artista/55"
                                        target="_blank" class="btn btn-orange hover-black py-2 px-3">
                                        galeriaestacao<br />
                                    </a></p>

                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <figure class="col-lg-1 col-sm-1 wow fadeInLeft">
                            <img src="images/arte_peq.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h2>Sobre a Obra</h2>
                            <p>
                                A obra se encontra no salão térreo ao lado do pátio do auditório/CEGOE.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="container titleModal">

                    <h3><br>Texto a ser definido</a></h3>

                    <p>Texto a ser definido</p>

                    <?php include "teste4.html" ?>

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
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <?php include "teste4.html" ?>
        </div>
    </div>
    <!-- Galery End -->

    <?php include "html/scripts.html" ?>

</body>

</html>