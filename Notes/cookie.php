<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cookie</title>
    </head>
    <body>
        <?php
        // put your code here
        isset($name);
        isset($_GET['name']);
        if (isset($_GET['name']) && strlen($_GET['name']) > 3) {
            
        }
        ?>
        <!-- 
        cookie is a form of header
        Setting new cookie
        =============================-->
        <?php
        setcookie("name", "value", time() + $int);
        /* name is your cookie's name
          value is cookie's value
          $int is time of cookie expires */
        ?>
        <!--
        Getting Cookie
        =============================-->
        <?php
        echo $_COOKIE["your cookie name"];
        ?>
        <!--
        Updating Cookie
        =============================-->
        <?php
        setcookie("color", "red");
        echo $_COOKIE["color"];
        /* color is red */
        /* your codes and functions */
        setcookie("color", "blue");
        echo $_COOKIE["color"];
        /* new color is blue */
        ?>

        <!--Deleting Cookie
        ==============================-->
        <?php
        unset($_COOKIE["yourcookie"]);
        /* Or */
        setcookie("yourcookie", "yourvalue", time() - 1);
        /* it expired so it's deleted */
        ?>

        <?php
            setcookie("TestCookie", $value, time() + 3600, "/~rasmus/", "example.com", 1);
        ?>
        <?php
            echo 'Hello ' . ($_COOKIE['first_name'] != '' ? $_COOKIE['first_name'] : 'Guest'); // Hello David!
        ?>
        <!--
        Reference: http://gencbilgin.net/php-cookie-kullanimi.html-->
        ?>
    </body>
</html>
