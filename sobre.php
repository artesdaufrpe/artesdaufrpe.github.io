<!DOCTYPE html>
<html lang="en">

<?php include "html/head.html" ?>

<body>

    <!-- Header geral do site -->
    <?php include "html/header.html" ?>

    <!-- Header da página -->
    <div class="container-banner">
        <header class="site-navbar" role="banner">

            <div class="container">
                <div>

                    <div id="titulo">
                        <h2><a class="text-white" style="text-shadow: 2px 2px 4px #000000;"><br>Sobre</a></h2>
                        <br>
                    </div>
                </div>
            </div>

        </header>
    </div>

    <div class="site-wrap">

        <div class="site-wrap">

            <div class="site-section">

                <section class="main-section alabaster">

                    <div class="container">

                        <div class="row">
                            <figure class="col-lg-1 col-sm-2 wow fadeInLeft">
                                <img style="width:70px;" src="images/LOGO_color.png" alt="">
                            </figure>
                            <div class="col-lg-11 col-sm-10 featured-work">
                                <h3>Sobre Artes na UFRPE</h3>
                                <p>
                                    <?php include "html/sobre.html" ?>
                                </p>
                            </div>
                        </div>

                    </div>

                </section>

            </div>

            <?php include "html/vejamais.html" ?>

            <div class="site-section border-top">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h3 class="mb-5 text-black">Tour virtual de visitação às obras de artes visuais - murais,
                                painéis e esculturas - do campus de Dois Irmãos da Universidade Federal Rural de
                                Pernambuco
                                - UFRPE.</h3>
                            <p class="mb-0"><a
                                    href="https://tourbuilder.withgoogle.com/builder#play/ahJzfmd3ZWItdG91cmJ1aWxkZXJyEQsSBFRvdXIYgICgo9OwkQkM"
                                    class="btn btn-orange hover-black py-3 px-5">Nosso Google Tour</a></p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "html/footer.html" ?>

        </div>

        <?php include "html/scripts.html" ?>

</body>

</html>