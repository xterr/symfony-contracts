<?php

namespace Symfony\Contracts\Entity;

/**
 * Interface IIdentifiable
 * @package Symfony\Contracts\Entity
 */
interface IIdentifiable
{
    /**
     * @return int
     */
    public function getId();
}
