<?php

namespace TestWidget\Providers;

use Plenty\Plugin\ServiceProvider;

class TestWidgetServiceProvider extends ServiceProvider
{
  public function register()
  {
     $this->getApplication()->register(TestWidgetRouteServiceProvider::class);
  }

  public function boot()
  {

  }
}
