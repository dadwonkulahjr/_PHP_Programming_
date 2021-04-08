<?php
    echo '<h1>Hello World!</h1>';
    $directory = 'dir';
   
  if($handle = opendir($directory.'/'))
  {
     while($file = readdir($handle))
     {
       if($file!='.'&&$file!='..')
       {
         echo '<a href="'.$directory.'/'.$file .'">' . $file . '</a>' . '<br/>';
       }
     }
  }

?>