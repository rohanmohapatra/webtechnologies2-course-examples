<?php	
    //error_reporting(E_ALL); ini_set('display_errors', 'on'); echo "aaa"; ob_flush();
	// Create the size of image or blank image 
    $image = imagecreate(500, 300); 
    
    // Set the background color of image 
    $background_color = imagecolorallocate($image, 0, 153, 0); 
    
    // Set the text color of image 
    $text_color = imagecolorallocate($image, 255, 255, 255); 
    
    // Function to create image which contains string. 
    imagestring($image, 5, 180, 100,  "New Stuff", $text_color); 
    imagestring($image, 3, 160, 120,  "Stuff", $text_color); 
    
    header("Content-type: image/jpeg"); 
    
    imagejpeg($image); 
    imagedestroy($image); 
?>