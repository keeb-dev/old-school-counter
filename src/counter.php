<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$file = "../counter.txt";

function logit($logstr) {
    // i don't want to do proper logging, this just hijacks local stdout
    define('STDOUT', fopen('php://stdout', 'w'));
    fwrite(STDOUT, print_r($logstr . "\n", true));
}

function make_counter($count_int) {
    $NUM_ZERO = 6; // change if you want to have to count higher than 999999
    $count_string = strval($count_int);
    $zeroes = $NUM_ZERO - strlen($count_string);
    $num = make_zero($zeroes) . $count_string;
    logit($num);
    return $num;
}

function make_zero($amt) {
    $ret = "";
    for ($i=0; $i < $amt; $i++) { 
        $ret .= "0";
    }
    return $ret;
}

$count = rtrim(file_get_contents($file));
// convert to int
$count_value = intval($count);
logit("got " . $count_value);

if (is_int($count_value)) {
    $count_value++;
    file_put_contents($file, $count_value);
}


$counter = make_counter($count_value);
$payload = array ('counter' => $counter);

echo json_encode($payload);

?>