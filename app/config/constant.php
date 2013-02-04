<?php
/**
 * @package     pH7
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @copyright   (c) 2012-2013, Pierre-Henry Soria. All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 * @version     $Id: constant.php 2013-02-04 pierrehs $
 */

namespace PH7;
defined('PH7') or exit('Restricted access');

################ VARIABLES ################

$sPhp_self = dirname(htmlspecialchars($_SERVER['PHP_SELF']));
$sHttp = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']=='on')) ? 'https://' : 'http://';

################ CONSTANTS ################

######## OTHERS ########
define('PH7_URL_PROT', $sHttp);
define('PH7_SELF',(substr($sPhp_self,-1) !== '/') ? $sPhp_self . '/' : $sPhp_self);
define('PH7_STATIC', 'static/');
define('PH7_CSS', 'css/');
define('PH7_IMG', 'img/');

######## PATH ########
define('PH7_PATH_ROOT', dirname(dirname(__DIR__)) . '/');
define('PH7_PATH_APP', PH7_PATH_ROOT . 'app/');
define('PH7_PATH_APP_CONFIG', PH7_PATH_ROOT . 'app/config/');
define('PH7_PATH_FRAMEWORK', PH7_PATH_APP . 'class/');
define('PH7_PATH_TPL', PH7_PATH_ROOT . 'template/');
define('PH7_PATH_STATIC', PH7_PATH_ROOT . PH7_STATIC);

######## URL ########
define('PH7_URL_ROOT', PH7_URL_PROT . $_SERVER['HTTP_HOST'] . PH7_SELF);
define('PH7_URL_STATIC', PH7_URL_ROOT . PH7_STATIC);




