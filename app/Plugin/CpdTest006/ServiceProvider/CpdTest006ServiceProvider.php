<?php
namespace Plugin\CpdTest006\ServiceProvider;

use Eccube\Application;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class CpdTest006ServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {
        //Repository
        $app['CpdTest006.repository.CpdTest006'] = $app->share(function () use ($app) {
            return $app['orm.em']->getRepository('Plugin\CpdTest006\Entity\CpdTest006');
        });

    }

    public function boot(BaseApplication $app)
    {
    }
}