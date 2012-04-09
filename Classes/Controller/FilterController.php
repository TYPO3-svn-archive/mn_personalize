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
class Tx_MnPersonalize_Controller_FilterController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * filterRepository
	 *
	 * @var Tx_MnPersonalize_Domain_Repository_FilterRepository
	 */
	protected $filterRepository;

	/**
	 * injectFilterRepository
	 *
	 * @param Tx_MnPersonalize_Domain_Repository_FilterRepository $filterRepository
	 * @return void
	 */
	public function injectFilterRepository(Tx_MnPersonalize_Domain_Repository_FilterRepository $filterRepository) {
		$this->filterRepository = $filterRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$filters = $this->filterRepository->findAll();
		$this->view->assign('filters', $filters);
	}

	/**
	 * action show
	 *
	 * @param $filter
	 * @return void
	 */
	public function showAction(Tx_MnPersonalize_Domain_Model_Filter $filter) {
		$this->view->assign('filter', $filter);
	}

	/**
	 * action new
	 *
	 * @param $newFilter
	 * @dontvalidate $newFilter
	 * @return void
	 */
	public function newAction(Tx_MnPersonalize_Domain_Model_Filter $newFilter = NULL) {
		$this->view->assign('newFilter', $newFilter);
	}

	/**
	 * action create
	 *
	 * @param $newFilter
	 * @return void
	 */
	public function createAction(Tx_MnPersonalize_Domain_Model_Filter $newFilter) {
		$this->filterRepository->add($newFilter);
		$this->flashMessageContainer->add('Your new Filter was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param $filter
	 * @return void
	 */
	public function editAction(Tx_MnPersonalize_Domain_Model_Filter $filter) {
		$this->view->assign('filter', $filter);
	}

	/**
	 * action update
	 *
	 * @param $filter
	 * @return void
	 */
	public function updateAction(Tx_MnPersonalize_Domain_Model_Filter $filter) {
		$this->filterRepository->update($filter);
		$this->flashMessageContainer->add('Your Filter was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param $filter
	 * @return void
	 */
	public function deleteAction(Tx_MnPersonalize_Domain_Model_Filter $filter) {
		$this->filterRepository->remove($filter);
		$this->flashMessageContainer->add('Your Filter was removed.');
		$this->redirect('list');
	}

}
?>