<?php

require_once('FactoryMethod.interface.php');

class SkeletonCharacter implements CharacterInterface
{
    public function createCharacter()
    {
        echo 'New Skeleton character has been created';
    }
}

class ZombieCharacter implements CharacterInterface
{
    public function createCharacter()
    {
        echo 'New Zombie character has been created';
    }
}

class CharacterFactory
{
    public static function createCharacter($difficulty)
    {
        switch ($difficulty) {
            case 'Easy Level':
                return new SkeletonCharacter();
            case 'Hard Level':
                return new ZombieCharacter();
            default:
                throw new Exception('Select a difficulty level');
        }
    }
}

$game1 = CharacterFactory::createCharacter('Easy Level');
$game1->createCharacter();
