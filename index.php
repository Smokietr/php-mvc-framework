
<?php

try {

    include_once "system/router/Router.php";

    new Router($_GET["url"]);
    include_once "system/router/web.php";

}

catch (Exception $a) {
    echo $a->getMessage();

}

?>