<?php
function ListDirectory($dir, $ext){
  $dirstring = "";
  $files = scandir($dir);
  foreach($files as $file) {
    if(pathinfo($file, PATHINFO_EXTENSION) == $ext AND $file != "index.php"){
      $dirstring .= "<li><a href='$dir/$file'>$file</a></li>";
    }
  }
  return $dirstring;
}
?>
