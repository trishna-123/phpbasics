<?php
    /* $var = 10;
    if($var%2==0 && $var%5==0){
        echo "Divisible by both 2 and 5";
    }
    elseif($var%5==0){
        echo "Divisible by 5";
    }
    else {
        echo "Condition did not meet";
    } */

    $level = 3;
    switch($level){
        case 1 :
            echo "You are playing in EASY mode";
            break;
            case 2 :
                echo "You are playing in MODERATE mode";
                break;
            case 3 :
                echo "You are playing in DIFFICULT mode";
                break;
            case 4 :
                echo "You are playing in EXTREME mode";
                break;

            default:
            echo "Not valid request";
    }
?>