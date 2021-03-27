<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Exceptions\Handler;
use Log;
use Exception;

class AuthController extends Controller
{
    /**
     * Logout a user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        try {
            
            $user = $request->user();
            $user->api_token = "";
    
            $user->save();
    
            Log::info("User ID {$user->id} logout successfully.");
            
            return (new UserResource($user))->response();
        } catch (Exception $e) {
            report($e);
            return false;
        }
    }
}
