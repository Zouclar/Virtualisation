<?php


    $x = 800;
    $y = 700;

    $gd = imagecreatetruecolor($x, $y);
    $blue = imagecolorallocate($gd, 41, 181, 247);
    

    foreach ($tab as $key) {
      foreach ($key as $element) {
        if ($element == 0) {
          imagesetpixel($gd, round($x),round($y), $blue);
          	$x++;
        	$y++;
        } else {
          imagesetpixel($gd, round($x),round($y), $blue);
	        $x++;
	        $y++;
        }
        
      }
    }
    header('Content-Type: image/png');
    imagepng($gd);

    ?>