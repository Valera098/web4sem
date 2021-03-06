<?php

namespace ContainerRqJLj02;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateUserService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Api\Command\CreateUser' shared autowired service.
     *
     * @return \App\Api\Command\CreateUser
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['App\\Api\\Command\\CreateUser'] = $instance = new \App\Api\Command\CreateUser();

        $instance->setName('app:create-user');

        return $instance;
    }
}
