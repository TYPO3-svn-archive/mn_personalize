<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Mattias Nilsson <tollepjaer@gmail.com>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package mn_personalize
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_MnPersonalize_Controller_PersonalizeFilterController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$personalizeFilters = $this->personalizeFilterRepository->findAll();
		$this->view->assign('personalizeFilters', $personalizeFilters);
	}

	/**
	 * action show
	 *
	 * @param $personalizeFilter
	 * @return void
	 */
	public function showAction(Tx_MnPersonalize_Domain_Model_PersonalizeFilter $personalizeFilter) {
		$this->view->assign('personalizeFilter', $personalizeFilter);
	}

	/**
	 * action new
	 *
	 * @param $newPersonalizeFilter
	 * @dontvalidate $newPersonalizeFilter
	 * @return void
	 */
	public function newAction(Tx_MnPersonalize_Domain_Model_PersonalizeFilter $newPersonalizeFilter = NULL) {
		$this->view->assign('newPersonalizeFilter', $newPersonalizeFilter);
	}

	/**
	 * action create
	 *
	 * @param $newPersonalizeFilter
	 * @return void
	 */
	public function createAction(Tx_MnPersonalize_Domain_Model_PersonalizeFilter $newPersonalizeFilter) {
		$this->personalizeFilterRepository->add($newPersonalizeFilter);
		$this->flashMessageContainer->add('Your new PersonalizeFilter was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $personalizeFilter
	 * @return void
	 */
	public function editAction(Tx_MnPersonalize_Domain_Model_PersonalizeFilter $personalizeFilter) {
		$this->view->assign('personalizeFilter', $personalizeFilter);
	}

	/**
	 * action update
	 *
	 * @param $personalizeFilter
	 * @return void
	 */
	public function updateAction(Tx_MnPersonalize_Domain_Model_PersonalizeFilter $personalizeFilter) {
		$this->personalizeFilterRepository->update($personalizeFilter);
		$this->flashMessageContainer->add('Your PersonalizeFilter was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $personalizeFilter
	 * @return void
	 */
	public function deleteAction(Tx_MnPersonalize_Domain_Model_PersonalizeFilter $personalizeFilter) {
		$this->personalizeFilterRepository->remove($personalizeFilter);
		$this->flashMessageContainer->add('Your PersonalizeFilter was removed.');
		$this->redirect('list');
	}

}
?>