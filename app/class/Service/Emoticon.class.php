<?php
/**
 * @package     pH7.Framework
 * @subpackage  Service
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @copyright   (c) 2012-2013, Pierre-Henry Soria. All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 * @version     $Id: Emoticon.class.php 2013-02-04 pierrehs $
 */

namespace PH7\Framework\Service;
defined('PH7') or exit('Restricted access');

/**
 * @class Abstract Class
 */
abstract class Emoticon
{

    const DIR = 'smile/', EXT = '.gif';

    /**
     * Private constructor to prevent instantiation of class since it is a private class.
     *
     * @access private
     */
    private function __construct() {}

    /**
     * Gets the list of emoticons.
     *
     * @access protected
     * @static
     * @return array
     */
    protected static function gets()
    {
        return include PH7_PATH_APP_CONFIG . 'emoticon.php';
    }

    /**
     * Gets the path of emoticon.
     *
     * @access protected
     * @static
     * @param string $sName
     * @return Emoticon path.
     */
    protected static function getPath($sName)
    {
        return PH7_PATH_STATIC . PH7_IMG . static::DIR . $sName . static::EXT;
    }

    /**
     * Gets the URL of emoticon.
     *
     * @access protected
     * @static
     * @param string $sName
     * @return Emoticon URL.
     */
    protected static function getUrl($sName)
    {
        return PH7_URL_STATIC . PH7_IMG . static::DIR . $sName . static::EXT;
    }

    /**
     * Gets the name of emoticon.
     *
     * @access protected
     * @static
     * @param array $aVal
     * @return Emoticon name.
     */
    protected static function getName($aVal)
    {
        return $aVal[1];
    }

    /**
     * Gets the emoticon code.
     *
     * @access protected
     * @static
     * @param array $aVal
     * @return Emoticon code.
     */
    protected static function getCode($aVal)
    {
        return $aVal[0];
    }

    /**
     * Block cloning.
     *
     * @access private
     */
    private function __clone() {}

}
