/*
 * Demo hybrid Three.js JS/PHP client-side app with Uniter-Loader
 * Copyright (c) Dan Phillimore (asmblah)
 * https://github.com/uniter/cube-demo
 *
 * Released under the MIT license
 * https://github.com/uniter/cube-demo/raw/master/MIT-LICENSE.txt
 */

'use strict';

module.exports = {
    settings: {
        phpify: {
            include: [
                'php/**/*.php',
                'vendor/autoload.php',
                'vendor/composer/**/*.php',

                // Include any required polyfill module(s), they will be stubbed below
                'vendor/symfony/polyfill-ctype/bootstrap.php'
            ],
            stub: {
                // Stub any required polyfill module(s)
                'vendor/symfony/polyfill-ctype/bootstrap.php': null
            }
        },
        phptojs: {
            lineNumbers: true,
            mode: 'sync'
        }
    }
};

