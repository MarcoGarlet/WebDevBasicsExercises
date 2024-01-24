<?php
    print('<h1> two consecutive includes: </h1>');
    include('./module.php');
    include('./module.php');

    print('<h1> two consecutive include_once: </h1>');
    include_once('./another_module.php');
    include_once('./another_module.php');
?>
