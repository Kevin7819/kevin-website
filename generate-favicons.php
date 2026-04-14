<?php

// Generate favicon-32.png
$img = imagecreatetruecolor(32, 32);
imagesavealpha($img, true);
$transparent = imagecolorallocatealpha($img, 0, 0, 0, 127);
imagefill($img, 0, 0, $transparent);

// Background gradient
$color1 = imagecolorallocate($img, 99, 102, 241); // #6366f1
$color2 = imagecolorallocate($img, 139, 92, 246);  // #8b5cf6

// Draw rounded rectangle background
for ($i = 0; $i < 32; $i++) {
    for ($j = 0; $j < 32; $j++) {
        $t = $i / 32;
        $r = imagescolorallocate($img, 
            99 + (139 - 99) * $t, 
            102 + (92 - 102) * $t, 
            241 + (246 - 241) * $t
        );
        imagesetpixel($img, $i, $j, $r);
    }
}

// Draw </> text
$white = imagecolorallocate($img, 255, 255, 255);
$font = 3; // Built-in font
$text = '</>';
$x = (32 - imagefontwidth($font) * strlen($text)) / 2;
$y = (32 - imagefontheight($font)) / 2;
imagestring($img, $font, $x, $y, $text, $white);

imagepng($img, public_path('favicon-32.png'));
imagedestroy($img);

// Generate apple-touch-icon.png (180x180)
$img2 = imagecreatetruecolor(180, 180);
$bg = imagecolorallocate($img2, 99, 102, 241);
imagefill($img2, 0, 0, $bg);

$white2 = imagecolorallocate($img2, 255, 255, 255);
$font2 = 5;
$text2 = '</>';
$x2 = (180 - imagefontwidth($font2) * strlen($text2)) / 2;
$y2 = (180 - imagefontheight($font2)) / 2;

// Draw larger text with multiple lines for better appearance
imagestring($img2, $font2, $x2, $y2 - 20, '<', $white2);
imagestring($img2, $font2, $x2 + 5, $y2 + 10, '/', $white2);
imagestring($img2, $font2, $x2 + 10, $y2 + 40, '>', $white2);

imagepng($img2, public_path('apple-touch-icon.png'));
imagedestroy($img2);

echo "Favicons generated successfully!\n";
