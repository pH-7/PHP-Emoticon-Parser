<?php
/**
 * @desc        Simple example of what our library can do.
 * @author      SORIA Pierre-Henry
 * @email       pierrehs@hotmail.com
 * @link        http://github.com/pH-7
 * @copyright   (c) 2012-2013, Pierre-Henry Soria. All Rights Reserved.
 * @license     CC-BY - http://creativecommons.org/licenses/by/3.0/
 * @version     $Id: index.php 2013-02-04 pierrehs $
 */

define('PH7', true);

// This file is a simple example of what our library can do.

require 'app/Init.php';

$sString = 'Hello World ;) :)';
$sString .= ':d Oh my god :p xd :lol:';

$sOutput = \PH7\Framework\Parse\Emoticon::init($sString);

require 'template/index.html.php';
