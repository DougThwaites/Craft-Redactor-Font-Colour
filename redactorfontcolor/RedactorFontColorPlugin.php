<?php
/**
 * Redactor Font Color plugin for Craft CMS
 *
 * Add the redactor font-color plugin.
 *
 * @author    Doug Thwaites
 * @copyright Copyright (c) 2017 Doug Thwaites
 * @link      https://dougthwaites.nz
 * @package   RedactorFontColor
 * @since     1
 */

namespace Craft;

class RedactorFontColorPlugin extends BasePlugin
{
	/**
	 * Init
	 *
	 * @return mixed
	 */
	function init()
	{
		parent::init();

		if(craft()->request->isCpRequest() && craft()->userSession->isLoggedIn())
		{
			craft()->templates->includeJsResource('redactorfontcolor/fontcolor.js');
		}
	}

	/**
	 * Returns the user-facing name.
	 *
	 * @return mixed
	 */
	public function getName()
	{
		 return Craft::t('Redactor Font Color');
	}

	/**
	 * Plugins can have descriptions of themselves displayed on the Plugins page by adding a getDescription() method
	 * on the primary plugin class:
	 *
	 * @return mixed
	 */
	public function getDescription()
	{
		return Craft::t('Add the redactor font-color plugin.');
	}

	/**
	 * Plugins can have links to their documentation on the Plugins page by adding a getDocumentationUrl() method on
	 * the primary plugin class:
	 *
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return 'https://github.com/DougThwaites/CraftRedactorFontColour/blob/master/README.md';
	}

	/**
	 * Plugins can now take part in Craft’s update notifications, and display release notes on the Updates page, by
	 * providing a JSON feed that describes new releases, and adding a getReleaseFeedUrl() method on the primary
	 * plugin class.
	 *
	 * @return string
	 */
	public function getReleaseFeedUrl()
	{
	}

	/**
	 * Returns the version number.
	 *
	 * @return string
	 */
	public function getVersion()
	{
		return '1.0.0';
	}

	/**
	 * As of Craft 2.5, Craft no longer takes the whole site down every time a plugin’s version number changes, in
	 * case there are any new migrations that need to be run. Instead plugins must explicitly tell Craft that they
	 * have new migrations by returning a new (higher) schema version number with a getSchemaVersion() method on
	 * their primary plugin class:
	 *
	 * @return string
	 */
	public function getSchemaVersion()
	{
		return '1';
	}

	/**
	 * Returns the developer’s name.
	 *
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'Doug Thwaites';
	}

	/**
	 * Returns the developer’s website URL.
	 *
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'https://dougthwaites.nz';
	}

	/**
	 * Returns whether the plugin should get its own tab in the CP header.
	 *
	 * @return bool
	 */
	public function hasCpSection()
	{
		return false;
	}

	/**
	 * Called right before your plugin’s row gets stored in the plugins database table, and tables have been created
	 * for it based on its records.
	 */
	public function onBeforeInstall()
	{
	}

	/**
	 * Called right after your plugin’s row has been stored in the plugins database table, and tables have been
	 * created for it based on its records.
	 */
	public function onAfterInstall()
	{
	}

	/**
	 * Called right before your plugin’s record-based tables have been deleted, and its row in the plugins table
	 * has been deleted.
	 */
	public function onBeforeUninstall()
	{
	}

	/**
	 * Called right after your plugin’s record-based tables have been deleted, and its row in the plugins table
	 * has been deleted.
	 */
	public function onAfterUninstall()
	{
	}
}