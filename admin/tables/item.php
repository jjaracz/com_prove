<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_prove
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Prove Table class.
 *
 * @since  1.0
 */
class ProveTableItem extends JTable
{

	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  $db  Database connector object
	 *
	 * @since   1.0
	 */
	public function __construct(JDatabaseDriver $db)
	{
		$this->typeAlias = 'com_prove.email';
		parent::__construct('#__prove_emails', 'id', $db);
	}
}