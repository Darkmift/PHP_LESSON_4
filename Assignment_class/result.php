<?php
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
    for ($i = 0; $i < count($search_array); $i++) {
        echo '<tr>';
        foreach ($search_array[$i] as $key => $value) {
            $str .= mb_convert_encoding(chr($value), 'UTF-8', 'ISO-8859-1') . " - ";
        }
        echo '<td>' . $i . '</td>';
        echo '<td>' . substr($str, 0, -2) . '</td>';
        echo '</tr>';
    }
    ?>
</table>
<?php
include 'Frame/footer.php';
?>