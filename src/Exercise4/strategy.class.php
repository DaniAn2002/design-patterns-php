<?php

class TextFormat implements ExitInterface
{
    public function showMessage()
    {
        return 'Shows message on a .txt file';
    }
}

class ConsoleFormat implements ExitInterface
{
    public function showMessage()
    {
        return 'Shows message on console';
    }
}

class JSONFormat implements ExitInterface
{
    public function showMessage()
    {
        return 'Shows message with JSON format';
    }
}

class Context
{
    private $strategy;
    public function __construct($strategy)
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy()
    {
        return $this->strategy->showMessage();
    }
}

class Message
{
    public function showMessage($format)
    {
        switch ($format) {
            case 'text':
                return new TextFormat();
            case 'console':
                return new ConsoleFormat();
            case 'json':
                return new JSONFormat();
            default:
                throw new Exception("Invalid format selected.");
        }
    }
}

$message = new Message();
$strategy = $message->showMessage('text');

$result = new Context($strategy);
echo $result->executeStrategy();
