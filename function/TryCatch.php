<?php
function printArray( array $array, int &$count ){
    $count = count($array);
    return print_r($array);
}
printArray('abcdegh' );

?>