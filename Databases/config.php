<?php
    // $current_script = $_SERVER['SCRIPT_NAME'];
    $message = '';
    $host = 'localhost';
    $username = 'root';
    $password = 'tuseTheProgrammer96!';
    $option_db = 'hello_world_db';
    $delete_db = 'testdb';


    $mysqli = new mysqli($host, $username, $password, $option_db);

    if($mysqli->connect_error)
    {
        die('Connection failed: ' . $mysqli->connect_error);
    }
   
    echo 'Connected' .'<br/>';
    $sql_query = 'Select username, password, gender From users Where gender = "males"'; 

    $result_set = $mysqli->query($sql_query);

    if($result_set->num_rows > 0)
    {
      
        while($row = $result_set->fetch_assoc())
        {
            $username = $row['username'];
            $password = $row['password'];
            $gender = $row['gender'];
           
            echo $username . ' - ' . $password . ' - '. $gender . '<br/>';
        
        }
       
       
    }
    else{
        echo 'No row returned.';
    }
   
    $mysqli->close();



?>




