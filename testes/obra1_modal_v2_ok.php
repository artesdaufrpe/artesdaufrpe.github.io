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
                        <h2><a class="text-white" style="text-shadow: 2px 2px 4px #000000;"><br>Sem
                                Título</a></h2>
                        <br>
                    </div>
                </div>
            </div>

        </header>
    </div>

    <div class="site-wrap">

        <div class="container">

            <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <h4 class="font-size-regular" title="Ver galeria"><a href="#" onclick="openModal();currentSlide(1)"><br>Fotos</a></h4>

                <p>Foto cedida pelo prof. Tadeu</p>
            </div>

        </div>

        <div class="slide-one-item-manual home-slider owl-carousel overlap">
            <!-- Carousel begin-->
                <div class="site-blocks-cover" title="Ver galeria" href="#" onclick="openModal();currentSlide(1)" style="cursor:pointer; background-image: url(images/obra1/01p.png);"
                    data-aos="fade" data-stellar-background-ratio="0.4">
                </div>

                <div class="site-blocks-cover" title="Ver galeria" href="#" onclick="openModal();currentSlide(2)" style="cursor:pointer; background-image: url(images/obra1/02p.png);"
                    data-aos="fade" data-stellar-background-ratio="0.4">
                </div>

                <div class="site-blocks-cover" title="Ver galeria" href="#" onclick="openModal();currentSlide(3)" style="cursor:pointer; background-image: url(images/obra1/03p.png);"
                    data-aos="fade" data-stellar-background-ratio="0.4">
                </div>

        </div> <!-- Carousel End -->

        <div class="site-section">
            <div class="container">
                <div class="row align-items-stretch">
                    <div>
                        <div class="col-sm-12 d-flex">
                            <div class="unit-12-icon mr-12"><span class="text-primary"><img
                                        src="images/arte_peq.png"></span></div>
                            <div>
                                <h3>Ficha Técnica</h3>
                                <p>
                                    <b>Título:</b> Sem Título <br>
                                    <b>Autor(a):</b> Christina Machado <br>
                                    <b>Técnica:</b> Mista <br>
                                    <b>Materiais:</b> Cerâmica e pigmentos <br>
                                    <b>Dimensão:</b> 25,60m (largura) x 2,4m (altura) <br>
                                    <b>Data:</b> 1999 <br>
                                    <b>Localização:</b> Subsolo do prédio CEGOE <br>
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="col-sm-12 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary"><img
                                        src="images/arte_peq.png"></span></div>
                            <div>
                                <h3>Sobre o Autor</h3>
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

                                    <p><b>Disponível em:</b><a href="http://www.galeriaestacao.com.br/acervo_artista/55"
                                            target="_blank" class="btn">
                                            galeriaestacao<br />
                                        </a></p>

                                </p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="unit-4 d-flex">
                            <div class="unit-4-icon mr-4"><span class="text-primary"><img
                                        src="images/arte_peq.png"></span></div>
                            <div>
                                <h3>Sobre a Obra</h3>
                                <p>
                                    A obra se encontra no salão térreo ao lado do pátio do auditório/CEGOE.
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

    <!-- Galery Begin -->
    <div id="personScroll" class="scrollbar" style="display: none;">
        <div id="myModal" class="modal force-overflow">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <?php include "teste4.html" ?>

            <!-- 
            <div class="modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 10</div>
                    <img src="images/obra1/01.png" style="width:100%">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 10</div>
                    <img src="images/obra1/02.png" style="width:100%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="row">
                    <div class="column">
                        <img class="demo cursor" src="images/obra1/01p.png" style="width:100%"
                            onclick="currentSlide(1)">
                    </div>
                    <div class="column">
                        <img class="demo cursor" src="images/obra1/02p.png" style="width:100%"
                            onclick="currentSlide(2)">
                    </div>
                </div>
            </div> -->
            
        </div>
    </div>
    <!-- Galery End -->

    <?php include "html/scripts.html" ?>

</body>

</html>