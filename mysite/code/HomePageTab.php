<?php
/**
 * Defines the Minisite page type
 */
class HomePageTab extends SiteTree {

	static $defaults = array( 
	
	);
	
	

   static $db = array(



   );
   
   
   
   static $has_one = array(
   	'FeatureImage' => 'Image'
   
   );



function getCMSFields() {
	$fields = parent::getCMSFields();
	

	$fields->addFieldToTab('Root.Images', new UploadField('FeatureImage', 'Feature Box Image 469x331'));

	
	
    return $fields;
	
   }
   
}
 
class HomePageTab_Controller extends Page_Controller {

function init() {
		parent::init();
		
		
	
	}
 
}
?>