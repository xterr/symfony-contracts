<?php

namespace Xterr\Symfony\Contracts\Traits;

/**
 * Trait SoftDeleteableTrait
 * @package Xterr\Symfony\Contracts\Traits
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
