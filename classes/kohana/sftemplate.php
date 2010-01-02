<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Kohana wrapper for the Symfony Components template engine
 */
class Kohana_sfTemplate {

	/**
	 * @var object Kohana_sfTemplate object
	 */
	public static $instance;

	/**
	 * @var array
	 */
	public static $config;

	public static function instance() {
		if (!Kohana_sfTemplate::$instance) {
			Kohana_sfTemplate::$config = Kohana::config('sftemplate');

			$loader = new sfTemplateLoaderFilesystem(Kohana_sfTemplate::$config->template_path);

			Kohana_sfTemplate::$instance = new sfTemplateEngine($loader);

			// load any helpers that we've defined
			if (!empty(Kohana_sfTemplate::$config->helpers)) {
				$helpers = array();
				foreach (Kohana_sfTemplate::$config->helpers as $helper => $enabled) {
					if ($enabled) {
						$helpers[] = new $helper;
					}
				}

				$helper_set = new sfTemplateHelperSet($helpers);

				Kohana_sfTemplate::$instance->setHelperSet($helper_set);
			}
		}

		return Kohana_sfTemplate::$instance;
	}
}