<?php

require_once("Adapter.interface.php");
class Windows
{
    public function readFile($file_name)
    {
        echo "Abriendo archivo $file_name";
    }
}

class WindowsAdapter implements WindowsInterface
{
    private $file;
    public function __construct(Windows $file)
    {
        $this->file = $file;
    }
    public function getWindowsData($file_name)
    {
        return $this->file->readFile($file_name);
    }
}

$file = new Windows();
$adapter = new WindowsAdapter($file);
$adapter->getWindowsData("book1.xls");
