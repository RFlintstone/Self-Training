<?php
/**
 * Created by PhpStorm.
 * User: rwfli
 * Date: 3/31/2019
 * Time: 13:24
 */
$max = 100;
for($i=0; $i < $max; $i++){
    if ($i%2){
        echo $i . " Is Uneven";
        echo '<br>';
    } else {
        echo $i . " Is Even";
        echo '<br>';
    }
}