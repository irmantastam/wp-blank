var StyleLintPlugin = require('stylelint-webpack-plugin');
var autoprefixer = require('autoprefixer');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var path = require('path');

module.exports = {
  entry: {
    bundle: './src/js/main.js',
  },
  output: {
    filename: '[name].js',
    path: __dirname + '/src/dist',
  },
  module: {
    rules: [
      {
        exclude: [
          /\.html$/,
          /\.(js|jsx)$/,
          /\.css$/,
          /\.json$/,
          /\.svg$/,
          /\.scss$/,
          /\.md$/,
        ],
        loader: 'url-loader',
        options: {
          limit: 10000,
          name: 'static/media/[name].[hash:8].[ext]',
        },
      },
      {
        enforce: 'pre',
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'eslint-loader',
      },
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['env'],
          },
        },
      },
      {
        test: /\.svg$/,
        loader: 'file-loader',
        options: {
          name: 'static/media/[name].[hash:8].[ext]',
        },
      },
      {
        test: /\.scss$/,
        loader: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
            'css-loader?sourceMap',
            {
              loader: 'postcss-loader',
              options: {
                ident: 'postcss',
                sourceMap: true,
                plugins: function() {
                  return [
                    autoprefixer({
                      browsers: [
                        '>1%',
                        'last 4 versions',
                        'Firefox ESR',
                        'not ie < 9',
                      ]
                    }),
                    require('postcss-calc'),
                    require('postcss-inline-svg')({
                      path: __dirname + '/src/assets/images',
                    }),
                  ];
                },
              },
            },
            'sass-loader?sourceMap',
          ],
        }),
      },
    ],
  },
  plugins: [
    new StyleLintPlugin({
      files: '**/*.scss',
      failOnError: false,
      configFile: './.stylelintrc',
    }),
    new ExtractTextPlugin('[name].css'),
  ],
};

