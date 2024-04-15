<?php declare(strict_types=1);

namespace Phpbergen;

class User {

    public static function create($first, $last)
    {
        if (strlen($first) >= 2) {
            if (strlen($last) >= 2) {
                return Mysql::createUser($first, $last);
            }
        }

        return 0;
    }

}
