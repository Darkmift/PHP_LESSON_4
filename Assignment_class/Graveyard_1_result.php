<?php

/*

convert page
$GLOBALS['caller_page'] = 'convert';


if (isset($_POST['postArray']) && !empty($_POST['postArray'])) {
    echo $_POST['postArray'] . '<hr>';
    //$numArray = str_split($_POST['postArray']);
    $numArray = json_decode($_POST['postArray'], true);
    //print_r($numArray);

    /////////
    $result_ASCII = array();

    foreach ($numArray as $key => $toASCII) {
        echo chr($toASCII) . '.';
        array_push($result, $toASCII);
    }
} else {
    die('DA FUCK YA DOING IN MY SERVAH?!');
}

function write_to_file() {
    if (file_exists($search_list)) {
        $search_list = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($search_list, $txt);
        $txt = "Jane Doe\n";
        fwrite($search_list, $txt);
        fclose($search_list);
    }
}
////ver2
//convert page
$GLOBALS['caller_page'] = 'convert';
$postArray = $_POST['postArray'];

if (isset($postArray) && !empty($postArray)) {
    echo 'postArray:'.$postArray . '<hr>';
    convert_numArray_to_ASCII($postArray);
    /////////
} else {
    die('DA FUCK YA DOING IN MY SERVAH?!');
}

function convert_numArray_to_ASCII($param) {
    $param_decoded = json_decode($param, true);
    $result_ASCII = array();
    echo '<hr>';
    foreach ($param_decoded as $key => $toASCII) {
        echo chr($toASCII) . '.';
        array_push($result_ASCII, $toASCII);
    }
    echo '<hr>';
    print_r($result_ASCII);
}

function write_to_file() {
    if (file_exists($search_list)) {
        $search_list = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($search_list, $txt);
        $txt = "Jane Doe\n";
        fwrite($search_list, $txt);
        fclose($search_list);
    }
}

<?php

//convert page
$GLOBALS['caller_page'] = 'convert';
$postArray = $_POST['postArray'];

//check postArray is valid
if (isset($postArray) && !empty($postArray)) {
//call convert to ascii on array values
    convert_numArray_to_ASCII($postArray);
//call write to file
    write_to_file();
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
//    if (!file_exists($search_list)) {
//        $search_list = fopen("searchHistory.json", "w") or die("Unable to open file!");
//    }
////
    $search_array = json_decode(file_get_contents('searchHistory.json'), true);
    array_push($search_array, $param);
    file_put_contents('users.json', json_encode($search_array));
    http_response_code(201);
////
}

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
        array_push($ASCII_array, chr($toASCII));
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
/////////////
 * <?php

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
        array_push($ASCII_array, htmlspecialchars(chr($toASCII)));
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
        $string_array = array();
        $search_array = json_decode(file_get_contents('searchHistory.json'), true);
        $search_array = array_push($search_array, $param);
        print_r($search_array, true);
        file_put_contents('searchHistory.json', json_encode($search_array));
        //header('Location: result.php');
        //exit();
        ////
    } else {
        $search_array = array();
        file_put_contents('searchHistory.json', json_encode($search_array));
        write_to_file($param);
    }
}

 */