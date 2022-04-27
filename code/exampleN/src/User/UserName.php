<?php declare(strict_types=1);

namespace Phpbergen\User;

final class UserName
{
    private string $firstName;
    private string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        if (strlen($firstName) < 2) {
            throw new \InvalidArgumentException(
              'First name too short'
            );
        }
        $this->firstName = $firstName;

        if (strlen($lastName) < 2) {
            throw new \InvalidArgumentException(
              'Last name too short'
            );
        }
        $this->lastName = $lastName;
    }

    public function name():string
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function firstName(): string
    {
        return $this->firstName;
    }

    public function lastName(): string
    {
        return $this->lastName;
    }
}
