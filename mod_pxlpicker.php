<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_pxlpicker
 *
 * @copyright   Christian Friedemann = https://pixelstun.de 
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once __DIR__ . '/helper.php';

$path		= $params->get('path');
$alt		= $params->get('alt');
$id			= $params->get('id');
$class 		= $params->get('class');
$inline		= $params->get('inline');
$title		= $params->get('title');

require JModuleHelper::getLayoutPath('mod_pxlpicker', $params->get('layout', 'default'));
