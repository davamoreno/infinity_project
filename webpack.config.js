const path = require('path');

module.exports = {
  mode: 'development',
  entry: [
    __dirname + "/src/scss/main.scss", 
    __dirname + "/src/js/main.js"
  ],
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'js/main.js',
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
          {
            loader: "file-loader",
            options: { outputPath: "css/", name: "[name].min.css" },
          },
          "sass-loader",
        ],
      },
    ],
  },
};