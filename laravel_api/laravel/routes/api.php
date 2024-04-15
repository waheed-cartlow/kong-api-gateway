<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('/users', function (Request $request) {

    $data['users'] = User::all();
    $data['message'] = 'Users List';

    return Response::json($data, 200);
});
