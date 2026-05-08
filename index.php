<?php    

// Store the file name into variable 
$file = 'sounds_from_the_stone_age.pdf'; 
$filename = 'sounds_from_the_stone_age.pdf';    

// Header content type 
header('Content-type: application/pdf');    
header('Content-Disposition: inline; filename="' . $filename . '"');    
header('Content-Transfer-Encoding: binary');    
header('Accept-Ranges: bytes');    
// Read the file 
@readfile($file);    

?>

