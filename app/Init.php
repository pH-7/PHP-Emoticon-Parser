<?php
/**
 * @package     pH7
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @copyright   (c) 2012-2013, Pierre-Henry Soria. All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 * @version     $Id: Init.php 2013-02-04 pierrehs $
 */

namespace PH7;
defined('PH7') or exit('Restricted access');

require __DIR__ . '/config/constant.php';
require PH7_PATH_FRAMEWORK . 'Loader/Autoloader.php';
Framework\Loader\Autoloader::init();
