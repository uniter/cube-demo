<?php

/*
 * Demo hybrid Three.js JS/PHP client-side app with Uniter-Loader
 * Copyright (c) Dan Phillimore (asmblah)
 * https://github.com/uniter/cube-demo
 *
 * Released under the MIT license
 * https://github.com/uniter/cube-demo/raw/master/MIT-LICENSE.txt
 */

namespace Uniter\Demo\Cube\Demo;

/**
 * Class DemoFactory
 *
 * @author Jadu Ltd.
 */
class DemoFactory
{
    /**
     * Creates a new instance of Demo
     *
     * @param object $window
     * @param object $threeJS
     * @param callable $requestAnimationFrame
     */
    public function create($window, $threeJS, callable $requestAnimationFrame)
    {
        return new Demo($window, $threeJS, $requestAnimationFrame);
    }
}
