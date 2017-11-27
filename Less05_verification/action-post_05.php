<?php
//presense
$value="";
if(!isset($value) or empty($value)){
    echo "Validation failed<br>";
}

//max min
$value="as";
$min=3;
if(strlen($value)<$min){
    echo "Validation failed<br>";
}
$max=6;
if(strlen($value)<$max){
    echo "Validation failed<br>";
}

//type

//unique


//format
$value='test@mail.ru';
if(!preg_mutch("/@/",$value)){
    echo "Validation failed<br>";
}

?>