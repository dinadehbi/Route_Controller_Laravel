<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AppController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Achi tariqa li bghiti zayd f callAction
    public function callAction($method, $parameters)
    {
        // Logic dyal permissions fi had l-methode
        return parent::callAction($method, $parameters);
    }
}
