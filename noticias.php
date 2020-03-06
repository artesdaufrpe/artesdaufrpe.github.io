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
                        <h2><a class="text-white" style="text-shadow: 2px 2px 4px #000000;"><br>Notícias</a></h2>
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
                                <h3>Notícias - Artes na UFRPE</h3>
                                <p>
                                    <?php include "html/noticias.html" ?>
                                </p>
                            </div>
                        </div>

                    </div>

                </section>

            </div>

            <?php include "html/tour_virtual.html" ?>

            <?php include "html/footer.html" ?>

        </div>

        <?php include "html/scripts.html" ?>
        <script>
            $(document).ready(function() {
                $("iframe").contents().find('#imagensTopo').hide();
            });
        </script>

</body>

</html>