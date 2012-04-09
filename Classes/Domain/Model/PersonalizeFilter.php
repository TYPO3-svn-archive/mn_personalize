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
class Tx_MnPersonalize_Domain_Model_PersonalizeFilter extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * filter
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_MnPersonalize_Domain_Model_FilterProperty>
	 */
	protected $filter;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->filter = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Adds a FilterProperty
	 *
	 * @param Tx_MnPersonalize_Domain_Model_FilterProperty $filter
	 * @return void
	 */
	public function addFilter(Tx_MnPersonalize_Domain_Model_FilterProperty $filter) {
		$this->filter->attach($filter);
	}

	/**
	 * Removes a FilterProperty
	 *
	 * @param Tx_MnPersonalize_Domain_Model_FilterProperty $filterToRemove The FilterProperty to be removed
	 * @return void
	 */
	public function removeFilter(Tx_MnPersonalize_Domain_Model_FilterProperty $filterToRemove) {
		$this->filter->detach($filterToRemove);
	}

	/**
	 * Returns the filter
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_MnPersonalize_Domain_Model_FilterProperty> $filter
	 */
	public function getFilter() {
		return $this->filter;
	}

	/**
	 * Sets the filter
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_MnPersonalize_Domain_Model_FilterProperty> $filter
	 * @return void
	 */
	public function setFilter(Tx_Extbase_Persistence_ObjectStorage $filter) {
		$this->filter = $filter;
	}

}
?>