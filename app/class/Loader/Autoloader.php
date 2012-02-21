<?php
 /* 
 * @package     pH7.Framework
 * @subpackage  Autoloader
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @copyright   Copyright pH7 Script All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 * @version     $Id: Autoloader.php 2012-02-21 pierrehs $
 */
 
namespace PH7\Framework\Loader;
defined('PH7') or exit('Restricted access');

class Autoloader {

   public static function loadClass($sClass) {
 
      /**
       * @param Hack to remove namespace
       */
         // Our classes
          $sClass = str_replace ('PH7\Framework','',$sClass);
          
         // For all classes
          $sClass = str_replace('\\', '/', $sClass);
          $sClass = str_replace('//', '/', $sClass);
          
          
        /***** To include the libraries *****/
        
        
        // To include Classes
        if(is_file(PH7_PATH_FRAMEWORK . $sClass . '.class.php')) {
            require PH7_PATH_FRAMEWORK . $sClass . '.class.php';
        } 
        
        // To include Interfaces
        else if(is_file(PH7_PATH_FRAMEWORK . $sClass . '.interface.php')) {
            require PH7_PATH_FRAMEWORK . $sClass . '.interface.php';
        } 


   } 

  public static function init() {
   spl_autoload_register(null, false);
   spl_autoload_extensions('.class.php, .interface.php');
   spl_autoload_register(array('self', 'loadClass'));
   }
   
}
