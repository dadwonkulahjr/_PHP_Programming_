<?php
  $create_file = fopen('test.txt', 'w');
 $number_of_characters_written = fwrite($create_file, 'iamtuse'."\n");
 $number_of_characters_written = fwrite($create_file, 'iamprecious'."\n");
 fclose($create_file);
 echo 'Total characters written is ' . $number_of_characters_written;
?>