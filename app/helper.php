<?php

// echo "helper";

// use PhpParser\Node\Stmt\TryCatch;

if (! function_exists('my_print')) {
    function my_print($input)
    {
        echo '<pre>';
        print_r($input);
        echo '</pre>';
    }
}



if (! function_exists('get_formatted_date')) {
    function get_formatted_date($date, $format)
    {

        $formated_date = date($format, strtotime($date));

        return $formated_date;
    }
}
