<?php
// In ra tất cả các số lặp lại trên 3 lần từ file input.txt
$myfile = fopen("input.txt", "r") or die("Unable to open file!");//Open file
$text_array = preg_split("/[\s,]+/",fread($myfile,filesize("input.txt")));// Delete downline and read file input.txt and add to the array
$count = array_count_values($text);// count the number of appearance's number
$number_count = array();// add result of count number
foreach ($count as $key=>$value){
    if($value >= 3){
        array_push($number_count,$key);// push to array
    }
}
$output = implode(',',$number_count);// implode an array to string
echo 'Number appearance more than 3 times is:'.$output.' ';