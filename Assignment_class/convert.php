<?php

$GLOBALS['caller_page'] = 'convert';
//convert page
if (isset($_POST['postArray']) && !empty($_POST['postArray'])) {
    echo $_POST['postArray'] . '<hr>';
    //$numArray = str_split($_POST['postArray']);
    $numArray = json_decode($_POST['postArray'], true);
    print_r($numArray);
    foreach ($numArray as $key => $toASCII) {
        echo chr($toASCII) . '.';
    }
} else {
    die('DA FUCK YA DOING IN MY SERVAH?!');
}

