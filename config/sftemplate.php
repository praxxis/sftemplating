<?php
return array(
	'template_path' => APPPATH.'views/%name%.php', // %name% gets interpolated with the passed template name. Note that it can include directory seperators!
	
	// override hepers by setting them to false in your application config
	'helpers' => array(
		'sfTemplateHelperAssets' => true,
		'sfTemplateHelperJavascripts' => true,
		'sfTemplateHelperStylesheets' => true,
	),
);