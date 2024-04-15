<?php

use Phpbergen\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    /**
     * @covers User::create
     */
    public function testCreateNewUser(): void
    {
        $firstName = 'PHP';
        $lastName = 'Bergen';
        $user = User::create($firstName, $lastName);
        self::assertSame($firstName, $user[1]);
        self::assertSame($lastName, $user[2]);
    }

    /**
     * @covers User::create
     */
    public function testShortName(): void
    {
        $user = User::create('J', 'Bond');
        self::assertSame(0, $user);

        $user = User::create('James', 'B');
        self::assertSame(
          0,
          $user, 'Last name test failed.'
        );
    }

}
