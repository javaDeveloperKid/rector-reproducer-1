<?php

declare(strict_types=1);

namespace App\EventSubscriber;

use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
 * Class KernelLoggerEventSubscriber.
 */
class RequestLoggerEventSubscriber implements EventSubscriberInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(TokenStorageInterface $tokenStorage, LoggerInterface $logger)
    {
        $this->id = sha1(uniqid((string)microtime(true), true));
        $this->tokenStorage = $tokenStorage;
        $this->logger = $logger;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => 'onKernelRequest',
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }
}
