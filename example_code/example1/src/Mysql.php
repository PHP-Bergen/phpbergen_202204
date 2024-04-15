<?php

namespace Phpbergen;

class Mysql {

    public static function php_bergen_connect()
    {
        $host = '';
        $user = '';
        $pass = '';
        $db = '';
        include_once __DIR__ . '/../setup.php';
        $db = mysqli_connect($host, $user, $pass, $db);

        return $db;
    }

    public static function php_bergen_insert_user($first, $last_name)
    {
        $db = self::php_bergen_connect();
        mysqli_query($db, "INSERT INTO user (first, lastname) VALUES ('$first' , '$last_name')");
        $id = mysqli_insert_id($db);
        $results = mysqli_query($db, "SELECT uid, first, lastname FROM user WHERE uid = $id");

        return mysqli_fetch_row($results);
    }

}
