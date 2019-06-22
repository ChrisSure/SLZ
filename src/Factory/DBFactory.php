<?php
/**
 * Created by PhpStorm.
 * User: ktv911
 * Date: 12.07.18
 * Time: 22:05
 */

namespace Framework\Factory;

use Illuminate\Database\Capsule\Manager as Capsule;
use Psr\Container\ContainerInterface;


class DBFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'blog',
            'username'  => 'root',
            'password'  => '911',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

}