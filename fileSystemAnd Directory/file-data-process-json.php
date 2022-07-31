<?php
$filename = 'data4.txt';
$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11
    ),
    array(
        'fname' => 'Rahin',
        'lname' => 'Ahmed',
        'age' => 11,
        'class' => 7,
        'roll' => 13
    ),
    array(
        'fname' => 'Jason',
        'lname' => 'Roy',
        'age' => 12,
        'class' => 7,
        'roll' => 14
    )
);



$encodeData = json_encode($students);
file_put_contents($filename,$encodeData,LOCK_EX);

$data = file_get_contents($filename);
$allStudents = json_decode($data,true);
print_r($allStudents);