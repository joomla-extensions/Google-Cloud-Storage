<?php
/**
 * @package     Joomla.Cloud
 * @subpackage  AmazonS3
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

/**
 * Common items for operations on objects
 *
 * @since  1.0
 */
class JAmazons3OperationsObjects extends JAmazons3Object
{
	/**
	 * @var    JAmazons3OperationsObjectsDelete  Amazons3 API object for DELETE operations on objects.
	 * @since  1.0
	 */
	protected $delete;

	/**
	 * @var    JAmazons3OperationsObjectsGet  Amazons3 API object for GET operations on objects.
	 * @since  1.0
	 */
	protected $get;

	/**
	 * @var    JAmazons3OperationsObjectsHead  Amazons3 API object for HEAD operations on objects.
	 * @since  1.0
	 */
	protected $head;

	/**
	 * @var    JAmazons3OperationsObjectsOptionss3  Amazons3 API object for OPTIONS operations on objects.
	 * @since  1.0
	 */
	protected $optionss3;

	/**
	 * @var    JAmazons3OperationsObjectsPost  Amazons3 API object for POST operations on objects.
	 * @since  1.0
	 */
	protected $post;

	/**
	 * @var    JAmazons3OperationsObjectsPut  Amazons3 API object for PUT operations on objects.
	 * @since  1.0
	 */
	protected $put;

	/**
	 * Magic method to lazily create API objects
	 *
	 * @param   string  $name  Name of property to retrieve.
	 *
	 * @return  JAmazons3OperationsObjects  Amazons3 API object
	 *
	 * @since   1.0
	 * @throws  InvalidArgumentException
	 */
	public function __get($name)
	{
		$class = 'JAmazons3OperationsObjects' . ucfirst($name);

		if (class_exists($class))
		{
			if (false == isset($this->$name))
			{
				$this->$name = new $class($this->options, $this->client);
			}

			return $this->$name;
		}

		throw new InvalidArgumentException(
			sprintf('Argument %s produced an invalid class name: %s', $name, $class)
		);
	}
}
