<?php

namespace Plugin\Cpd001\ServiceProvider;

use Eccube\Application;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class Cpd001ServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {
      //Repository
        $app['cpd001.repository.cpd001'] = $app->share(function () use ($app) {
            return $app['orm.em']->getRepository('Plugin\cpd001\Entity\cpd001');
        });
    }

    public function boot(BaseApplication $app)
    {
    }
}