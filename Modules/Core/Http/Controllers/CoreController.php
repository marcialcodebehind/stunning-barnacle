<?php
namespace Modules\Core\Http\Controllers;

use Illuminate\Routing\Controller;

class CoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
