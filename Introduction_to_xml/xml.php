<?php
    $filename = 'employee.xml';
    $open_xml = simplexml_load_file($filename);
    echo 'Employees whose salary is greater than 20000<br/>';
    echo '<hr/>';
   foreach($open_xml->employee as $emp)
   {
       echo 'Name: ' . $emp->name . '<br/>' . 'Salary: ' . $emp->salary . '<br/>' . 'Gender: ' . $emp->gender. '<br/>';
      foreach($emp->details as $detail)
      {
          echo 'Address: ' . $detail->address . '<br/>' . 'Date Hire: ' . $detail->datehire . '<br/>';

          foreach($emp->jobtitle as $occupation)
          {
              echo 'Occupation: ' . $occupation->occupation . '<br/>';
          }
          echo '----------------------------------------------------------<br/>';
      }
   }
    // echo 'Id: '. $open_xml->employee[2]->id.'<br/>';
    // echo 'Name: '. $open_xml->employee[2]->name.'<br/>';
    // echo 'Gender: '. $open_xml->employee[2]->gender.'<br/>';
    // echo 'Salary: '. $open_xml->employee[2]->salary.'<br/>';
?>