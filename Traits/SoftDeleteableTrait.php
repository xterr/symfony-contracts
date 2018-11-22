<?php

namespace Symfony\Contracts\Traits;

/**
 * Trait SoftDeleteableTrait
 * @package Symfony\Contracts\Traits
 */
trait SoftDeleteableTrait
{
    /**
     * @var \DateTimeInterface
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
