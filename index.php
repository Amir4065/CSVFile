<?php
require "vendor\autoload.php";

use App\IOStream\File;

$content = array(
              array("a","b","c","d","e"),
              array("1","2","3","4","5"),
              array("aaa","bbb","ccc","ddd"),
              array("abc","werd","6755")
              );
$file = new File("new.csv", "var");
$file->createCsvFile($content);
$file->readCsvFile();
$file->closeFile();
