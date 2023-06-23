<?php

namespace App\Interface;

interface UserInterface 
{
  public function all();
  public function create($data);
  public function update($id, $data);
  public function delete($id);
  public function getUser($user);
  public function getUserEmail($email);
  public function getUserDateInterval($startDate, $endDate);
}
