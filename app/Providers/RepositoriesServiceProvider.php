<?php

namespace App\Providers;

use App\Interface\UserInterface;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind(UserInterface::class, fn() =>
      new UserRepository());
  }

  public function boot()
  {
  }
}