module.exports = {
  context: __dirname,
  entry: './index',
  module: {
    loaders: [
      {
        test: /\.json$/,
        loader: 'json-loader'
      },
      {
        test: /\.php$/,
        loader: 'transform?phpify'
      },
      {
        test: /\.php$/,
        loader: 'source-map-loader',
        enforce: 'post'
      }
    ]
  },
  output: {
    path: 'dist/',
    filename: 'bundle.js'
  }
};
