<?php
/**
 * @package     pH7.Framework
 * @subpackage  Parse
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @copyright   (c) 2012-2013, Pierre-Henry Soria. All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 * @version     $Id: Emoticon.php 2013-02-04 pierrehs $
 */

namespace PH7\Framework\Parse;
use PH7\Framework\Layout\Optimization;

defined('PH7') or exit('Restricted access');

class Emoticon extends \PH7\Framework\Service\Emoticon
{

    /**
     * Parse the contents.
     *
     * @static
     * @param string $sContents
     * @param boolean $bIsDataUri Default: TRUE
     * @return string Contents
     */
    public static function init($sContents, $bIsDataUri = true)
    {
        $aEmoticons = static::gets();

        foreach($aEmoticons as $sEmoticonKey => $aEmoticon)
            if($bIsDataUri)
                $sContents = str_ireplace(static::getCode($aEmoticon), '<img src=\'' . Optimization::dataUri(static::getPath($sEmoticonKey)) . '\' alt=\'' . static::getName($aEmoticon) . '\' />', $sContents);
            else
                $sContents = str_ireplace(static::getCode($aEmoticon), '<img src=\'' . static::getUrl($sEmoticonKey) . '\' alt=\'' . static::getName($aEmoticon) . '\' />', $sContents);

        return $sContents;
    }

}
