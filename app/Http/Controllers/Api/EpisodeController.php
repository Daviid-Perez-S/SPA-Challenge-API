<?php

namespace App\Http\Controllers\Api;

use App\Episode;
use App\Http\Controllers\Controller;
use App\Http\Resources\EpisodeResourceCollection;
use App\Exceptions\Handler;
use Exception;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $episodes = Episode::all();
        return (new EpisodeResourceCollection($episodes))->response();
        } catch (Exception $e) {
            report($e);
            return false;
        }
    }

}
