<?php

namespace App\Service;

use App\Interface\UserInterface;

use Exception;

class UserService 
{
  private UserInterface $userInterface;
  
  public function __construct(UserInterface $userInterface)
  {
    $this->userInterface = $userInterface; 
  }


  public function create($data)
  {
    try{
      $this->userInterface->create($data);
      return [
        "data" => [],
        "statusCode" => 201,
        "message" => "Cadastro feito com sucesso"
      ];

    }catch(Exception $e) {
      return [
        "data" => [],
        "statusCode" => 500,
        "message" => "Não foi possível cadastrar usuário"
      ];
    }
  }

  public function update($id, $data)
  {
    try{
      $this->userInterface->update($id, $data);
      return [
        "data" => [],
        "statusCode" => 200,
        "message" => "Atualizado com sucesso"
      ];

    }catch(Exception $e) {
      return [
        "data" => [],
        "statusCode" => 500,
        "message" => "Não foi possível atualizar usuário"
      ];
    }
  }

  public function delete($id)
  {
    try{
      $this->userInterface->delete($id);
      return [
        "data" => [],
        "statusCode" => 200,
        "message" => "Deletado com sucesso"
      ];

    }catch(Exception $e) {
      return [
        "data" => [],
        "statusCode" => 500,
        "message" => "Não foi possível deletar usuário"
      ];
    }
  }


  public function all()
  {
    try{
      $data = $this->userInterface->all();
      return [
        "data" => $data,
        "statusCode" => 200,
        "message" => ""
      ];

    }catch(Exception $e) {
      return [
        "data" => [],
        "statusCode" => 500,
        "message" => "Não foi possível obter os usuários"
      ];
    }
  }
}
