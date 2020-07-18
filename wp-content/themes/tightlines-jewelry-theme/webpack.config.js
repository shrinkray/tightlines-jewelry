
const path =  require('path');


// include the js minification plugin
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

// include the css extraction and minification plugins
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const CleanWebpackPlugin = require("clean-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");

module.exports = {
  mode: "production", // "production" | "development" | "none"
  entry: ['./assets/src/app.js', './assets/src/app.scss'],
  output: {
    path: path.resolve(__dirname),
   // filename: './dist/app.min.[hash].js',
    filename: './dist/app.min.js',

  },
  module: {
    rules: [
      // perform js babelization on all .js files
      {
        test: /\.assets$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ['babel-preset-env']
          }
        }
      },
      // compile all .scss files to plain old css
      {
        test: /\.(sass|scss)$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
      }
    ]
  },
  plugins: [
    // clean out build directories on each build
    new CleanWebpackPlugin(['./dist/*']),

    // extract css into dedicated file
    new MiniCssExtractPlugin({
     // filename: './dist/main.min.[hash].css'
      filename: './dist/main.min.css'
    }),
    new BrowserSyncPlugin({
          // browse to http://localhost:3000/ during development,
          // ./public directory is being served
          host: 'localhost',
          port: 3005,
          files: [
            "wp-content/themes/**/*.css",
            {
              match: ["wp-content/themes/**/*.php"],
              fn:    function (event, file) {
                /** Custom event handler **/
              }
            },
            {
              match: ["wp-content/themes/inc/*.php"],
              fn:    function (event, file) {
                /** Custom event handler **/
              }
            },
            './dist/*.js',
            './dist/*.css'
          ],
          proxy: {
            target: 'http://tightlinesjewelry.local/',
            ws: true
          }
          //server: { baseDir: ['dist'] }
        },
        // plugin options
        {
          // prevent BrowserSync from reloading the page
          // and let Webpack Dev Server take care of this
          reload: true
        }) // BrowserSyncPlugin
  ],
  optimization: {
    minimizer: [
      // enable the js minification plugin
      new UglifyJSPlugin({
        cache: true,
        parallel: true
      }),
        new OptimizeCSSAssetsPlugin({
          // browse to http://localhost:3000/ during development,
          // ./public directory is being served
          host: 'localhost',
          port: 3000,
          files: [
            "wp-content/themes/**/*.css",
            {
              match: ["wp-content/themes/**/*.php"],
              fn:    function (event, file) {
                /** Custom event handler **/
              }
            },
            {
              match: ["wp-content/themes/inc/*.php"],
              fn:    function (event, file) {
                /** Custom event handler **/
              }
            },
            './dist/*.js',
            './dist/*.css'
           // './assets/css/style.css'
          ],
          proxy: {
            target: 'http://tightlinesjewelry.local/',
            ws: true
          }
          //server: { baseDir: ['dist'] }
        })
    ]
  }
};