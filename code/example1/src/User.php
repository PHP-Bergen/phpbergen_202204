<?php declare(strict_types=1);

namespace Phpbergen;

class User {

    public static function php_bergen_create_user($first, $last)
    {
        return Mysql::php_bergen_insert_user($first, $last);
    }

}
