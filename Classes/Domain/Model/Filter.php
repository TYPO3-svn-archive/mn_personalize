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
class Tx_MnPersonalize_Domain_Model_Filter extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * filterProperty
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_MnPersonalize_Domain_Model_FilterProperty>
	 */
	protected $filterProperty;

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
		$this->filterProperty = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Adds a FilterProperty
	 *
	 * @param Tx_MnPersonalize_Domain_Model_FilterProperty $filterProperty
	 * @return void
	 */
	public function addFilterProperty(Tx_MnPersonalize_Domain_Model_FilterProperty $filterProperty) {
		$this->filterProperty->attach($filterProperty);
	}

	/**
	 * Removes a FilterProperty
	 *
	 * @param Tx_MnPersonalize_Domain_Model_FilterProperty $filterPropertyToRemove The FilterProperty to be removed
	 * @return void
	 */
	public function removeFilterProperty(Tx_MnPersonalize_Domain_Model_FilterProperty $filterPropertyToRemove) {
		$this->filterProperty->detach($filterPropertyToRemove);
	}

	/**
	 * Returns the filterProperty
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_MnPersonalize_Domain_Model_FilterProperty> $filterProperty
	 */
	public function getFilterProperty() {
		return $this->filterProperty;
	}

	/**
	 * Sets the filterProperty
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_MnPersonalize_Domain_Model_FilterProperty> $filterProperty
	 * @return void
	 */
	public function setFilterProperty(Tx_Extbase_Persistence_ObjectStorage $filterProperty) {
		$this->filterProperty = $filterProperty;
	}

}
?>