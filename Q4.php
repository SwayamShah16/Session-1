<?php
$string = "Hello World ,Welcome to the Site";

$name="Swayam";
$dept='Computer';

echo " My name is $name";
echo '<br>';
echo 'My dept is '.$dept.' in college';
echo '<br>';

$str1 = "Hello";
$str2 = "Welcome";
echo $str1.$str2;
echo '<br>';


echo strpos($string,"Welcome");
echo '<br>';


echo strlen($string);
echo '<br>';


echo strtolower($string); 
echo '<br>';


echo str_replace("World","User","Hello World ,Welcome to the Site");
echo '<br>';
?>