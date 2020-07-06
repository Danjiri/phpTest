<?php
$array = array(
    'name' => '鈴木',
    'age' => 25,
    'blood' => 'ab'
);

echo $array['age'].'<br>';

foreach($array as $var){
    echo $var.'<br>';
};