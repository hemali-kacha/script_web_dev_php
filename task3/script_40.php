<?php
$color=array("red","green","blue","yellow");
$fruits=array("apple","orange");
array_splice($color,0,2,$fruits);
print_r($color);