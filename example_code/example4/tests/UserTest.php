<?php

use Phpbergen\User\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $database = $this->createStub(Phpbergen\Db\Mysql::class);
        $database->method('connect')->willReturn([]);
        $foo = new database();
    }

    /**
     * @covers User::createUser
     */
    public function testCreateNewUser(): void
    {
        $firstName = 'PHP';
        $lastName = 'Bergen';
        $user = new Phpbergen\User\User(
          new Phpbergen\User\UserName($firstName, $lastName)
        );
        $account = $user->createUser();
        self::assertSame($firstName, $account[1]);
        self::assertSame($lastName, $account[2]);
    }

    /**
     * @covers User::createUser
     */
    public function testUserNameException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Phpbergen\User\UserName('J', 'Bond');
    }

    /**
     * @covers User::createUser
     */
    public function testLastNameException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Phpbergen\User\UserName('James', 'B');
    }

}
