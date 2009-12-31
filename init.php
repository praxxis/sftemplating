<?php defined('SYSPATH') or die('No direct script access.');

// Load the Symfony Templating autoloader
require Kohana::find_file('vendor', 'templating/lib/sfTemplateAutoloader');

// Register the Symfony Templating autoloader
sfTemplateAutoloader::register();
