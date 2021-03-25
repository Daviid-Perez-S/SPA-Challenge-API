<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserResourceCollection;
use App\Exceptions\Handler;
use Exception;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;

class UserController extends Controller
{

    /**
     * Display current user
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function current(Request $request)
    {
        return $request->user();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return (new UserResourceCollection($users))->response();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Make some validations to user request
        $request->validate([
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|max:255|email|unique:users,email',
            'password' => 'bail|required|string|min:8'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->api_token = Str::random(80);

        $user->save();

        Log::info("User ID {$user->id} created successfully.");

        return (new UserResource($user))->response()->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        try {
            return (new UserResource($user))->response();
        } catch (Exceptionk $e) {
            report($e);
            return false;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|max:255|email|unique:users,email,'.$user->id
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->save();

        Log::info("User ID {$user->id} updated successfully.");
        
        return (new UserResource($user))->response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        
        Log::info("User ID {$user->id} deleted successfully.");
        
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
