<?php
    
    $multi_dimension_array = array('Skills'=>array('C#', 'PHP', 'JavaScript', 'jQuery'),
                        'Education'=>array('Diploma', 'Bsc', 'Ms', 'Doc'));

    foreach ($multi_dimension_array as $key => $value) {
        echo '<strong>'. $key .'</strong>' . '<br/>';
        foreach($value as $result)
        {
            echo $result . '<br/>';
        }
    }
    

?>