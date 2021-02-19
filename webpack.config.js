const path = require('path');
const autoprefixer = require('autoprefixer');

module.exports = [{
    mode: 'development',
    entry: './assets/app.scss',
    output: {
        path: path.resolve(__dirname, "public"),
    },
    module: {
      rules: [
        {
            test: /\.js$/,
            exclude: /node_modules/,
            use: {
                loader: "babel-loader"
            }
        },
        {
          test: /\.scss$/,
          use: [
            {
              loader: 'file-loader',
              options: {
                name: 'app.css',
              },
            },
            { loader: 'extract-loader' },
            { loader: 'css-loader' },
            {
                loader: 'sass-loader',
                options: {
                    sassOptions: {
                        includePaths: ['./node_modules']
                    },
        
                    // Prefer Dart Sass
                    implementation: require('sass'),

                    // See https://github.com/webpack-contrib/sass-loader/issues/804
                    webpackImporter: false,
                }
            },
          ]
        }
      ]
    },
    resolve: {
        modules: ["cache", path.resolve(__dirname, ".yarn")],
    }
  }];