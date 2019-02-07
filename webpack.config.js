const path = require('path');
const config = require('./package.json');
const { DefinePlugin, } = require('webpack');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

const theme = 'boilerplate';

module.exports = {
  entry: {
    app: './client/scripts/app.js',
  },
  output: {
    filename: `[name].js`,
    path: path.resolve(`./wp-content/themes/${theme}/scripts`),
  },
  mode: 'development',
  module: {
    rules: [
      {
        test: /\.js$/,
        include: path.resolve(__dirname, 'client'),
        loader: 'babel-loader',
      },
      {
        test: /\.(css|scss)$/,
        include: [
          path.resolve(__dirname, 'client'),
        ],
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(jpg|png|gif|svg|eot|ttf|woff|woff2|otf)(\?.*)?$/,
        include: [
          path.resolve(__dirname, 'client'),
        ],
        loader: 'file-loader',
        options: {
          name: '../media/[name].[ext]'
        }
      }
    ],
  },
  plugins: [
    new CleanWebpackPlugin(
      [ 'media/*.*', 'scripts/*.*', 'styles/*.*' ],
      {
        root: path.resolve(`./wp-content/themes/${theme}`),
        beforeEmit: true,
      }
    ),
    new CopyWebpackPlugin(
      [
        {
          from: 'client/media',
          to: path.resolve(`./wp-content/themes/${theme}/media`),
        },
      ]
    ),
    new DefinePlugin({
      __CLIENT_VERSION__: config.version,
    }),
    new MiniCssExtractPlugin({
      filename: '../styles/[name].css',
    }),
  ],
}
