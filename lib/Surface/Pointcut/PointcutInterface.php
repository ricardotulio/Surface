<?php
// src/Surface/Pointcut/PointcutInterface.php

namespace Surface\Pointcut;

interface PointcutInterface
{
    public function getJoinpoints(\ReflectionClass $class): JoinpointCollectionInterface;
}
