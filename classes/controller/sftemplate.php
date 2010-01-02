<?php defined('SYSPATH') or die('No direct script access.');

/**
 * A template controller automating Symfony Template usage
 */
class Controller_sfTemplate extends Controller {

	/**
	 * @var Kohana_sfTemplate the sfTemplate engine
	 */
	public $sfTemplate;

	/**
	 * @var array Variables to be exposed to the template
	 */
	public $vars = array();

	/**
	 * @var boolean Whether tp automatically render the template after controller execution
	 */
	public $auto_render = true;

	/**
	 * @var string The name of the template to render. Can include directory slashes.
	 */
	public $template;

	public function __construct(Request $request) {

		$this->sfTemplate = Kohana_sfTemplate::instance();

		// try and guess the template we want to render based off the route
		$this->set_template($request->controller . '/' . $request->action);

		parent::__construct($request);
	}

	/**
	 * Called at the end of the controller chain
	 */
	public function after() {
		if ($this->auto_render) {
			$this->request->response = $this->sfTemplate->render($this->template, $this->vars);
		}
	}

	/**
	 * @param array $vars An array of variables to be exposed to the template
	 */
	public function set_vars(array $vars) {
		$this->vars = $vars;
	}

	/**
	 * Sets the controller to render a specific template.
	 * Note that we assume the file extension is set in in the config
	 * @param string $template The name of the template to load.
	 */
	public function set_template($template) {
		$this->template = $template;
	}

}