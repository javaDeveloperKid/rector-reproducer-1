<?php

declare(strict_types = 1);

namespace App\Service;

use Symfony\Component\Serializer\SerializerInterface;

/**
 */
class MyService
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @param SerializerInterface $serializer
     */
    public function __construct(
        SerializerInterface $serializer
    )
    {
        $this->serializer = $serializer;
    }
}
