<?php declare(strict_types=1);

namespace Phpbergen\User;

final class User
{

    public function __construct(private UserName $userName)
    {
    }

    public function __toString(): string
    {
        return $this->userName->name();
    }
}
