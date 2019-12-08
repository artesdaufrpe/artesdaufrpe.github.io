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

                    <div class="row">
                        <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                            <img style="width:70px;" src="images/LOGO_color.png" alt="">
                        </figure>
                        <div class="col-lg-11 col-sm-10 featured-work">
                            <h3>Sobre a Obra</h3>
                            <p>
                                A Brigada Portinari é um movimento de arte muralista que surgiu em Pernambuco no início
                                dos anos de 1980, com forte engajamento político no processo de redemocratização do
                                país, atuando em favor de candidaturas progressistas que se opunham aos representantes
                                do regime de ditadura civil-militar iniciado em 1964. Inspirados pela arte muralista de
                                outros países da América Latina, como Chile e México, os artistas da Brigada Portinari
                                atuaram em campanhas políticas, a partir de 1982, pintando os muros do Recife, de Olinda
                                e de outras cidades, como Palmares, Caruaru e Itamaracá.<br>
                                De acordo com Elizabete Remígio e Thiago Nunes Soares, em suas respectivas pesquisas no
                                Mestrado em História da UFRPE, publicadas em livros (respectivamente, As Brigadas
                                Muralistas e as Campanhas de Arraes, CEPE Ed., 2016; e Gritam os Muros – pichações e
                                ditadura civil-militar no Brasil, Appris, 2018), o primeiro trabalho da Brigada
                                Portinari foi um painel pintado na Rua da União, Bairro da Boa Vista, no Recife. Luciano
                                Pinheiro, um dos integrantes do grupo, relembra: “Em agosto de 1982 surge o primeiro
                                painel da Brigada Portinari em um muro da Rua da União [...] Sentia-se no ar um pouco de
                                emoção e nervosismo, talvez medo. No branco arriscam-se os primeiros desenhos, manchas,
                                letras, números. Pessoas se aproximam sem entender o que acontecia, afinal, a pichação
                                de muros estava proibida. E aquela era tudo aberto, quase uma festa! Dois dias depois, o
                                painel estava vandalizado. [...] É então que vem a consciência de ampliação do trabalho,
                                ou seja, não só executar novos painéis, mas também restaurar os que fossem danificados.
                                E isso foi feito, muro a muro.” (REMÍGIO 2016, p. 57). “[...] A Brigada avança, chegando
                                a pintar mais de 30 painéis espalhados estrategicamente pelos bairros recifenses e 12 em
                                outras cidades” (SOARES 2018, p. 101).<br>
                                <br>
                                Além de Luciano Pinheiro, a Brigada Portinari teve em seu elenco, em diferentes
                                períodos, o arquiteto Ivaldevan Calheiros e artistas como George Barbosa, Clériston
                                Andrade, Alves Dias, José Carlos Viana, Delano, Bárbara Kreuzig, Cavani Rosas, Maria
                                Betânia, Lourenço Ipiranga, João Câmara, Ypiranga Filho, José Cláudio e Tereza Costa
                                Rêgo, entre outros. A obra presente neste catálogo data de 1986 e está localizada numa
                                sala nas dependências internas da Biblioteca Central da UFRPE. São, na verdade, duas
                                pintadas de dimensões grandes: a primeira, com 1,90m de altura e 3,94m de largura,
                                retrata trabalhadores agrícolas da colheita de cana-de-açúcar e crianças em um ambiente
                                rural. Na parede do lado esquerdo desta primeira pintura, encontra-se outro mural
                                medindo 2,60m de altura e 2,75m de largura, este retratando um cenário ambientado na
                                academia, composto por imagens de estudantes e pesquisadores com pranchetas ou sentados
                                em cadeiras.<br>

                            </p><br>
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