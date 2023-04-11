<?php

namespace App\IOStream;

class File
{
    private $fileName;
    private $dis;
    private $fp;

    public function __construct($fileName, string $dis)
    {
        $this->fileName = $fileName;
        $this->dis = $dis;
    }

    public function createCsvFile(?array $content)
    {
        $this->fp = fopen($this->dis.DIRECTORY_SEPARATOR.$this->fileName, "w");
        foreach($content as $item)
        {
            fputcsv($this->fp, $item);
        }
    }

    public function readCsvFile()
    {
        $this->fp = fopen($this->dis.DIRECTORY_SEPARATOR.$this->fileName, "r");
        while(($row = fgetcsv($this->fp, 0, ",")) !== false)
        {
            echo "<pre>";
            var_dump($row);
        }
    }

    public function closeFile()
    {
        fclose($this->fp);
    }
}
