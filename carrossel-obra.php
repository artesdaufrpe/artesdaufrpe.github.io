<div class="slide-one-item-manual home-slider owl-carousel overlap">

<?php

$contador = 0;
$dir = "./images/obra".$num_obra."/";

if (is_dir($dir)){
    if ($dh = opendir($dir)){
      while (($arq = readdir($dh)) !== false){
        $contador++;
        if($arq != '.' && $arq != '..'){
        ?> 
            <div class="site-blocks-cover" title="Ver galeria" href="#" onclick="openModal();currentSlide(<?php echo $contador;?>)"
            style="cursor:pointer; background-image: url(<?php echo $dir.$arq;?>);" data-aos="fade"
            data-stellar-background-ratio="0.4">
            </div>
        <?php
        }
      }
      closedir($dh);
    }
}
?>

</div>