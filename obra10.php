<!DOCTYPE html>
<html lang="en">

<?php include "html/head.html" ?>

<body>

<!-- Header geral do site -->
<?php include "html/header.html" ?>

  <!-- Header da obra -->
  <div class="container-banner">
    <header class="site-navbar" role="banner">

      <div class="container">
        <div>
          
          <div id="titulo">
            <h2><a href="index.html" class="text-white"><br>Pintura do Salão Nobre</a></h2>
            <br>
          </div>
        </div>
      </div>
    
    </header>
  </div>

  <div class="site-wrap">

  <div class="container">

    <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
        <h4 class="font-size-regular" title="Ver galeria"><a href="#"
                onclick="openModal();currentSlide(1)"><br>Galeria</a></h4>

        <p>Foto de Recife Arte Pública</p>
    </div>

  </div>
    <!-- ATENÇÃO, MUDAR o nome de Acordo com o número da Obra-->
    <!-- CARROSSEL em PHP -->
    <?php 
      $num_obra = 10;
      include "carrossel-obra.php"
    ?>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div> <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Ficha Técnica</h3>
                  <p>
                  <b>Título:</b> Da série "Ciclos Econômicos" <br />
                  <b>Autor (a):</b> Lula Cardoso Ayres<br />
                  <b>Técnica:</b> Pintura<br />
                  <b>Materiais:</b> Madeira<br />
                  <b>Dimensão: </b> A disponibilizar <br />
                  <b>Data: </b>1957 <br />
                  </p>
              <br>
              </div>
            </div>
          </div>
          <div> <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Sobre o Autor</h3>

                <?php include "html/autores/lula-cardoso.html" ?>
                <br/>
              </div>
            </div>
          </div>
          <div> <!-- class="col-md-6 col-lg-4 mb-4 mb-lg-0"> -->
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary"><img src="images/arte_peq.png"></span></div>
              <div>
                <h3>Sobre a Obra</h3>
                <p>
                Era o ano de 1957. Após a reforma do prédio, coordenada pelo Arquiteto Waldecy Fernandes Pinto, o Salão Nobre, como parte integrante, fora reservado em destaque especial na sua ambientação do interior, cabendo os cálculos do grande vão da sua cobertura, formado por arcos laminados de madeira de lei, ao Engenheiro Civil Ordino Cardoso. Ao fundo da sala, configurou-se um espaço grande que poderia ser valorizado com uma obra de arte. Atendendo ao convite do Reitor, Manuel Rodrigues, o artista plástico pernambucano, Lula Cardoso Ayres, após ouvir a história da Universidade, direcionada ao ensino, à pesquisa e à extensão nas áreas da Agronomia e da Medicina Veterinária em Pernambuco, constituindo-se na Instituição responsável pela formação desses profissionais para todo o Estado, inspirado nos relatos e na configuração agropecuária de Pernambuco, criou então três desenhos em tamanho de papel A3, que possui a forma de um retângulo simpático – cuja representação constitui-se um ícone importante da Universidade Federal Rural de Pernambuco. Nesses desenhos, Lula criou três modelos apresentados ao Conselho Universitário para a escolha daquele que melhor retratasse a Universidade. Foi então escolhido o modelo no qual colocou as áreas geográficas de Pernambuco: o litoral, a zona da mata, o agreste e o sertão, todas retratando cenas que refletem a alma nordestina, de vidas ligadas à agricultura e à pecuária. Escolhido o modelo, Lula presenteou o Reitor com a réplica do mesmo. Este painel é, provavelmente, a maior tela que ele pintou naquela época. Os elementos acústicos dos forros e de algumas paredes em laminados e perfis de alumínio anodizados e pintados completam o espaço do Salão Nobre. Os Reitores mantiveram o compromisso de conservação e manutenção da coerência com o projeto original da equipe do Arquiteto Luiz Nunes no Governo de Carlos de Lima Cavalcanti. Esta imensa e bela obra de arte continua preservada, embelezando e encantando os frequentadores do Salão Nobre da Universidade Federal Rural de Pernambuco (UFRPE). A última reforma foi realizada durante a gestão do ex-Reitor Emídio Cantídio de Oliveira Filho, cuja reinauguração ocorreu em 12 de maio de 2005.  Mais uma vez, o Arquiteto e ex-Reitor, Waldecy Fernandes Pinto, coordenou os trabalhos, tendo novamente a oportunidade ímpar de restaurar e atualizar em termos técnicos e culturais a sua primitiva concepção arquitetônica. Além do Salão Nobre, <br />
                A modernização estendeu-se pelo restante do primeiro pavimento denominado Centro de Eventos Acadêmicos, constituído de Salas Especiais, Auditórios, Secretaria dos Conselhos, Salas de Eventos e um Foyer para Estar, Exposições e Recepções.  Ainda cumprindo as normas de segurança, foram incluídas duas escadas tipo helicoidais nas laterais do prédio com acessos livres ao exterior. A construção civil foi executada pela firma Construtora Parnamirim. No segundo pavimento, em instalações modernas, localiza-se a Reitoria da Universidade. Assim, com capacidade para 312 pessoas, o Salão Nobre mantém alguns elementos componentes do conjunto inicial desta obra de ambientação do interior, conservando as esquadrias (portas e caixilhos) e os lambris (revestimentos das paredes) da madeira de lei – Peroba do Campo em extinção da flora brasileira.<br />
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

  <?php include "html/scripts.html" ?>
   
  </body>
</html>