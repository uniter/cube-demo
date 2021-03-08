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
    context: __dirname,
    entry: './index',
    module: {
        rules: [
            {
                test: /\.php$/,
                loader: 'uniter-loader'
            }
        ]
    },
    output: {
        path: __dirname + '/dist/',
        filename: 'bundle.js',
        publicPath: '/dist/' // For webpack-dev-server
    }
};
