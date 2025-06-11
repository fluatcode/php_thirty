<?php
$fh = fopen("testfile.txt", 'r') or die("Cannot open file.");
while (!feof($fh)) {
  $line = fgets($fh);
  echo $line . "<br>";
}
fclose($fh);
?>
