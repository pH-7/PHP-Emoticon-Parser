<?php
/**
 * @package     pH7.Framework
 * @subpackage  Layout
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @copyright   (c) 2012-2013, Pierre-Henry Soria. All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 * @version     $Id: Optimization.class.php 2013-02-04 pierrehs $
 */

namespace PH7\Framework\Layout;

class Optimization
{

    /**
     * Data URIs base64 encoding for images.
     *
     * @param string $sFile
     * @return string Returns format: data:[<MIME-type>][;base64],<data>
     */
    public static function dataUri($sFile)
    {

        // Switch to right MIME-type
        $sExt = strtolower(substr(strrchr($sFile, '.'), 1));

        switch($sExt)
        {
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
