<?php
// tests/Surface/Core/AspectFinderTest.php

namespace Surface\Core;

use PHPUnit\Framework\TestCase;

class JointpointFinderTest extends TestCase
{
    /**
     * @test
     */
    public function shouldFindJoinpoints()
    {
        $pointcutCollectionMock = $this->getMockBuilder(
            'Surface\Core\PointcutCollectionInterface'
        )
        ->getMock();

        $pointuctMock = $this->getMockBuilder(
            'Surface\Core\PointcutInterface'
        )
        ->getMock();

        $finder = new JoinpointFinder(
            $pointcutCollectionMock
        );

        $classes = $finder->find('./');

        $this->assertCount(1, $classes);
    }
}
