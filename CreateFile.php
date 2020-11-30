<?php
  function CreateFile($foldertomakefilein,$filename,$filetext){
    $myfile = fopen($foldertomakefilein.$filename, "w") or die("Unable to create file!");
    fwrite($myfile, $filetext);
    fclose($myfile);
  }
?>
