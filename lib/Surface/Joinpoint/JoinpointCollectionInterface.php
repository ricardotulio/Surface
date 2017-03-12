<?php
// tests/Surface/Joinpoint/JoinpointCollectionInterface.php

namespace Surface\Joinpoint;

interface JoinpointCollectionInterface extends Countable, Iterator
{
    public function add(JoinpointInterface $pointcut);

    public function get(int $offset): ?JoinpointInterface;

    public function remove(int $offset): ?JoinpointInterface;
}
