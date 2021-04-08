<?php
    include 'login.php';

    if(isset($_POST['username']))
    {
        $username = $_POST['username'];
        if(!empty($username))
        {
            $handle = fopen('names.txt', 'a');
            fwrite($handle, $username . "\n");
            fclose($handle);
            
            if(file_exists('names.txt'))
            {
                $counter = 1;
                $array_of_names = file('names.txt');
              
                $name_count = count($array_of_names);
                
                foreach ($array_of_names as $names) {
                    echo trim($names);
                      if($counter<$name_count)
                      {
                          echo ', ';
                         
                      }
                      $counter++;
                     
                }
            }
            else{
                echo 'No';
            }

            


        }
        else{
            echo 'Please fill the input field.';
        }
    }


?>