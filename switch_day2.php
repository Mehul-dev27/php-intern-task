<?php

    /*
        1 --> RED
        2 --> YELLOW
        3 --> BLUE
    */

    $a = 2;

    switch($a){
        case 1 :
            echo "You picked RED Color";
            break;
        case 2 :
            echo "You picked YELLOW Color";
            break;
        case 3 :
            echo "You picked BLUE Color";
            break;
        default :
            echo "You picked defalut color";
    }
?>