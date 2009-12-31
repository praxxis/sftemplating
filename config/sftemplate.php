<?php
return array(
	'template_path' => APPPATH.'views/%name%.php', // %name% gets interpolated with the passed template name. Note that it can include directory seperators!
	'helpers' => array(
		'sfTemplateHelperAssets',
		'sfTemplateHelperJavascripts',
		'sfTemplateHelperStylesheets',
	),
);