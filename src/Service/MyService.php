<?php

declare(strict_types = 1);

namespace App\Service;

use AutoMapperPlus\AutoMapperInterface;
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
     * @var AutoMapperInterface
     */
    private $autoMapper;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @param SerializerInterface $serializer
     * @param AutoMapperInterface $autoMapper
     * @param \DateTime           $date
     */
    public function __construct(
        SerializerInterface $serializer,
        AutoMapperInterface $autoMapper,
        \DateTime $date
    )
    {
        $this->serializer = $serializer;
        $this->autoMapper = $autoMapper;
        $this->date = $date;
    }
}