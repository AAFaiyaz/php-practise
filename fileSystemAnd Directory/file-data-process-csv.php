<?php

$filename = 'data2.txt';
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

/*
    $fp = fopen($filename,'w');
    foreach($students as $student){
        $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
        fwrite($fp,$data);
    }
    fclose($fp);
*/
// $fp = fopen($filename,'r');
// while($data = fgets($fp)){
//     $student = explode(',',$data);
//     // var_dump($student[0]);
//     printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);

//FOR CSV comma seperated value

$fp = fopen($filename,'w');
    foreach($students as $student){
        // $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
        // fwrite($fp,$data);
        fputcsv($fp,$student);
    }
    fclose($fp);

// $fp = fopen($filename,'r');
// while($student = fgetcsv($fp)){
//     // $student = explode(',',$data);
//     // var_dump($student[0]);
//     printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);

//Save another student in csv

// $student =  array(
//     'fname' => 'Mosfit',
//     'lname' => 'Roy',
//     'age' => 13,
//     'class' => 7,
//     'roll' => 14
// );

// $fp =fopen($filename,'a'); // append new data
// fputcsv($fp,$student);
// fclose($fp);

//For deleting data from csv
// file()put the data into an array
$data = file($filename);
print_r($data);
unset($data[1]);
$fp = fopen($filename,'w');
foreach($data as $line){
    fwrite($fp,$line);    
}
fclose($fp);