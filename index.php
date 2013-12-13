<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Example.php';
        try {
            echo Example::getWeather("Voronezh");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        ?>
    </body>
</html>
