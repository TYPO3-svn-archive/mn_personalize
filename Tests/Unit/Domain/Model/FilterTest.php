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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_MnPersonalize_Domain_Model_Filter.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Personalize content
 *
 * @author Mattias Nilsson <tollepjaer@gmail.com>
 */
class Tx_MnPersonalize_Domain_Model_FilterTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_MnPersonalize_Domain_Model_Filter
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_MnPersonalize_Domain_Model_Filter();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getFilterPropertyReturnsInitialValueForObjectStorageContainingTx_MnPersonalize_Domain_Model_FilterProperty() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getFilterProperty()
		);
	}

	/**
	 * @test
	 */
	public function setFilterPropertyForObjectStorageContainingTx_MnPersonalize_Domain_Model_FilterPropertySetsFilterProperty() { 
		$filterProperty = new Tx_MnPersonalize_Domain_Model_FilterProperty();
		$objectStorageHoldingExactlyOneFilterProperty = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFilterProperty->attach($filterProperty);
		$this->fixture->setFilterProperty($objectStorageHoldingExactlyOneFilterProperty);

		$this->assertSame(
			$objectStorageHoldingExactlyOneFilterProperty,
			$this->fixture->getFilterProperty()
		);
	}
	
	/**
	 * @test
	 */
	public function addFilterPropertyToObjectStorageHoldingFilterProperty() {
		$filterProperty = new Tx_MnPersonalize_Domain_Model_FilterProperty();
		$objectStorageHoldingExactlyOneFilterProperty = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFilterProperty->attach($filterProperty);
		$this->fixture->addFilterProperty($filterProperty);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneFilterProperty,
			$this->fixture->getFilterProperty()
		);
	}

	/**
	 * @test
	 */
	public function removeFilterPropertyFromObjectStorageHoldingFilterProperty() {
		$filterProperty = new Tx_MnPersonalize_Domain_Model_FilterProperty();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($filterProperty);
		$localObjectStorage->detach($filterProperty);
		$this->fixture->addFilterProperty($filterProperty);
		$this->fixture->removeFilterProperty($filterProperty);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getFilterProperty()
		);
	}
	
}
?>