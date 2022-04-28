<?php declare(strict_types=1);

namespace Phpbergen\User;

use Phpbergen\Db\Mysql;

final class User {

    public function __construct(private readonly UserName $userName)
    {
    }

    public function createUser(): array
    {
        return (new Mysql())->createUser(
          $this->userName->firstName(),
          $this->userName->lastName()
        );
    }
}
