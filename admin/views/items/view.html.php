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
 * View class for list of emails
 *
 * @since  4.0
 */
class ProveViewItems extends JViewLegacy
{

	protected $pagination;
	protected $items;
	protected $state;
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
		$this->items = $this->get('Items');
		$this->pagination = $this->get('Pagination');
		$this->state = $this->get('State');
		$this->addToolbar();
		return parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolbar()
	{
		JToolbarHelper::title(JText::_('COM_PROVE_LIST_EMAILS'), 'address contact');
		JToolbarHelper::addNew('item.add');
		JToolbarHelper::publish('items.publish', 'JTOOLBAR_PUBLISH', true);
		JToolbarHelper::unpublish('items.unpublish', 'JTOOLBAR_UNPUBLISH', true);
		JToolbarHelper::trash('items.trash');
		JToolBarHelper::deleteList('Are you sure ?', 'items.delete');
		JToolbarHelper::archiveList('items.archive');
	}
}