<?php
/**
 * Created by PhpStorm.
 * User: ktv911
 * Date: 12.07.18
 * Time: 22:07
 */

namespace Framework\Factory;

use Psr\Container\ContainerInterface;


class TwigFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader, array(
            'cache' => $container->get('config')['debug'] ? false : 'runtime/compilation_twig',
        ));
        return $twig;
    }
}