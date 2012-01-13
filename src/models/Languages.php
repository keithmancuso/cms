<?php

/**
 *
 */
class Languages
{
	protected $attributes = array(
		'language_code' => array('type' => AttributeType::String, 'maxLength' => 5)
	);

	/**
	 * Returns an instance of the specified model
	 * @return object The model instance
	 * @static
	 */
	public static function model($class = __CLASS__)
	{
		return parent::model($class);
	}
}
