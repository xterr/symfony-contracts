<?php

namespace Xterr\Symfony\Contracts\Entity;

/**
 * Interface ITimestampable
 * @package Xterr\Symfony\Contracts\Entity
 */
interface ITimestampable
{
    /**
     * @return \DateTimeInterface|null
     */
    public function getCreatedAt():? \DateTimeInterface;

    /**
     * @param \DateTimeInterface $createdAt
     */
    public function setCreatedAt(\DateTimeInterface $createdAt): void;

    /**
     * @return \DateTimeInterface|null
     */
    public function getUpdatedAt():? \DateTimeInterface;

    /**
     * @param \DateTimeInterface $updatedAt
     */
    public function setUpdatedAt(\DateTimeInterface $updatedAt): void;
}
