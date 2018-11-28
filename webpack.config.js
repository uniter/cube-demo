module.exports = {
  context: __dirname,
  entry: './index',
  devtool: 'source-map',
  module: {
    loaders: [
      {
        test: /\.json$/,
        loader: 'json-loader'
      },
      {
        test: /\.php$/,
        loader: 'transform-loader?phpify'
      },
      {
        test: /\.php$/,
        loader: 'source-map-loader',
        enforce: 'post'
      }
    ]
  },
  output: {
    path: __dirname + '/dist/',
    filename: 'bundle.js',
    publicPath: '/dist/' // For webpack-dev-server
  }
};
