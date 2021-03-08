/*
 * Demo hybrid Three.js JS/PHP client-side app with Uniter-Loader
 * Copyright (c) Dan Phillimore (asmblah)
 * https://github.com/uniter/cube-demo
 *
 * Released under the MIT license
 * https://github.com/uniter/cube-demo/raw/master/MIT-LICENSE.txt
 */

'use strict';

var phpEngine = require('./php/src/bootstrap.php');

// Go!
(function () {
    var demoFactory = phpEngine.getNative(),
        threeJS = require('three'),
        demo = demoFactory.create(window, threeJS, requestAnimationFrame);

    demo.start();
}());
