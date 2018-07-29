<?php

// Subpackage namespace
namespace LittleBizzy\CustomFunctions\Core;

/**
 * AJAX class
 *
 * @package Custom Functions
 * @subpackage Admin
 */
class AJAX {



	// Properties
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Plugin object
	 */
	private $plugin;



	// Initialization
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Constructor
	 */
	public function __construct($plugin) {
		$this->plugin = $plugin;
	}



	// Methods
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Validate code and save file
	 */
	public function save() {

		error_log($_POST['code']);

	}



}