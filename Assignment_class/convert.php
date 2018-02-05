<?php

//convert page
$GLOBALS['caller_page'] = 'convert';
$postArray = $_POST['postArray'];
//check postArray is valid
if (isset($postArray) && !empty($postArray)) {
//call convert to ascii on array values
    convert_numArray_to_ASCII($postArray);
} else {
    die('DA FUCK YA DOING IN MY SERVAH?!');
}

function convert_numArray_to_ASCII($param_in) {
    $param_decoded = json_decode($param_in, true);
    $ASCII_array = array();
    foreach ($param_decoded as $key => $toASCII) {
        array_push($ASCII_array, $toASCII);
    }
//add result to results.json file.
    write_to_file($ASCII_array);
}

function write_to_file($param) {
    //The name of the file that we want to create if it doesn't exist.
    $file = 'searchHistory.json';
    //Use the function is_file to check if the file already exists or not.
    if (is_file($file)) {
        ////
        $search_array = json_decode(file_get_contents('searchHistory.json'), true);
        array_push($search_array, $param);
        file_put_contents('searchHistory.json', json_encode($search_array));
        header('Location: result.php');
        exit();
        ////
    } else {
        $search_array = array();
        file_put_contents('searchHistory.json', json_encode($search_array));
        write_to_file($param);
    }
}
