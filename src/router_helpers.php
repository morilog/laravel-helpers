<?php

if (! function_exists('delete')) {
    /**
     * Register a new DELETE route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string  $action
     * @return \Illuminate\Routing\Route
     */
    function delete($uri, $action)
    {
        return app('router')->delete($uri, $action);
    }
}

if (! function_exists('get')) {
    /**
     * Register a new GET route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string  $action
     * @return \Illuminate\Routing\Route
     */
    function get($uri, $action)
    {
        return app('router')->get($uri, $action);
    }
}


if (! function_exists('patch')) {
    /**
     * Register a new PATCH route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string  $action
     * @return \Illuminate\Routing\Route
     */
    function patch($uri, $action)
    {
        return app('router')->patch($uri, $action);
    }
}

if (! function_exists('post')) {
    /**
     * Register a new POST route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string  $action
     * @return \Illuminate\Routing\Route
     */
    function post($uri, $action)
    {
        return app('router')->post($uri, $action);
    }
}

if (! function_exists('put')) {
    /**
     * Register a new PUT route with the router.
     *
     * @param  string  $uri
     * @param  \Closure|array|string  $action
     * @return \Illuminate\Routing\Route
     */
    function put($uri, $action)
    {
        return app('router')->put($uri, $action);
    }
}

if (! function_exists('resource')) {
    /**
     * Route a resource to a controller.
     *
     * @param  string  $name
     * @param  string  $controller
     * @param  array   $options
     * @return \Illuminate\Routing\Route
     */
    function resource($name, $controller, array $options = [])
    {
        return app('router')->resource($name, $controller, $options);
    }
}

if (! function_exists('group')) {
    /**
     * Create a route group with shared attributes.
     *
     * @param  array     $attributes
     * @param  \Closure  $callback
     * @return void
     */
    function group(array $attributes, \Closure $callback)
    {
        return app('router')->group($attributes, $callback);
    }
}


if (! function_exists('route_group')) {

    /**
     * Create a route group with shared attributes.
     * Alias of `group()` helper function
     *
     * @param  array     $attributes
     * @param  \Closure  $callback
     * @return void
     */
    function route_group(array $attributes, \Closure $callback)
    {
        return app('router')->group($attributes, $callback);
    }
}
