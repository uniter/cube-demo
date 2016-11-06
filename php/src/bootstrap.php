<?php

/*
 * Demo hybrid Three.js JS/PHP client-side app with PHPify
 * Copyright (c) Dan Phillimore (asmblah)
 * https://github.com/uniter/cube-demo
 *
 * Released under the MIT license
 * https://github.com/uniter/cube-demo/raw/master/MIT-LICENSE.txt
 */

namespace Uniter\Demo\Cube;

use Uniter\Demo\Cube\Demo\DemoFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

$demoFactory = new DemoFactory();

return $demoFactory;
