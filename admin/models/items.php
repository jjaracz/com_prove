<?php
/**
 * Items Model for a Prove Component.
 *
 * @package     Joomla.Administrator
 * @subpackage  com_prove
 * @since       4.0
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die('Restricted access');

/**
 * Model class for items
 *
 * @since  4.0
 */
class  ProveModelItems extends JModelList
{
	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return  string  The query to database.
	 *
	 * @since   4.0
	 */
	public function getListQuery()
	{
		$db    = $this->getDbo();
		$query = $db->getQuery(true);
		$q2    = $db->getQuery(true);
		$q2
			->select('id, name, email, published, null')
			->from('#__prove_emails')
			->where('user_id=0');
		$query
			->select('p.id, p.name, u.email, p.published, u.name as user_name')
			->from('#__prove_emails as p')
			->innerJoin('#__users as u ON p.user_id=u.id')
			->union($q2);
		return $query;
	}


}