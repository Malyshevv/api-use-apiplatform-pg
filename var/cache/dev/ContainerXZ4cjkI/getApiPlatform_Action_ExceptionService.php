<?php

namespace ContainerXZ4cjkI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_ExceptionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.exception' shared service.
     *
     * @return \ApiPlatform\Core\Action\ExceptionAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Action'.\DIRECTORY_SEPARATOR.'ExceptionAction.php';

        return $container->services['api_platform.action.exception'] = new \ApiPlatform\Core\Action\ExceptionAction(($container->services['.container.private.serializer'] ?? $container->get_Container_Private_SerializerService()), $container->parameters['api_platform.error_formats'], $container->parameters['api_platform.exception_to_status']);
    }
}
