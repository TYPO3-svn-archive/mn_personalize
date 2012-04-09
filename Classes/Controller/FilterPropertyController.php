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
class Tx_MnPersonalize_Controller_FilterPropertyController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$filterProperties = $this->filterPropertyRepository->findAll();
		$this->view->assign('filterProperties', $filterProperties);
	}

	/**
	 * action show
	 *
	 * @param $filterProperty
	 * @return void
	 */
	public function showAction(Tx_MnPersonalize_Domain_Model_FilterProperty $filterProperty) {
		$this->view->assign('filterProperty', $filterProperty);
	}

	/**
	 * action new
	 *
	 * @param $newFilterProperty
	 * @dontvalidate $newFilterProperty
	 * @return void
	 */
	public function newAction(Tx_MnPersonalize_Domain_Model_FilterProperty $newFilterProperty = NULL) {
		$this->view->assign('newFilterProperty', $newFilterProperty);
	}

	/**
	 * action create
	 *
	 * @param $newFilterProperty
	 * @return void
	 */
	public function createAction(Tx_MnPersonalize_Domain_Model_FilterProperty $newFilterProperty) {
		$this->filterPropertyRepository->add($newFilterProperty);
		$this->flashMessageContainer->add('Your new FilterProperty was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $filterProperty
	 * @return void
	 */
	public function editAction(Tx_MnPersonalize_Domain_Model_FilterProperty $filterProperty) {
		$this->view->assign('filterProperty', $filterProperty);
	}

	/**
	 * action update
	 *
	 * @param $filterProperty
	 * @return void
	 */
	public function updateAction(Tx_MnPersonalize_Domain_Model_FilterProperty $filterProperty) {
		$this->filterPropertyRepository->update($filterProperty);
		$this->flashMessageContainer->add('Your FilterProperty was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $filterProperty
	 * @return void
	 */
	public function deleteAction(Tx_MnPersonalize_Domain_Model_FilterProperty $filterProperty) {
		$this->filterPropertyRepository->remove($filterProperty);
		$this->flashMessageContainer->add('Your FilterProperty was removed.');
		$this->redirect('list');
	}

}
?>