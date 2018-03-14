<?php

$pagina = $_GET['p'];



if (!$_GET){
    require_once("basico.php");
} else {
    
    require_once("./paginas/head.php");
    require_once("./paginas/menuTopo.php");
    require_once("./paginas/$pagina.php");
    require_once("./paginas/footer.php");
}
