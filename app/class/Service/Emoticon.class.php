<?php
/**
 * @package     pH7.Framework
 * @subpackage  Service
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @copyright   Copyright pH7 Script All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 * @version     $Id: Emoticon.class.php 2012-02-21 pierrehs $
 */
 
namespace PH7\Framework\Service;
defined('PH7') or exit('Restricted access');

class Emoticon {
	
	const DIR = 'smile/', EXT = '.gif';
	
	
	/**
	 * @desc Gets the list of emoticons
	 * @return array
	 */
	public static function gets() {
		return include PH7_PATH_APP . 'config/emoticon.php';
	}
	
	/**
	 * @desc Gets the path of emoticon
	 * @param string $sName
	 * @return emoticon path
	 */
	public static function getPath($sName) {
		return PH7_PATH_STATIC . PH7_IMG . self::DIR . $sName . self::EXT;
	}

	/**
	 * @desc Gets the URL of emoticon
	 * @param string $sName
	 * @return emoticon URL
	 */
	public static function getUrl($sName) {
		return PH7_URL_STATIC . PH7_IMG . self::DIR . $sName . self::EXT;
	}
	
	/**
	 * @desc Gets the name of emoticon
	 * @param array $aVal
	 * @return emoticon name
	 */
	public static function getName($aVal) {
		return $aVal[1];
	}

	/**
	 * @desc Gets the emoticon code
	 * @param array $aVal
	 * @return emoticon code
	 */
	public static function getCode($aVal) {
		return $aVal[0];
	}
	
}
