<?php declare(strict_types=1);

/**
 * @file Create user.
 */

use Phpbergen\User;

include_once __DIR__ . '/vendor/autoload.php';

$first = 'Ja';
$last = 'Ba';

$user = User::php_bergen_create_user($first, $last);
if ($user) {
    print_r($user);
}
