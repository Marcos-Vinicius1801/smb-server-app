<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\App;

class UserController extends Controller
{
  public function store(Request $request){
    $userService = App::make(UserService::class);
    $res = $userService->create($request->all());
    return response()->json($res['message'], $res['statusCode']);
  }

  public function update($id, Request $request){
    $userService = App::make(UserService::class);
    $res = $userService->update($id, $request->all());
    return response()->json($res['message'], $res['statusCode']);
  }

  public function delete($id){
    $userService = App::make(UserService::class);
    $res = $userService->delete($id);
    return response()->json($res['message'], $res['statusCode']);
  }
  
  public function all(){
    $userService = App::make(UserService::class);
    $res = $userService->all();
    return response()->json($res['data'], $res['statusCode']);
  }

  public function getUser($name){
    $userService = App::make(UserService::class);
    $res = $userService->getUser($name);
    return response()->json($res['data'], $res['statusCode']);
  }

  public function getUserEmail($email){
    $userService = App::make(UserService::class);
    $res = $userService->getUserEmail($email);
    return response()->json($res['data'], $res['statusCode']);
  }

  public function getUserDateInterval($startDate, $endDate){
    $userService = App::make(UserService::class);
    $res = $userService->getUserDateInterval($startDate, $endDate);
    return response()->json($res['data'], $res['statusCode']);
  }
}