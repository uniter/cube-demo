/*
 * Demo hybrid Three.js JS/PHP client-side app with PHPify
 * Copyright (c) Dan Phillimore (asmblah)
 * https://github.com/uniter/cube-demo
 *
 * Released under the MIT license
 * https://github.com/uniter/cube-demo/raw/master/MIT-LICENSE.txt
 */

'use strict';

var phpEngine = require('./php/src/bootstrap.php')();

// Write content HTML to the DOM
phpEngine.getStdout().on('data', function (data) {
    document.body.insertAdjacentHTML('beforeEnd', data + '<br>');
});
phpEngine.getStderr().on('data', function (data) {
    document.body.insertAdjacentHTML('beforeEnd', data + '<br>');
});

// Go!
(function () {
    var demoFactory = phpEngine.execute().getNative(),
        threeJS = require('three'),
        demo = demoFactory.callMethod('create', window, threeJS, requestAnimationFrame);

    demo.callMethod('start');
}());
