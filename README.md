# What? #

This project is an interface between Kohana and the [Symfony Components templating library](http://components.symfony-project.org/templating/). 

# Why? #

Because I liked the syntax of the Symfony templating library!

# How? #

Just extend `Controller_sfTemplate` when creating your controller. The controller will try and guess the template file to use (it will default to `<controller>/<action≥.php`), but you can override it using the `set_template()` function in your action method.
	
Parameters to be sent to the template are set using `set_vars()`. Its just an array. 

The module configuration includes the base helpers by default, but you can override them in your application configuration.
	
# Who? #

The code was pretty much a copy of John Heathco's [Twig controller](http://github.com/jheathco/kohana-twig) for Kohana.