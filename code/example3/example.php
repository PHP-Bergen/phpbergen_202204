<?php declare(strict_types=1);

/**
 * @file Create a user in Mysql.
 */

use Phpbergen\User;

include_once __DIR__ . '/vendor/autoload.php';

$first = 'j';
$last = 'Bond';

$user = User::create($first, $last);
if ($user) {
    print_r($user);
}
