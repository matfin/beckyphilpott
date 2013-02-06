<?php
    include_once('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php 
            include_once('views/include/meta.php');
        ?>
    </head>
    <body>
        <section id="container">
            <section id="side">
                <?php 
                    include_once('views/include/header.php');
                    include_once('views/include/nav.php');
                ?>
            </section>
            <?php include_once('views/'.page.'.php'); ?>
        </section>
    </body>
</html>
