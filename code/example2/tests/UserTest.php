<?php

use Phpbergen\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    /**
     * @covers User::php_bergen_create_user
     */
    public function testPhp_bergen_create_user(): void
    {
        $firstName = 'PHP';
        $lastName = 'Bergen';
        $user = User::php_bergen_create_user($firstName, $lastName);
        self::assertSame($firstName, $user[1]);
        self::assertSame($lastName, $user[2]);
    }
}
