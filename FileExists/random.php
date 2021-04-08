<?php
    $filename = '9999dab9bfedf8d508c2a1c3f1c95e6ba1fc9951.txt';
    $newfilename = rand(10000,9999).md5($filename).rand(1000,9999);
    
    if(rename($filename, $newfilename.'.txt'))
    {
        echo 'The File '.$filename.' was rename to '.$newfilename.'.txt';
    }
    else{
        echo 'There were error in renaming the file <strong>'.$filename.'</strong>';
    }

?>


<form method='POST' action='random.php'>
    Name: <br/>
    <input type='text' name='name'><br><br/>
    <input type='submit' value='Add'>
    
</form>