<?php

namespace Biigle\SocialiteProviders\HelmholtzAAI;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use SocialiteProviders\Manager\SocialiteWasCalled;

class ServiceProvider extends BaseServiceProvider
{

   /**
   * Bootstrap the application events.
   *
   * @param Modules $modules
   * @param  Router  $router
   * @return  void
   */
    public function boot(Modules $modules, Router $router)
    {
        Event::listen(function (SocialiteWasCalled $event) {
            $event->extendSocialite('haai', Provider::class);
        });
    }
}
