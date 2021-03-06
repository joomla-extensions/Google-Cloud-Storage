<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Googlecloudstorage
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

use Joomla\Registry\Registry;

/**
 * Test class for JGooglecloudstorageObjects.
 *
 * @since  1.0
 */
class JGooglecloudstorageObjectsTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var  Registry  Options for the Googlecloudstorage object.
	 */
	protected $options;

	/**
	 * @var  JGooglecloudstorage  Object under test.
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return  void
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->options = new Registry;
		$this->object = new JGooglecloudstorage($this->options);
	}

	/**
	 * Tests the magic __get method - get
	 */
	public function test__GetGet()
	{
		$this->assertThat(
			$this->object->objects->get,
			$this->isInstanceOf('JGooglecloudstorageObjectsGet')
		);
	}

	/**
	 * Tests the magic __get method - put
	 */
	public function test__GetPut()
	{
		$this->assertThat(
			$this->object->objects->put,
			$this->isInstanceOf('JGooglecloudstorageObjectsPut')
		);
	}

	/**
	 * Tests the magic __get method - delete
	 */
	public function test__GetDelete()
	{
		$this->assertThat(
			$this->object->objects->delete,
			$this->isInstanceOf('JGooglecloudstorageObjectsDelete')
		);
	}

	/**
	 * Tests the magic __get method - head
	 */
	public function test__GetHead()
	{
		$this->assertThat(
			$this->object->objects->head,
			$this->isInstanceOf('JGooglecloudstorageObjectsHead')
		);
	}
}
