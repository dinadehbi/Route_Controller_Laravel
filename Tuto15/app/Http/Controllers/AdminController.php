<?php
namespace App\Http\Controllers;

class AdminController extends AppController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function callAction($method, $parameters)
    {
        $controller = class_basename(get_class($this));
        $action = $method;

        $permissionName = str_replace(['Controller', '@'], ['', '-'], $controller) . '-' . $action;

        $this->authorize($permissionName);

        return parent::callAction($method, $parameters);
    }

    // Méthodes autres comme index() 
}
