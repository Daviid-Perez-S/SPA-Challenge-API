<?php

namespace App\Http\Controllers\Api;

use App\Character;
use App\Http\Controllers\Controller;
use App\Http\Resources\CharacterResource;
use App\Http\Resources\CharacterResourceCollection;
use App\Exceptions\Handler;
use Exception;
use Illuminate\Http\Request;
use Log;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $characters = Character::orderBy('id', 'asc')->get();
            return (new CharacterResourceCollection($characters))->response();
        } catch (Exception $e) {
            report($e);
            return false;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        try {
            $request->validate([
                'name' => 'bail|required|string|max:255',
                'location.name' => 'bail|required|string|max:255',
                'location.link' => 'nullable'
            ]);
            
            $character->name = $request->input('name');
            $character->location = $request->input('location');
    
            $character->save();
    
            Log::info("Character ID {$character->id} updated successfully.");
            
            return (new CharacterResource($character))->response();
        } catch (Exception $e) {
            report($e);
            return false;
        }
    }
}
