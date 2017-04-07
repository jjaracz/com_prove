<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_prove
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('Restricted access');

/**
 * View class to add or edit email
 *
 * @since  4.0
 */
class ProveViewItem extends JViewLegacy
{
	
	/**
	 * Display the view.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise an Error object.
	 * @since   4.0
	 */
	public function display($tpl = null)
	{
		echo "<h1>WORK</h1>";
		return parent::display($tpl);
	}
}