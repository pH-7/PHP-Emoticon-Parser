<?php
/**
 * @package     pH7.Framework
 * @subpackage  Parse
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @copyright   Copyright pH7 Script All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 * @version     $Id: Emoticon.class.php 2012-02-21 pierrehs $
 */
 
namespace PH7\Framework\Parse;
use PH7\Framework\Layout\Optimization;

defined('PH7') or exit('Restricted access');

class Emoticon extends \PH7\Framework\Service\Emoticon {
	
	/**
	 * @desc Parse the contents
	 * @param string $sContents
	 * @return string Contents
	 */
	public static function init($sContents) {
		$aEmoticons = static::gets();
		
		foreach($aEmoticons as $sEmoticonKey => $aEmoticon) {
			$sContents = str_ireplace(static::getCode($aEmoticon), '<img src="' . Optimization::dataUri(static::getPath($sEmoticonKey)) .'" alt="' . static::getName($aEmoticon) . '" />', $sContents);
		}
		
		return $sContents;
	}
	
}
