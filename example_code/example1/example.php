<?php declare(strict_types=1);

/**
 * @file Create a user in Mysql.
 *
 * Move functions to classes as static methods.
 * Introduce namespaces.
 * Introduce PSR-4 autoloading.
 * PSR-12 formatting.
 * ext-mysqli added as dependency to composer.json.
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
