<?php
    // $string_pass = 'iamtuse';
    // $md_pass = md5($string_pass);
   
    // echo $md_pass;
    

    if(isset($_POST['user_password']))
    {
        $user_pass = md5($_POST['user_password']);
        if(!empty($user_pass))
        {
           $filename = 'password.txt';
           $handle = fopen($filename, 'r');
           $hash_pass = fread($handle, filesize($filename));

           if($user_pass == $hash_pass)
           {
               echo 'Password ok.';
           }
           else{
               echo 'Invalid password.';
           }
        }
        else{
            echo 'Please fill the password field first!';
        }
    }



?>
<html>
    <head>
        <title>Password Login Test!</title>
    </head>
    
    
    <body>

        <form method="POST" action="view.php">
            Password:<input type="text" name="user_password" Autofocus="true"/><br/><br/>
            <input type="submit" value="Submit"/>
        
        </form>
    
    
    </body>

</html>