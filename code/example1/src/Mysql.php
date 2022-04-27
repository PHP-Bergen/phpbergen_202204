<?php declare(strict_types=1);

namespace Phpbergen;

class Mysql {

    public function php_bergen_connect()
    {
        include_once 'setup.php';
        global $host;
        global $user;
        global $pass;
        global $db;
        $db = mysqli_connect($host, $user, $pass, $db);

        return $db;
    }

    public static function php_bergen_insert_user($first, $last_name)
    {
        $db = php_bergen_connect();
        mysqli_query($db, "INSERT INTO user (first, lastname) VALUES ('$first' , '$last_name')");
        $id = mysqli_insert_id($db);
        $results = mysqli_query($db, "SELECT uid, first, lastname FROM user WHERE uid = $id");

        return mysqli_fetch_row($results);
    }

}
