<?php

/*
$GLOBALS['caller_page'] = 'result';
$search_array = json_decode(file_get_contents('searchHistory.json'), true);
$str = "";

//print_r($search_array);
include 'Frame/head.php';
?>
<h1>Result</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                result
            </th>
        </tr>
    </thead>
    <?php
    foreach ($search_array as $ascii_array) {
        echo '<tr>';
        foreach ($ascii_array as $key => $value) {
            $str .= chr($value);
        }
        echo '<td>' . $str . '</td>';
        echo '</tr>';
    }
    ?>
</table>
<?php
include 'Frame/footer.php';
?>