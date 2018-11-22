<?php

namespace Symfony\Contracts\Entity;

interface ISoftDeletable
{
    /**
     * @return \DateTimeInterface|null
     */
    public function getDeletedAt():? \DateTimeInterface;

    /**
     * @param \DateTimeInterface|null $deletedAt
     */
    public function setDeletedAt(?\DateTimeInterface $deletedAt = NULL): void;

    /**
     * @return bool
     */
    public function isDeleted(): bool;
}
