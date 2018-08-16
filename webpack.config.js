const StyleLintPlugin = require('stylelint-webpack-plugin');
const autoprefixer = require('autoprefixer');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const path = require('path');
const postcssSVG = require('postcss-svg');
const postcssInlineSVG = require('postcss-inline-svg');
const postcssCalc = require('postcss-calc');

module.exports = {
  entry: {
    'bundle.js': './src/js/main.js',
    'bundle.css': './src/assets/styles/main.scss',
  },
  output: {
    filename: '[name]',
    path: `${__dirname}/dist`,
  },
  devtool: 'source-map',
  resolve: {
    modules: [path.resolve(__dirname, 'src/components'), 'node_modules'],
  },
  module: {
    rules: [
      {
        test: /\.(png|woff|woff2|eot|ttf|svg)$/,
        exclude: [
          /\.html$/,
          /\.(js|jsx)$/,
          /\.css$/,
          /\.json$/,
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
        test: /\.scss$/,
        loader: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
            'css-loader?sourceMap',
            {
              loader: 'postcss-loader',
              options: {
                sourceMap: true,
                ident: 'postcss',
                plugins: () => [
                  autoprefixer({
                    browsers: [
                      '>1%',
                      'last 4 versions',
                      'Firefox ESR',
                      'not ie < 9',
                    ],
                  }),
                  postcssCalc,
                  postcssInlineSVG({
                    path: `${__dirname}/src/images/icons`,
                  }),
                  postcssSVG({
                    paths: [`${__dirname}/src/images/icons`],
                  }),
                ],
              },
            },
            {
              loader: 'sass-loader?sourceMap',
            },
          ],
        }),
      },
    ],
  },
  plugins: [
    new StyleLintPlugin({
      files: '**/*.scss',
      failOnError: false,
    }),
    new ExtractTextPlugin('[name]'),
  ],
};
