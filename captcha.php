<?php
/**
 * Created by PhpStorm.
 * User: lulu
 * Date: 16/8/20
 * Time: 18:36
 */

$image = imagecreatetruecolor(100, 30);
$bgcolor = imagecolorallocate($image, 205, 205, 205);
imagefill($image, 0, 0, $bgcolor);

//for($i= 0; $i < 4; $i++) {
//    $font_size = 5;
//    $font_color = imagecolorallocate($image, rand(0, 150), rand(0, 150), rand(20,100));
//    $content = rand(0, 9);
//
//    $x = $i * 100 / 4 + rand(5, 10);
//    $y = rand(5, 10);
//    imagestring($image, $font_size, $x, $y, $content, $font_color);
//}

//随机内容
for($i= 0; $i < 4; $i++) {
    $font_size = 6;
    $font_color = imagecolorallocate($image, rand(0, 150), rand(0, 150), rand(20,100));
    $data = '0123456789abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $content = substr($data, rand(0, strlen($data)-1), 1);

    $x = $i * 100 / 4 + rand(7, 8);
    $y = rand(5, 10);
    imagestring($image, $font_size, $x, $y, $content, $font_color);
}


//随机干扰点
for ($i= 0; $i < 500; $i++) {
    $point_color = imagecolorallocate($image, rand(75, 200), rand(75, 220), rand(70,180));
    imagesetpixel($image, rand(0, 100), rand(0,100), $point_color);
}


//随机线
for ($i= 0; $i < 5; $i++) {
    $line_color = imagecolorallocate($image, rand(150, 200), rand(160, 220), rand(170, 220));
    imageline($image,rand(0, 99), rand(0, 29), rand(0, 99), rand(0, 29), $line_color);
}

header('content-type:image/png');
imagepng($image);
imagedestroy($image);