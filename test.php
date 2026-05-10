<!DOCTYPE html> 
<html> 
<body>


<?php
echo 'Hello World!<br>';
echo phpversion();


/*function resizeImage($imagePath, $width, $height, $filterType, $blur, $bestFit, $cropZoom) */

//header('Content-type: text/plain');
 $image = new Imagick('/srv/http/desire-direct/images/surco.gif');

//$imagick = new \Imagick('/srv/http/desire-direct/images/surco.gif'); 
//$imagick->resizeImage(800, 0, \Imagick::FILTER_LANCZOS, 1); // Height is set to 0 to preserve aspect ratio 

$image->thumbnailImage(100, 0);

//header("Content-Type: image/gif");
//echo $imagick->getImageBlob();
echo $image;


















header('Content-type: image/jpeg'); $email= 'example@example.com'; $email_length=strlen($email); $font_size= 4; $image_height= imagefontheight($font_size); $image_width = imagefontwidth($font_size)*$email_length; $image=imagecreate($image_width, $image_height); imagecolorallocate($image,255,255,255); $font_color= imagecolorallocate($image,0,0,0); imagestring($image,$font_size, 0, 0, $email, $font_color); imagejpeg($image);?>



<!--
installed php, php-apache, php-imagick;
edit /etc/httpd/conf/httpd.conf according to https://wiki.archlinux.org/title/Apache_HTTP_Server#PHP; maybe need librsvg dependency for svg support?
enabled imagick extension in /etc/php/conf.d/imagick.ini;
->sudo systemctl restart httpd.service.
-->



</body> 
</html>
