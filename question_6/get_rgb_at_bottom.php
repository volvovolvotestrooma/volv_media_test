<?php
// how to run 
//  php get_rgb_at_bottom.php
//
// image is stored here s.png 
// image is 1024x1024
$im = imagecreatefrompng("s.png");
//getting rgb from 922 and 1024 postion
$rgb = imagecolorat($im, 922-1, 1024-1);
$r = ($rgb >> 16) & 0xFF;
$g = ($rgb >> 8) & 0xFF;
$b = $rgb & 0xFF;

var_dump($r, $g, $b);
