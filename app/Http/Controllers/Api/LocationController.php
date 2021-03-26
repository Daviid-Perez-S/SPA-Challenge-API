<?php

namespace App\Http\Controllers\Api;

use App\Location;
use App\Http\Controllers\Controller;
use App\Http\Resources\LocationResourceCollection;
use App\Exceptions\Handler;
use Exception;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $locations = Location::all();
            return (new LocationResourceCollection($locations))->response();
        } catch (Exception $e) {
            report($e);
            return false;
        }
    }
}
