<?php
$filename = 'data.txt';
if(is_readable($filename)){
    
}
// we are reading file hence 'r'
$fp = fopen($filename, 'r');
//For reading a line fgets. we can also add parameters such as how many characters it will read
while ($line = fgets($fp)){
    echo $line;
}
//There is a inner cursor which control the read. So the inner cursor is at the end after using the loop
rewind($fp);
// Hence rewind function which will move the cursor to the first and then loop again
while ($line = fgets($fp)){
    echo $line;
}
// fseek($fp,8); // we are controlling the cursor with fseek and extra parameter
// fseek($fp,-1,SEEK_END) basically we are moving the cursor to the end manually using -1 and SEEK_END



fclose($fp);

//For reading whole data at once we use file(), file_get_contents();
$data = file($filename); // file() treats the data as array
print_r($data);
$data = file_get_contents($filename);
echo "\n";
echo $data;

