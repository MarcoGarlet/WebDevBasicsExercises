<?php
    // esempio 1
    
    $f = fopen( 'php://stdin', 'r' );
    $line = fgets( $f );
    echo $line;
    fclose( $f );
    // TODO leggere due numeri da standard input e stampare la somma
    

    // esempio 2

    
    $line = "Analizziamo questo paragrafo";
    
    for($i=0;$i<strlen($line);$i++){
        if ($i % 2 == 0)
            echo $line[$i]; // stampiamo i caratteri di indice pari
    }
    // stampare i caratteri di indice multiplo di 3 e sono diversi da spazio


    // esempio 3

    $token = strtok($line," ");
    while ($token !== false) 
    { 
        echo "$token \n"; 
        $token = strtok(" ");
    }
    // TODO modificare il codice sopra, mettere tutti i token in un array, stampare ogni elemento dell'array circondato da <p></p>

    // esempio 4

    $array = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
    
    print_r(array_keys($array));
    print_r($array);

    // TO_DO aggiungere una chiave 'id' valorizzata con 1337


    // esempio 5
    $array_esempio = array(1,2,3,9);
    foreach($array_esempio as $element){
        echo $element."\n";
    }
    // TO_DO stampare un array keys

?>