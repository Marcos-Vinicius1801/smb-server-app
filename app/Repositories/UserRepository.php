<?php

namespace App\Repositories;

use App\Interface\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{


  private $model = User::class;

  public function __construct()
	{
	}

  public function all()
  {
    return $this->model::all();
  }

  public function create($data)
  {
    ["name" => $name,
     "phone_number" => $phone_number,
     "email" => $email,
     "date_of_birth" => $date_of_birth
    ] = $data;
   
    return $this->model::create([
      "name" => $name,
      "phone_number" => $phone_number,
      "email" => $email,
      "date_of_birth" => $date_of_birth
      
    ]);
  }

  public function update($id, $data)
  {
    ["name" => $name,
    "phone_number" => $phone_number,
    "email" => $email,
    "date_of_birth" => $date_of_birth
   ] = $data;
  
    $user =  $this->model::where("id", $id)->firstOrFail();
    $user->fill([
      "name" => $name,
      "phone_number" => $phone_number,
      "email" => $email,
      "date_of_birth" => $date_of_birth
      
    ])->save();
  }

  public function delete($id)
  {
    $this->model::where("id", $id)->firstOrFail()->delete();
  }

  public function findBy($criteria)
  {

  }
}