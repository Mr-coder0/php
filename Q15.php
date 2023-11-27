<?php
$width = 300;
$height = 300;
$image = imagecreatetruecolor($width, $height);

// box is created
$white = ImageColorAllocate($image,0xFF,0xFF,0xFF);
     $black = ImageColorAllocate($image,0x00,0x00,0x00);
imagefill($image, 50, 50, $black);

//rotate a box
$rotated = imagerotate($image, 45, $white);
//text
$text = "black box";
$font = 4;
$x = 150;
$y = 150;
$text_color = imagecolorallocate($rotated, 255, 255, 255);
imagestring($rotated, $font, $x, $y, $text, $text_color);
// result
header("Content-type: image/jpeg");
imagejpeg($rotated);
imagedestroy($rotated);
?>
