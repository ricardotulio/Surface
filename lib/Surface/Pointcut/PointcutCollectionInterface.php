<?php
// tests/Surface/Pointcut/PointcutCollectionInterface.php

namespace Surface\Pointcut;

interface PointcutCollectionInterface extends Countable, Iterator
{
    public function add(PointcutInterface $pointcut);

    public function get(int $offset): ?PointcutInterface;

    public function remove(int $offset): ?PointcutInterface;
}
