<?php

include 'mysql.php';

function php_bergen_create_user($first, $last) {
    return php_bergen_insert_user($first, $last);
}


//function php_bergen_create_super_user($first, $last) {
//    return php_bergen_insert_user($first, $last);
//}
