<?php
    include('./non_module.php');
    print('<p> Il modulo non esiste ma non penso sia un problema </p>');
?>


<?php
    require('./non_module.php');
    print('<p> Il modulo non esiste, potrebbe essere un problema </p>');
?>
