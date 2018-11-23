<?php

namespace Xterr\Symfony\Contracts\Traits;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trait SoftDeleteableEntityTrait
 * @package Xterr\Symfony\Contracts\Traits
 */
trait SoftDeleteableEntityTrait
{
    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $deletedAt;

    /**
     * @return \DateTimeInterface|null
     */
    public function getDeletedAt():? \DateTimeInterface
    {
        return $this->deletedAt;
    }

    /**
     * @param \DateTimeInterface|null $deletedAt
     */
    public function setDeletedAt(?\DateTimeInterface $deletedAt = NULL): void
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return null !== $this->deletedAt;
    }
}
