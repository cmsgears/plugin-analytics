<?php
namespace cmsgears\google\analytics\widgets;

// CMG Imports
use cmsgears\google\analytics\config\GoogleAnalyticsProperties;

class GaTracker extends \cmsgears\core\common\base\Widget {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	public $active;

	public $code;

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

    public function init() {

        parent::init();

        $properties 	= GoogleAnalyticsProperties::getInstance();

        $this->active	= isset( $this->active ) ? $this->active : $properties->isGlobal();

        $this->code		= isset( $this->code ) ? $this->code : $properties->getGlobalCode();
    }

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// yii\base\Widget --------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// GaTracker -----------------------------

    public function renderWidget( $config = [] ) {

    	return $this->render( $this->template, [ 'widget' => $this ] );
    }
}
