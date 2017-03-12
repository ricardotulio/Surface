<?php
// lib/Surface/Joinpoint/JoinpointInterface

namespace Surface\Joinpoint;

use PHPUnit\Framework\TestCase;

interface JoinpointInterface
{
    public function withPointcutCollection(
        PointcutCollectionInterface $pointcutCollection
    );

    public function getPointcutCollection(): ?PointcutCollection;
}
