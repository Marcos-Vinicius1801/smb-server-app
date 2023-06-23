<?php

namespace App\Interface;

interface UserInterface 
{
  public function all();
  public function create($data);
  public function update($id, $data);
  public function delete($id);
  public function findBy($criteria);
}
