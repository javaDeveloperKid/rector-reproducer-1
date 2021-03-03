<?php

declare(strict_types = 1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity()
 */
class Document
{
    /**
     * @var string
     *
     * @ORM\Id()
     * @ORM\Column()
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column()
     */
    private $state;

    /**
     * @var array
     *
     * @ORM\Column(type="json")
     */
    private $data = [];

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @param string $id
     * @param string $state
     *
     * @throws \Exception
     */
    public function __construct(string $id, string $state)
    {
        $this->id = $id;
        $this->state = $state;
        $this->createdAt = new \DateTime();
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     *
     * @throws \Exception
     */
    public function setData(array $data): void
    {
        $this->data = $data;
        $this->updatedAt = new \DateTime();
    }

    /**
     * @param string $state
     *
     * @throws \Exception
     */
    public function setState(string $state): void
    {
        $this->state = $state;
        $this->updatedAt = new \DateTime();
    }
}