<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_prove
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('Restricted access');

$controller = JControllerLegacy::getInstance('Prove');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
