<?php

/**
 * The Service Manager component can be configured by passing an associative array to the component's constructor.
 *
 * @see https://zendframework.github.io/zend-servicemanager/configuring-the-service-manager/
 */

use Zend\Expressive;
use Zend\Router;

return [
    'factories'             => [
        Expressive\Router\RouterInterface::class => Router\RouteInvokableFactory::class,
        Expressive\Template\TemplateRendererInterface::class => 
                Expressive\ZendView\ZendViewRendererFactory::class,
    ],
    'services'              => [],
    'abstract_factories'    => [],
    'delegators'            => [],
    'shared'                => [],
    'shared_by_default'     => true
];
