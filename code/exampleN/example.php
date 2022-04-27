<?php declare(strict_types=1);

use Phpbergen\User\User;
use Phpbergen\User\UserName;

require __DIR__ . '/vendor/autoload.php';

$name = new UserName('James', 'Bond');
$user = new User($name);
print $user . PHP_EOL;
