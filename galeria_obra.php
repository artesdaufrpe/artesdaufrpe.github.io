<div data-u="slides"

    style="cursor:default;position:relative;top:0px;left:100px;width:1024px;height:576px;overflow:hidden;">

<?php
$contador = 0;
$dir = "images/obra".$num_obra."/";
if (is_dir($dir)){
    if ($dh = opendir($dir)){
      while (($arq = readdir($dh)) !== false){
        if($arq != '.' && $arq != '..' && strpos($arq, '.png') == true){
            $contador++;
        ?> 
            
            <div>
                <img data-u="image" src="<?php echo $dir;?><?php echo $contador;?>.png" />  
                <img data-u="thumb" src="<?php echo $dir;?>imageP/<?php echo $contador;?>p.png" />
            </div>

        <?php
        }
      }
      closedir($dh);
    }
}
?>

</div>