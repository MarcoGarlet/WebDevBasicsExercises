<?php
    $age = array("Peter"=>array("John"=>12), "Ben"=>37, "Joe"=>43);
    echo json_encode($age)."\n";

    $age_encoded = json_encode($age);
    $obj = json_decode($age_encoded);
    // TO DO stampare John da obj

    $arr = json_decode($age_encoded, true);
    print_r($arr);
?>