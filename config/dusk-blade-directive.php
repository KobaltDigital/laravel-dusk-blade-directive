<?php


return [
    /*
    |--------------------------------------------------------------------------
    | Blade Directive Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of the blade directive that will be used to
    | render the dusk attribute. This directive will be used in your
    | blade files to render the dusk attribute on your elements.
    | For example: @dusk()
    |
    */
    'name' => 'dusk',
    /*
    |--------------------------------------------------------------------------
    | Environments
    |--------------------------------------------------------------------------
    |
    | This value is the environment(s) in which the dusk directive will be
    | rendered. If the current environment is not in this array, the
    | directive will not be rendered and will not appear in the HTML.
    |
    */
    'environments' => ['local', 'testing', 'staging'],
];
