<?php declare(strict_types=1);

/**
 * @file Create user.
 */

use Phpbergen\User;

include_once __DIR__ . '/vendor/autoload.php';

$first = 'James';
$last = 'Bond';

if (strlen($first) >= 2) {
    if (strlen($last) >= 2) {
        $r = User::php_bergen_create_user($first, $last);
        print_r($r);
    }
}
