<?php
 $remote_ip = $_SERVER['REMOTE_ADDR'];

function increment_count()
{
    global $remote_ip;
    $found = true;
    $filename = 'ip.txt';
    $ip_file = file($filename);
    foreach($ip_file as $ip)
    {
        $ip_single = trim($ip);
        if($ip_single == $remote_ip)
        {
            $found = true;
            break;
        }
        else{
            $found = false;
            
        }
    }


   if($found==false)
    {
     
    }else{
        $filename = 'count.txt';
        $handle = fopen($filename, 'r');
        $current = fread($handle, filesize($filename));
        fclose($handle);
        
        $current_inc = $current + 1;

        $handle = fopen($filename, 'w');
        fwrite($handle,$current_inc);
        fclose($handle);

        $filename = 'ip.txt';
        $handle = fopen($filename, 'a');
        fwrite($handle, $remote_ip."\n");
        fclose($handle);
    }
  

    // if($flag)
    // {
    //     echo 'Found!';
    // }
    // else{
    //     echo 'Not found!';
    // }

    // $filename = 'count.txt';
    // $handle = fopen($filename, 'r');
    // $current = fread($handle, filesize($filename));

    // $current_inc = $current + 1;
    // fclose($handle);
    
    // $handle = fopen($filename, 'w');
    // fwrite($handle, $current_inc);
    // fclose($handle);
}

?>