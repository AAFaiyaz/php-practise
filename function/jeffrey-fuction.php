<?php

// function say_hello($name = 'buddy'){
//     return "Hi There $name";
// }
// $greeting = say_hello('Joe');

// echo $greeting;

// $arr = array(
//     'name' => 'Joe',
//     'age' => 40,
//     'profession' => 'Web Developer'
// );


// function pp($value) {
//     echo '<pre>';
//     print_r($value);
//     echo '<pre>';
// }
// pp($arr);

// function array_pluck($toPluck,$arr){
//     $ret = [];
//     foreach($arr as $item){
//         $ret [] = $item[$toPluck];
//     }
//     // print_r($ret);
//     return $ret;
// }

function array_pluck($toPluck,$arr){
   return array_map(function($item) use($toPluck){
    // print_r($item);
    return $item[$toPluck];
   },$arr);
}


$people = array(
    array('name' => 'Abdullah Al Faiyaz', 'age' => 28, 'occupation' => 'Web Developer'),
    array('name' => 'Joe', 'age' => 29, 'occupation' => 'Developer'),
    array('name' => 'John', 'age' => 30, 'occupation' => 'Back-end'),
);

$plucked = array_pluck('name',$people);

print_r($plucked);