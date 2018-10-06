<?php

/**
 * printArray prints out each key value pair for a given multidimensional array
 */

function printArray($array_to_print) {
    if(is_array($array_to_print)){
        foreach ($array_to_print as $key => $value) {
            //if $value is no array then print key value pair
            if (!is_array($value)) {
                echo($key . ': ' . $value . ' <br/>');
            } //if $value is an array then call function printArray again (recursive)
            else {
                printArray($value);
            }
        }
    }
}
$array_to_print = array ('first' => 'Hello', 'second' => 'world');
printArray($array_to_print);

?>