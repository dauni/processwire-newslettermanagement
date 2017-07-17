<?php namespace ProcessWire;

/**
 * ProcessHello.info.php
 *
 * Return information about this module.
 *
 * If preferred, you can use a getModuleInfo() method in your module file,
 * or you can use a ModuleName.info.json file (if you prefer JSON definition).
 *
 */

$info = array(

	// Your module's title
	'title' => 'NewsletterManagement',

	// A 1 sentence description of what your module does
	'summary' => 'Eingetragene Empfänger auflisten und nach CSV exportieren.',

	// Module version number: use 1 for 0.0.1 or 100 for 1.0.0, and so on
	'version' => 1,

	// Name of person who created this module (change to your name)
	'author' => 'Daniel Pichler',

	// Icon to accompany this module (optional), uses font-awesome icon names, minus the "fa-" part
	'icon' => 'newspaper-o',

	// URL to more info: change to your full modules.processwire.com URL (if available), or something else if you prefer
	'href' => 'https://github.com/dauni/processwire-newslettermanagement',

	// name of permission required of users to execute this Process (optional)
	'permission' => 'newsletter',

	// permissions that you want automatically installed/uninstalled with this module (name => description)
	'permissions' => array(
		'newsletter' => 'Run the Newsletter Management module'
	),

	// page that you want created to execute this module
	'page' => array(
		'name' => 'newsletter',
		'parent' => '/newsletter',
		'title' => 'Newsletter'
	),

	// optional extra navigation that appears in admin
	// if you change this, you'll need to a Modules > Refresh to see changes
	'nav' => array(
		array(
			'url' => 'users/',
			'label' => _('Empfängerliste'),
			'icon' => 'align-justify',
		),

		array(
			'url' => 'CSV/all',
			'label' => _('CSV-Alle'),
			'icon' => 'floppy-o',
		),
		array(
			'url' => 'CSV/subscribed',
			'label' => _('CSV-Angemeldet'),
			'icon' => 'floppy-o',
		),
		array(
			'url' => 'CSV/unsubscribed',
			'label' => _('CSV-Abgemeldet'),
			'icon' => 'floppy-o',
		),

	)

	// for more options that you may specify here, see the file: /wire/core/Process.php
	// and the file: /wire/core/Module.php

);
