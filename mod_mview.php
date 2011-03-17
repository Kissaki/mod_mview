<?php
/**
 * @version		$Id: mod_banners.php 20806 2011-02-21 19:44:59Z dextercowley $
 * @package		Joomla.Site
 * @subpackage	mod_banners
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$refreshinterval = intval($params->get('refreshinterval'));

require JModuleHelper::getLayoutPath('mod_mview', $params->get('layout', 'default'));
