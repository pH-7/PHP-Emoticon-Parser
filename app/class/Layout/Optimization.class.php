<?php
/**
 * @package     pH7.Framework
 * @subpackage  Layout
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @copyright   Copyright pH7 Script All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 * @version     $Id: Optimization.class.php 2012-02-21 pierrehs $
 */
 
namespace PH7\Framework\Layout;

class Optimization {
   
  public static function dataUri($sFile) {

     // Switch to right MIME-type
     $sExt = strtolower(substr(strrchr($sFile, '.'), 1));
     
     switch($sExt) {
					default:
					case 'gif':
					case 'jpg':
					case 'png':
						$sMimeType = 'image/'. $sExt;
					break;
					case 'ico':
					   $sMimeType = 'image/x-icon';
					break;
					case 'eot':
						$sMimeType = 'application/vnd.ms-fontobject';
					break;
					case 'otf':
					case 'ttf':
					case 'woff':
						$sMimeType = 'application/octet-stream';
					break;
				}
				
      $sBase64 = base64_encode(file_get_contents($sFile));
      return "data:$sMimeType;base64,$sBase64";
   }
   
}
