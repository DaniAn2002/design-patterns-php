<?php

class ShootingGame implements WeaponsInterface
{
    public function createWeapon()
    {
        return 'New weapon has been created';
    }
}

class AlphaCharacter implements WeaponsInterface
{
    private $weapon;
    public function __construct(WeaponsInterface $weapon)
    {
        $this->weapon = $weapon;
    }

    public function createWeapon()
    {
        return 'AK-47 has been created';
    }
}

class BethaCharacter implements WeaponsInterface
{
    private $weapon;
    public function __construct(WeaponsInterface $weapon)
    {
        $this->weapon = $weapon;
    }

    public function createWeapon()
    {
        return "'MP7 has been created'";
    }
}
