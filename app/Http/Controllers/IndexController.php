<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Events\ListEvent;

class IndexController extends Controller
{
    /**
     * Returns the Assets list
     * 
     * @param Rquest $request
     * @return Resposne
     */
    public function index(Request $request): Response
    {
        $roleId = $request->user()->role_id;
        $userId = $request->user()->id;
        $assets = event(new ListEvent($userId, $roleId, new \App\Asset));
        return new Response($assets, 200);
    }
}
