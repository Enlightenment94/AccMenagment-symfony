<?php

namespace ContainerEw7R0Mn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_AsyncService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.transport.async' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Receiver/ReceiverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Sender/SenderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/TransportInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/SerializerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/PhpSerializer.php';

        $a = ($container->privates['messenger.transport_factory'] ?? $container->load('getMessenger_TransportFactoryService'));

        if (isset($container->privates['messenger.transport.async'])) {
            return $container->privates['messenger.transport.async'];
        }

        return $container->privates['messenger.transport.async'] = $a->createTransport($container->getEnv('MESSENGER_TRANSPORT_DSN'), ['use_notify' => true, 'check_delayed_interval' => 60000, 'transport_name' => 'async'], ($container->privates['messenger.transport.native_php_serializer'] ?? ($container->privates['messenger.transport.native_php_serializer'] = new \Symfony\Component\Messenger\Transport\Serialization\PhpSerializer())));
    }
}
