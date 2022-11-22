<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\IndexRequest;
use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        //$this->middleware('auth:sanctum')->except(['index','store']);
    }

    public function index(IndexRequest $request)
    {
        return UserResource::collection(User::all());
    }
}
