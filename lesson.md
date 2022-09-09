create in themes/custom a new folder <app-name>
create a info.yml file:

```yml
name: <app-name>
type: theme
description: "A react app inside my drupal"
base theme: bartik/olivero or whatever you want
core_version_requirement: ^8 || ^9

libraries:
  - react_drupal/react_app
```

create a js folder
inside:
create dist folder
create src folder

create an index.js file and write inside:

```js
import React from "react";
import ReactDom from "react-dom";

ReactDom.render(
  <h1>hello react - drupal</h1>,
  document.getElementById("react-app")
);
```

```shell
    npm install --save react react-dom prop-types
    npm install --save-dev @babel/core @babel/preset-env @babel/preset-react babel-loader webpack
    webpack-cli
```

create a webpack.config.yml inside react_drupal file

```yml
const path = require('path');
const isDevMode = process.env.NODE_ENV !== 'production';


const config = {
  entry: {
    main: ["./js/src/main.jsx"]
  },
  //devtool: (isDevMode) ? 'source-map' : false,
  mode: (isDevMode) ? 'development' : 'production',
  output: {
    path: path.resolve(__dirname, "js/dist"),
    filename: '[name].min.js'
  },
  resolve: {
    extensions: ['.js', '.jsx'],
  },
  module: {
    rules: [
      {
        test: /\.jsx?$/,
        loader: 'babel-loader',
        exclude: /node_modules/,
        include: path.join(__dirname, 'js/src'),
      }
    ],
  },
};

module.exports = config;
```

create .babelrc in the root of your theme:
write inside:

```js
{
    "presets" : ["@babel/preset-env", "@babel/preset-react"]
}
```

create a file react_drupal.libraries.yml

write this inside:

```yml
react_app
  version: VERSION
  js:
    js/dist/main.main.js: { minified:true }
```

add helper scripts in package.json scripts:

    "start": "webpack --watch",
    "build":"NODE_ENV=production webpack"

create a template folder inside create page.html.twig
