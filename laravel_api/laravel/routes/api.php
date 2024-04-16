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

Route::post('/users', function (Request $request) {

    $payload = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
    ]);

    $data['user'] = User::create($payload);
    $data['message'] = 'User Created Successfully';

    return Response::json($data, 201);
});

Route::get('/users/{id}', function (Request $request, $id) {

    $data['user'] = User::find($id);
    $data['message'] = 'User Detail';

    return Response::json($data, 200);
});
