<?php

function getNumOfWays($n){

    $prev = 0; $cur = 1;

    for($i = 0; $i < $n; $i ++){
        $tmp = $cur;
        $cur += $prev;
        $prev = $tmp;
    }

    return $cur;
}

echo getNumOfWays($i);

?>
