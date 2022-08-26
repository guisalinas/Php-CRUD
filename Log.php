<?php
  function SaveError($message, $line, $inFile){
    $file = "log.txt";
    $newMessage = "Error: $message. "."Linea: $line. "."Archivo: $inFile. \n";
    $fp = fopen($file, "a");
    fwrite($fp, $newMessage); 
    fclose($fp);
  }
?>