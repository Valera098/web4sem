<?php

namespace ContainerN5a4xtZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Api\Utils\AuthService' shared autowired service.
     *
     * @return \App\Api\Utils\AuthService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'Utils'.\DIRECTORY_SEPARATOR.'AuthService.php';

        return $container->privates['App\\Api\\Utils\\AuthService'] = new \App\Api\Utils\AuthService();
    }
}
