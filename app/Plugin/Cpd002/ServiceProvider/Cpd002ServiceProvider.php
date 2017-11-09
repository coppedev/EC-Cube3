<?php
namespace Plugin\Cpd002\ServiceProvider;

use Eccube\Application;
use Silex\Application as BaseApplication;
use Silex\ServiceProviderInterface;

class Cpd002ServiceProvider implements ServiceProviderInterface
{
    public function register(BaseApplication $app)
    {
        //Repository
        $app['cpd002.repository.cpd002'] = $app->share(function () use ($app) {
            return $app['orm.em']->getRepository('Plugin\Cpd002\Entity\Cpd002');
        });

    }

    public function boot(BaseApplication $app)
    {
    }
}