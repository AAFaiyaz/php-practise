<?php

$filename = 'data3.txt';
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

$student =  array(
    'fname' => 'Mosfit',
    'lname' => 'Roy',
    'age' => 13,
    'class' => 7,
    'roll' => 14
);


// $data = serialize($students);
// file_put_contents($filename,$data,LOCK_EX);
$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);
// unset($allStudents[1]);
// $data = serialize($allStudents);
// file_put_contents($filename,$data,LOCK_EX);
// array_push($allStudents,$student);
// $data = serialize($allStudents);
// file_put_contents($filename,$data,LOCK_EX);