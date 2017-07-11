<?php
namespace cmsgears\analytics\google\widgets;

// CMG Imports
use cmsgears\analytics\google\config\GoogleAnalyticsProperties;

class GaTracker extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	public $active;

	public $code;

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();

        $properties 	= GoogleAnalyticsProperties::getInstance();

        $this->active	= isset( $this->active ) ? $this->active : $properties->isGlobal();

        $this->code		= isset( $this->code ) ? $this->code : $properties->getGlobalCode();
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

	// cmsgears\core\common\base\Widget

    public function renderWidget( $config = [] ) {

    	return $this->render( $this->template, [ 'widget' => $this ] );
    }
}
