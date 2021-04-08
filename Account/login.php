<?php
   
 if(isset($_COOKIE['name']))
 {
    $name = $_COOKIE['name'];
    echo 'Hi, welcome ' . $name;
 }
 else{
    echo 'Cookie has expired.';
    die();
 }

 $current_script = $_SERVER['SCRIPT_NAME'];


?>

<form method='POST' action='processing.php'>
   Name: <br/>
   <input type='text' name='username'/><br><br>
   <input type='submit' value='Create'>

</form>