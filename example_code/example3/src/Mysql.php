<?php declare(strict_types=1);

namespace Phpbergen;

class Mysql {

    public static function connect()
    {
        $host = '';
        $user = '';
        $pass = '';
        $db = '';
        include_once __DIR__ . '/../setup.php';

        return mysqli_connect($host, $user, $pass, $db);
    }

    public static function createUser($first, $last_name)
    {
        $db = self::connect();
        mysqli_query($db, "INSERT INTO user (first, lastname) VALUES ('$first' , '$last_name')");
        $id = mysqli_insert_id($db);
        $results = mysqli_query($db, "SELECT uid, first, lastname FROM user WHERE uid = $id");

        return mysqli_fetch_row($results);
    }

}
