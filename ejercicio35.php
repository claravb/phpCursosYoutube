<?php
// Consumir api: developer.dailymotion.com
    $url="https://api.dailymotion.com/videos?channel=sport&limit=10";

    $opciones= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false)); //permite leer el contenido

    $respuesta=file_get_contents($url,false,stream_context_create($opciones));
    
    print($respuesta);
    print("<br><br>");
    
    $objRespuesta=json_decode($respuesta);
    
    print_r($objRespuesta);
    print("<br><br>");
    
    foreach ($objRespuesta->list as $video) {
        //print_r($video->title."<br>");
    }
?>

<ul>
    <?php foreach ($objRespuesta->list as $video) { ?>
    <li> <?php echo ($video->title); ?> |  <?php echo ($video->channel); ?> </li>
    <?php } ?>
</ul>