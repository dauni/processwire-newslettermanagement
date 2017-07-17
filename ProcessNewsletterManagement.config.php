<?php namespace ProcessWire;

/**
 * Configure the Hello World module
 *
 * This type of configuration method requires ProcessWire 2.5.5 or newer.
 * For backwards compatibility with older versions of PW, you'll want to
 * instead want to look into the getModuleConfigInputfields() method, which
 * is specified with the .module file. So we are assuming you only need to
 * support PW 2.5.5 or newer here.
 *
 * For more about configuration methods, see here:
 * http://processwire.com/blog/posts/new-module-configuration-options/
 *
 *
 */

class ProcessNewsletterManagementConfig extends ModuleConfig {

	public function __construct() {

		$this->add(array(

			// Text field: greeting
			array(
				'name' => 'greeting', // name of field
				'type' => 'text', // type of field (any Inputfield module name)
				'label' => $this->_('Hello Greeting'), // field label
				'description' => $this->_('Headline ...'),
				'required' => true,
				'value' => $this->_('Newslettermanagement'), // default value
			),
			array(
				'name' => 'resperpage',//pagitnation: results per page
				'type' => 'text',
				'label' => $this->_('Paginierung'),
				'description' => $this->_('Anzahl angezeigte Benutzer pro Seite'),
				'required' => false,
				'value' => 2
			)

		));
	}
}

