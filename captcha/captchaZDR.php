<?php
/*
Captcha ZDR

=========================
Reduced Version
by KKE
http://www.kkeonline.com

Change log:
- Only String Function used (Display like SHT54HG)
- Addition and Deduction are take off (Not display 5+4=?,  8-3=?)
- Reorganize all files into only one single folder for convenience use.
- Replace with new Vera fonts set.
=========================

This is simple powerfull captcha tool writen in PHP
for protecting your web FORMS from spamers.

Copyright (C) 2007  Zdravko Shishmanov 
Bulgaria 
Email: zdrsoft@yahoo.com
http://www.webtoolbag.com

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/


class captchaZDR {

  var $UserString;
  var $font_path;
  
  function captchaZDR(){
		$fonts = array('Vera.ttf', 'VeraBI.ttf', 'VeraIt.ttf', 'VeraMono.ttf', 'VeraMoBI.ttf', 'VeraMoIt.ttf', 'VeraSe.ttf', 'VeraSeBd.ttf');
		shuffle($fonts);
        $this->font_path = './fonts/'.current($fonts);
  }

  function LoadPNG(){  
       $bgNUM = rand(1,8);
       $im = @imagecreatefrompng('./png/bg'.$bgNUM.'.png'); /* Attempt to open */
       if (!$im) { 
           $im  = imagecreatetruecolor(150, 30); /* Create a blank image */
           $bgc = imagecolorallocate($im, 255, 255, 255);
           $tc  = imagecolorallocate($im, 0, 0, 0);
           imagefilledrectangle($im, 0, 0, 150, 30, $bgc);
           imagestring($im, 1, 5, 5, "Error loading $imgname", $tc);
       }
       return $im;
  }
    
  function drawElipse($image){
        for($i=0;$i<5;$i++){
            // choose a color for the ellipse
            $red         = rand(0,155);
            $green       = rand(0,155);
            $blue        = rand(0,155);
            $col_ellipse = imagecolorallocate($image, $red, $green, $blue);
            // draw the ellipse
            $cx = rand(50,250);
            $cy = rand(50,250);
            $cw = rand(30,250);
            $ch = rand(20,250);
            imageellipse($image, $cx, $cy, $cw, $ch, $col_ellipse);
        }
        
        foreach (range('A', 'Z') as $letter) {
            $red    = rand(0,155);
            $green  = rand(0,155);
            $blue   = rand(0,155);
            $col_ellipse  = imagecolorallocate($image, $red, $green, $blue);  
            $font_size    = 3; //rand(1,12);
            $x      = rand(0,200);
            $y      = rand(0,100);
            imagechar($image, $font_size, $x, $y, $letter, $col_ellipse);       
        } 

        foreach (range('0', '9') as $letter) {
            $red    = rand(0,155);
            $green  = rand(0,155);
            $blue   = rand(0,155);
            $col_ellipse  = imagecolorallocate($image, $red, $green, $blue);  
            $font_size    = 1; 
            $x      = rand(0,200);
            $y      = rand(0,100);
            imagechar($image, $font_size, $x, $y, $letter, $col_ellipse);                 
        }         
       
  }
  
  function task_string(){
  
         // create a image from png bank
        $image = $this->LoadPNG(); 
  
        $string_a = array("A","B","C","D","E","F","G","H","J","K",
                          "L","M","N","P","R","S","T","U","V","W","X","Y","Z",
                          "2","3","4","5","6","7","8","9");

		$width=0;
  
        for($i=0;$i<5;$i++)
        {
            $colour     = imagecolorallocate($image, rand(0,155), rand(0,155), rand(0,155));
            $font		= $this->font_path;
            $angle      = rand(-15,15);
            // Add the text
            $width_pos  = rand(20,30);
            $width      = $width  + $width_pos;
//            $height     = rand(35,75);
            $height     = rand(35,46);
            $temp       = $string_a[rand(0,25)];
            $this->UserString .= $temp;
            imagettftext($image, 26, $angle, $width, $height, $colour, $font, $temp);
            $width    = $width + 3;
            $height   = $height + 3;
            imagettftext($image, 26, $angle, $width, $height, $colour, $font, $temp);

        }
        
        $_SESSION['captcha'] = $this->UserString;
        
        return $image;
  }
  
  function display(){
 	  
        $image  = $this->task_string();
        $this->drawElipse($image);
        
        // output the picture
        header("Content-type: image/png");
        imagepng($image);  
  } 

  function check_result(){
	if($_SESSION['captcha']!=$_REQUEST['capt'] || $_SESSION['captcha']=='BADCODE')
	{ 	
		$_SESSION['captcha']='BADCODE';
		return false;
	} 
	else 
	{
	  	return true;
	}
  } 

}

?>
