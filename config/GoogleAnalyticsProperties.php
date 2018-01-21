<?php
namespace cmsgears\google\analytics\config;

// CMG Imports
use cmsgears\core\common\config\CmgProperties;

class GoogleAnalyticsProperties extends CmgProperties {

	const CONFIG_GOOGLE_ANALYTICS	= 'google-analytics';

	const PROP_GLOGAL				= 'global';

	const PROP_GLOGAL_CODE			= 'global_code';

	// Singleton instance
	private static $instance;

	// Constructor and Initialisation ------------------------------

	/**
	 * Return Singleton instance.
	 */
	public static function getInstance() {

		if( !isset( self::$instance ) ) {

			self::$instance	= new GoogleAnalyticsProperties();

			self::$instance->init( self::CONFIG_GOOGLE_ANALYTICS );
		}

		return self::$instance;
	}

	public function isGlobal() {

		return $this->properties[ self::PROP_GLOGAL ];
	}

	public function getGlobalCode() {

		return $this->properties[ self::PROP_GLOGAL_CODE ];
	}
}
