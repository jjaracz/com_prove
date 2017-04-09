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

	protected $form;

	protected $item;

	/**
	 * Display item view
	 *
	 * @param   string $tpl The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 *
	 * @since   4.0
	 */
	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}


		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   4.0
	 */
	protected function addToolbar()
	{
		JFactory::getApplication()->input->set('hidemainmenu', true);

		$isNew      = ($this->item->id == 0);

		JToolbarHelper::title($isNew ? JText::_('COM_PROVE_CREATE_EMAIL') : JText::_('COM_PROVE_EDIT_EMAIL'), 'address contact');

		JToolbarHelper::saveGroup(
			[
				['apply', 'item.apply'],
				['save', 'item.save'],
				['save2new', 'item.save2new']
			],
			'btn-success'
		);
		JToolbarHelper::cancel('item.cancel');
	}

}